<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 11,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'ORG_ID' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 250,
                        ),
                        'USERNAME' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 500,
                        ),
                        'FULLNAME' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 1000,
                        ),
                        'ADDRESS' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'PHONE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 250,
                        ),
                        'EMAIL' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 255,
                        ),
                        'PASSWORD' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 300,
                        ),
                        'PLAN' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                            'null' => false,
                        ),
                        'HAS_CREATED_FEEDBACK' => array(
                            'type' => 'INT',
                            'constraint' => 4,
                            'null' => false,
                        ),
                        'HAS_GOTTEN_RESPONSE' => array(
                            'type' => 'INT',
                            'constraint' => 4,
                            'null' => false,
                        ),
                        'DATE_CREATED' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                            'null' => false,
                        ),
                        'LAST_LOGIN' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                        ),
                        'IS_ACTIVE' => array(
                            'type' => 'INT',
                            'constraint' => 4,
                        )

                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('users', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}