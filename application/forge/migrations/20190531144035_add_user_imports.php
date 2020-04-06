<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user_imports extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 50,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'CREATED_BY' => array(
                            'type' => 'INT',
                            'constraint' => 50,
                        ),
                        'IMPORT_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'HAS_HEADER' => array(
                            'type' => 'INT',
                            'constraint' => 4,
                        ),
                        'FEEDBACK_TYPE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                        ),
                        'CHANNEL_TYPE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'DATA' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'CHANNEL_KEY' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'IMPORT_NAME' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 500,
                            'null' => false,
                        ),
                        'STATUS' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 100,
                        ),
                        'DATE_CREATED' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                            'null' => false,
                        ),
                        'LAST_MODIFIED' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                            'null' => false,
                        ),

                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('user_imports', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('user_imports');
        }
}