<?php
/**
 * A base controller for CodeIgniter with view autoloading, layout support,
 * model loading, helper loading, asides/partials and per-controller 404
 *
 * @link http://github.com/jamierumbelow/codeigniter-base-controller
 * @copyright Copyright (c) 2012, Jamie Rumbelow <http://jamierumbelow.net>
 */
class MY_Controller extends CI_Controller
{
    private $encryption_key = '';
    protected $view = '';
    protected $data = array();
    protected $layout;
    protected $asides = array();
    protected $models = array();
    protected $model_string = '%_model';
    protected $helpers = array();
    public function __construct()
    {
        parent::__construct();
        $this->_load_models();
        $this->_load_helpers();
        $this->_load_assets();
        $this->_enforcer(); //Ensures the user is logged in
    }
    
    /* --------------------------------------------------------------
     * VIEW RENDERING
     * ------------------------------------------------------------ */
    /**
     * Override CodeIgniter's despatch mechanism and route the request
     * through to the appropriate action. Support custom 404 methods and
     * autoload the view into the layout.
     */
    public function _remap($method)
    {
        if (method_exists($this, $method))
        {
            call_user_func_array(array($this, $method), array_slice($this->uri->rsegments, 2));
        }
        else
        {
            if (method_exists($this, '_404'))
            {
                call_user_func_array(array($this, '_404'), array($method));
            }
            else
            {
                show_404(strtolower(get_class($this)).'/'.$method);
            }
        }
        $this->_load_view();
    }

    /**
     * enables agent's details across all controller
    */
    public function is_logged_in() {
        $is_logged_in = (bool)isset($_SESSION['user_details']);   

        //$is_logged_in = false;
        $controller = $this->uri->segment(1);
        $method = $this->uri->segment(2);
        
        $uri = $controller.'/'.$method;

        if($this->_is_json() && $uri === 'welcome/is_logged_in'):
            $this->output->set_content_type('application/json')->set_output(json_encode(array('uri'=>$uri,'is_true'=>$is_logged_in)));
        else:
            return $is_logged_in;
        endif;
    }

    private function _enforcer()
    {
        $exceptions = array('response','auth','category','welcome','forgot_password','login','logout','migration','home','signup','api','');
        $controller = $this->uri->segment(1);
        $method = $this->uri->segment(2);
       

        $url = trim($controller)."/".trim($method);
        
        if(!$this->is_logged_in() && !in_array(trim($controller), $exceptions)): //User is not logged in and user controller is not in exceptions      
            redirect(base_url("login"));
        elseif($this->is_logged_in() && !in_array(trim($controller), $exceptions)):
            if($this->_is_ajax()):
                //coming from an ajax request
            else:
                //$this->_maintain_token();
            endif;
        endif;     
    }

    /**
     * A helper method to check if a request has been
     * made through XMLHttpRequest (AJAX) or not 
     *
     * @return bool
     * @author Jamie Rumbelow
     */
    protected function _is_ajax() {
        return ($this->input->server('HTTP_X_REQUESTED_WITH') == 'XMLHttpRequest') ? TRUE : FALSE;
    }
    
    protected function _is_json() {
        return strstr($this->input->get_request_header("Accept",TRUE),"json");
    }
    


    /**
     * Automatically load the view, allowing the developer to override if
     * he or she wishes, otherwise being conventional.
     */
    protected function _load_view()
    {
        // If $this->view == FALSE, we don't want to load anything
        if ($this->view !== FALSE)
        {
            // If $this->view isn't empty, load it. If it isn't, try and guess based on the controller and action name
            $view = (!empty($this->view)) ? $this->view : $this->router->directory . $this->router->class . '/' . $this->router->method;
            // Load the view into $yield
            $data['yield'] = $this->load->view($view, $this->data, TRUE);
            // Do we have any asides? Load them.
            if (!empty($this->asides))
            {
                foreach ($this->asides as $name => $file)
                {
                    $data['yield_'.$name] = $this->load->view($file, $this->data, TRUE);
                }
            }
            // Load in our existing data with the asides and view
            $data = array_merge($this->data, $data);
            $layout = FALSE;
            $welcome_array = ["auth", "login","signup"];
            // If we didn't specify the layout, try to guess it
            if (!isset($this->layout))
            {
                
                if (file_exists(APPPATH . 'views/layouts/' . $this->router->class . '.php'))
                {
                    $layout = 'layouts/' . $this->router->class;
                } else if(in_array($this->router->class, $welcome_array)) {
                    $layout = 'layouts/welcome';
                } else {
                    $layout = 'layouts/application';
                }
            }
            // If we did, use it
            else if ($this->layout !== FALSE)
            {
                $layout = $this->layout;
            }
            // If $layout is FALSE, we're not interested in loading a layout, so output the view directly
            if ($layout == FALSE)
            {
                $this->output->set_output($data['yield']);
            }
            // Otherwise? Load away :)
            else
            {
                $this->load->view($layout, $data);
            }
        }
    }

    /* --------------------------------------------------------------
     * MODEL LOADING
     * ------------------------------------------------------------ */
    /**
     * Load models based on the $this->models array
     */
    private function _load_models()
    {
        foreach ($this->models as $model)
        {
            $this->load->model($this->_model_name($model), $model);
        }
    }
    
    /**
     * Returns the loadable model name based on
     * the model formatting string
     */
    protected function _model_name($model)
    {
        return str_replace('%', $model, $this->model_string);
    }

    /* --------------------------------------------------------------
     * HELPER LOADING
     * ------------------------------------------------------------ */
    /**
     * Load helpers based on the $this->helpers array
     */
    private function _load_helpers()
    {
        foreach ($this->helpers as $helper)
        {
            $this->load->helper($helper);
        }
    }

     /**
     * Loads all the necessary assets for the project
    */
    private function _load_assets()
    {
        //set default page title
        $this->data['title'] = "";

        $this->data['base'] = $this->config->item("base_url");
        
        if(count((array)$this->config->item('assets')) > 1):
            foreach($this->config->item('assets') as $asset_name => $location):            
                $this->data[$asset_name] = base_url($location);
            endforeach;
        endif;     

        if(isset($_SESSION['user_details'])):
            $this->user_data = $this->data['user_details'] = $_SESSION['user_details']; // set user_details in session
            $this->user_id = $this->user_data->ID;

            //$this->user_role = $this->user_data->USER_CATEGORY;

            // $this->user_role = $this->data['user_role'] = $_SESSION['user_role'];
            // var_export($this->user_role);
            // //die();
            // //User is logged in, we want to get all user paid status
            // $this->user_paid = $this->_get_paid_status($this->user_id);
        endif;       
    }

    public function get_user_role($user_id)
    {
        $this->db->select("ROLE_NAME");
        $this->db->join("roles", "ROLE_ID = roles.ID", "INNER");
        $user_role_data = $this->db->limit(1)->get_where("user_roles", ["USER_ID" => $user_id])->result_array();

        if((bool)$user_role_data):
            return $user_role_data[0]['ROLE_NAME'];
        else:

        endif;
    }

    public function sendEmail($recipient, $subject, $view, $data = array(), $from = false, $headers = [], $alias = false) {
        $this->load->library('email');

        $from_email = ($from == false) ? 'hello@giverity.com' : $from;
        $alias = ($alias == false) ? 'Giverity' : $alias;

        $this->email->from($from_email, $alias);
        //check if recipient is single or an array of recipients
        if(is_array($recipient)):
            $recipient = implode(',', $recipient);
            // $this->email->to('adebayo@lenifeedback.com');
            $this->email->bcc($recipient);
        else:
            // $recipient = "debaryour@gmail.com";
            // $this->email->to($recipient);
            $this->email->bcc($recipient);
        endif;

        //$recipient = 'debaryour@gmail.com';
        if($headers) {
            foreach($headers as $key => $value):
                $this->email->set_header($key, $value);     
            endforeach;
        }
       
        
        $this->email->subject($subject);
        $body = $this->load->view($view, $data, TRUE);

        $this->email->message($body);
        $sendEmail = $this->email->send();
        //var_export($this->email->print_debugger());
        return $sendEmail;
    }

    public function validate_data($data, $not_required, $unique, $table = '')
    {
        $this->form_validation->set_data($data);
        foreach($data as $key => $value):
            if(!in_array($key, $not_required)):
                $this->form_validation->set_rules($key, strtoupper(str_replace("_", " ", $key)), "trim|required");
            endif;

            if(in_array($key, $unique)):
                $this->form_validation->set_rules($key, strtoupper($key), "is_unique[$table.$key]");
            endif;
        endforeach;

        return $this->form_validation->run();
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    
    public function _createGuid()
	{
		if (function_exists('com_create_guid') === true)
		{
			return trim(com_create_guid(), '{}');
		}

		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
    
}