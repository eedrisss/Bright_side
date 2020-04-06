<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_update_user_imports extends CI_Migration {

        public function up()
        {
            $email_updates = ["ORG_CODE" => [
                "type" => "VARCHAR",
                "constraint" => 250,
                "after" => "ID"
            ]];
            $this->dbforge->add_column('user_imports', $email_updates);
        }

        public function down()
        {
            $this->dbforge->drop_column('user_imports', 'ORG_CODE');
        }
    }