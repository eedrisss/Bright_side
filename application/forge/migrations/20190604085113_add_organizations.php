<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_organizations extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 100,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'ORG_CODE' => [
                            'type' => 'VARCHAR',
                            'constraint' => 500
                        ],
                        'PLAN' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'PLAN_ID' => [
                            'type' => 'INT',
                            'constraint' => 40
                        ],
                        'DEFAULT_SURVEY' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'DEFAULT_DASHBOARD' => [
                            'type' => 'VARCHAR',
                            'constraint' => 50
                        ],
                        'PLAN_UPGRADE_DATE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                        )
                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('organizations', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('organizations');
        }
}