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
namespace App\Application\Helpers;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Route;
use Kiaan\View;
use Kiaan\Url;

/*
|---------------------------------------------------
| Helpers for routes
|---------------------------------------------------
*/
class Routes {

    /* 
    * Handle
    *
    */
    public function handle() {

        #--------------------------------------------------
        /**
         * Page
         *
        */
        Route::addhelper("page", function($uri, $page, $data=[], $method='get', $options=[]){
            return Route::{$method}($uri, function () use ($page, $data) {
                return View::page($page, $data);
               }, $options);
        });
        #--------------------------------------------------     

    }

}