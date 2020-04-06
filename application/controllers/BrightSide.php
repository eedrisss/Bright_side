<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrightSide extends CI_Controller {
	public function index()
	{
		$this->load->view('brightside/welcome');
	}

	public function about()
	{
		$this->load->view('brightside/about');
	}

	public function tutors()
	{
		$this->load->view('brightside/tutors');
	}

	public function subjects()
	{
		$this->load->view('brightside/subjects');
	}

	public function find_tutors()
	{		
		$this->load->view('brightside/find_tutors');
	}

	public function do_find_tutors()
	{
		if($_POST) {
			//if post request is set then check for certain input and send an email
			if(($this->input->post('form_stage'))) {
				$form_stage = $this->input->post('form_stage');
				$form_data = $this->input->post();
				switch($form_stage) {
					case 'client':
						$validate_client = $this->_validate_form($form_data);
						if($validate_client) {
							// All is well save into the database and attach a new files
							// $learner_view = $this->load->view('partials/find_tutors/learner', '', true);
							$response = ['status' => true];
							$this->output->set_output(json_encode($response));
							
						} else {
							//throw error all parameters are required
							return $this->output->set_output(json_encode(['status' => false, 'message' => 'All fields are required']));
						}
					break;
					case 'learner':
						$validate_learner = $this->_validate_form($form_data);
						if($validate_learner) {

						} else {
							//throw error all parameters are required
						}
					break;
					case 'plan':
						$validate_plan = $this->_validate_form($form_data);
						if($validate_plan) {

						} else {
							//throw error all parameters are required
						}
					break;
					default:
						return $this->output->set_output(json_encode(['status' => false, 'message' => 'invalid form stage']));
					break;
				}

				
			}
		}
	}

	public function _validate_form($validation_data, $not_required = [], $unique = [])
	{
		$this->form_validation->set_data($validation_data);
        foreach($validation_data as $key => $value):
            if(!in_array($key, $not_required)):
                $this->form_validation->set_rules($key, strtoupper(str_replace("_", " ", $key)), "trim|required");
            endif;

            // if(in_array($key, $unique)):
            //     $this->form_validation->set_rules($key, strtoupper($key), "is_unique[$table.$key]");
            // endif;
        endforeach;

        return $this->form_validation->run();
	}

	public function save_data($table_name, $table_data)
	{
		try {
			$this->db->insert($table_name, $table_data);
			$insert_id = $this->db->last_insert_id;
		} catch(Exception $e) {
			return ['status' => false, 'message' => $e->getMessage()];
		}

	}

	public function join_tutors()
	{
		$this->load->view('brightside/join_tutors');
	}
}
