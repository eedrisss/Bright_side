<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_update_users extends CI_Migration {

        public function up()
        {
            $user_updates = [
                "FIRSTNAME" => [
                    "type" => "VARCHAR",
                    "constraint" => 1000,
                    "after" => "ORG_ID"
                ],
                "LASTNAME" => [
                    "type" => "VARCHAR",
                    "constraint" => 1000,
                    "after" => "FIRSTNAME"
                ],
            ];
            $this->dbforge->add_column('users', $user_updates);
        }

        public function down()
        {
            $this->dbforge->drop_column('user_imports', 'ORG_CODE');
        }
    }