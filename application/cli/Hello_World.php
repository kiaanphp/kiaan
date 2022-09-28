<?php

/*
|---------------------------------------------------
| Namespace
|---------------------------------------------------
*/
namespace App\Application\Cli;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Dev\Cli\Build\CliBuild;
use Kiaan\Cli;

/*
|---------------------------------------------------
| Class
|---------------------------------------------------
*/
class Hello_world implements CliBuild {

    /**
     * Handle
     * 
    **/
    public function handle()
    {
        return [
            "menu" => "menu_handle",
            "test" => "test"
        ];
    }  

    /**
     * Menu handle
     * 
    **/
    public function menu_handle()
    {
        Cli::menu(["test : test action"]);
    }

    /**
     * Test action
     * 
    **/
    public function test()
    {
        return "Hello_World";
    }

}