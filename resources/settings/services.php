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
        // Routes helpers
        $this->routesHelpers();

        // Views helpers
        $this->viewsHelpers();       

        // Validator rules
        $this->validatorRules();

        // Cli commands
        $this->cliCommands();
    }
    
    /* 
    * Routes helpers
    *
    */
    public function routesHelpers() {
        // Run routes helpers
        (new \App\Application\Helpers\Routes)->handle();
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
        // Validator rules
        Validator::addRules([
            "helloWorld" => "Hello_World",
        ]);
    }

    /* 
    * Cli commands
    *
    */
    public function cliCommands() {
        // Cli commands
        Cli::addCommands([
            "helloWorld" => "Hello_World",
        ]);
    }
    
}