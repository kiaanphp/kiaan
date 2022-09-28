<?php

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
            exit("Hello World!");
        }

    }

}