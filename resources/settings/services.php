<?php

/*
|---------------------------------------------------
| Namespaces
|---------------------------------------------------
*/
namespace App\Resources\Settings;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Schema;
use Kiaan\Validator;
use Kiaan\Cli;

/*
|---------------------------------------------------
| Services
|---------------------------------------------------
*/
class Services {

    /* 
    * Handle
    *
    */
    public function handle() {
        // Schema migrations
        Schema::migrations([
            "create_users_table" => "create_users_table",
            "create_configurations_table" => "create_configurations_table",
            "create_notifications_table" => "create_notifications_table"
        ]);

       // Schema seeds
       Schema::seeds([
            "seed_users_table" => "seed_users_table",
        ]);

        // Validator rules
        Validator::rules([
            "helloWorld" => "Hello_World",
        ]);

        // Cli commands
        Cli::commands([
            "helloWorld" => "Hello_World",
        ]);
    }
    
}