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
use Kiaan\View;

/*
|---------------------------------------------------
| Helpers for views
|---------------------------------------------------
*/
class Views {

    /* 
    * Handle
    *
    */
    public function handle() {

        #--------------------------------------------------
        /**
         * Blob
         *
        */
        View::addHelper("blob",function($arg){
            return ('data:;base64,'.base64_encode($arg));
        });
        #--------------------------------------------------

        #--------------------------------------------------
        /**
         * Limit
         *
        */
        View::addHelper("limit",function($arg, $limit, $symbol='...'){
            return substr_replace($arg, $symbol, $limit);
        });
        #--------------------------------------------------

        #--------------------------------------------------
        /**
         * Lower
         *
        */
        View::addHelper("lower",function($arg){
            return strtolower($arg);
        });
        #--------------------------------------------------

        #--------------------------------------------------
        /**
         * Substr
         *
        */
        View::addHelper("substr",function($arg, $frist, $second=1) {
            return substr($arg, $frist, $second);
        });
        #--------------------------------------------------

        #--------------------------------------------------
        /**
         * Upper
         *
        */
        View::addHelper("upper",function($arg) {
            return strtoupper($arg);
        });
        #--------------------------------------------------        

    }

}