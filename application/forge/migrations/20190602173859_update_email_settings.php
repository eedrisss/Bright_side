<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_update_email_settings extends CI_Migration {

        public function up()
        {
            $email_updates = ["USER_ID" => [
                "type" => "INT",
                "constraint" => 50,
                "after" => "ORG_CODE"
            ]];
            $this->dbforge->add_column('email_settings', $email_updates);
        }

        public function down()
        {
            $this->dbforge->drop_column('email_settings', 'USER_ID');
        }
    }