<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_email_settings extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                            'type' => 'INT',
                            'constraint' => 11,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'ORG_CODE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '250',
                        ),
                        'BRAND_NAME' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'QUESTION' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'DISPLAY_PREFIX' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'EMAIL_PREFIX' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'EMAIL_SUBJECT' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'RECIPIENT' => array(
                            'type' => 'TEXT',
                            'null' => false,
                        ),
                        'RECIPIENT_EMAIL' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 500,
                            'null' => false,
                        ),
                        'BRAND_IMAGE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 500,
                            'null' => false,
                        ),
                        'SURVEY_TYPE' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                            'null' => false,
                        )

                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('email_settings', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('email_settings');
        }
}