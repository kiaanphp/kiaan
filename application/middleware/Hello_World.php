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
namespace App\Application\Middleware;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Dev\Middleware\Build\MiddlewareBuild;

/*
|---------------------------------------------------
| Middleware
|---------------------------------------------------
*/
class Hello_World implements MiddlewareBuild {

    /*
    * Handle
    */
    public function handle() {

        if (1 !== 1) {
            die("Hello World!");
        }

    }

}