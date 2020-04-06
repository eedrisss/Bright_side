<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_feedback_links extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 100,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'FEEDBACK_ID' => array(
                            'type' => 'INT',
                            'constraint' => 50,
                        ),
                        'SURVEY_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'FEEDBACK_LINKS' => array(
                            'type' => 'TEXT',
                        ),
                        'ORG_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'STATUS' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        )
                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('feedback_links', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('feedback_links');
        }
}