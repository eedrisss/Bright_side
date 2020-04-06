<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_feedbacks extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 100,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'FEEDBACK_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'CREATOR_ID' => array(
                            'type' => 'INT',
                            'constraint' => 25,
                        ),
                        'FEEDBACK_TYPE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 20,
                        ),
                        'IS_RESPONSE' => array(
                            'type' => 'INT',
                            'constraint' => 4,
                        )
                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('feedbacks', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('feedbacks');
        }
}