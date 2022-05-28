<?php

/**
 * Kiaan framework
 *
 * @author Hassan Kerdash kerdashhassan@gmail.com
**/

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
        // Views helpers
        $this->viewsHelpers();

        // Validator rules
        $this->validatorRules();

        // Cli commands
        $this->cliCommands();
    }

    /* 
    * Views helpers
    *
    */
    public function viewsHelpers() {
        // Run views helpers
        (new \App\Application\Helpers\Views)->handle();
    }

    /* 
    * Validator rules
    *
    */
    public function validatorRules() {
        // List
        $list = [
            "Hello_World" => "Hello_World",
        ];

        // Validator rules
        Validator::addRules($list);
    }

    /* 
    * Cli commands
    *
    */
    public function cliCommands() {
        // List
        $list = [
            "Hello_World" => "Hello_World",
        ];

        // Cli commands
        Cli::addCommands($list);
    }
    
}