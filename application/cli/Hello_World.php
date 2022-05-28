<?php

/**
 * Kiaan framework
 *
 * @author Hassan Kerdash kerdashhassan@gmail.com
**/

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
| Cli
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
        Cli::menu(["test"]);
    }

    /**
     * Test
     * 
    **/
    public function test()
    {
        echo "Hello_World";
    }

}