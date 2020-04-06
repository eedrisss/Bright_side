<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_scheduled_sends extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 100,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'SURVEY_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'ORG_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'DATE_SCHEDULED' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                        )
                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('scheduled_sends', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('scheduled_sends');
        }
}