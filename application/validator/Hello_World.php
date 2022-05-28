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
namespace App\Application\Validator;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Security\Validator\Build\ValidatorBuild;

/*
|---------------------------------------------------
| Class
|---------------------------------------------------
*/
class Hello_World implements ValidatorBuild {

    /**
     * handle
     * 
    **/
    public function handle()
    {
        return [
            "rule" => "rule",
            "message" => "message",
            "text" => "text"
        ];
    }    

    /**
     * Rule
     * 
     * $field string
     * $parms array
     * @return bool
     * 
    **/
    public function rule($name, $value, $parms)
    {
        // Check
        if($value=='Hello_World'){
            // True
            return true;
        }else{
            // False
            return false;
        }
    }    

    /**
     * Message
     * 
     * $name string
     * @return string
     * 
    **/
    public function message($name, $value, $parms){
        return "Hello '$name'.";
    }

    /**
     * Text 
     * 
     * $name string
     * $message string
     * @return string
     * 
    **/
    public function text($name, $value, $parms, $message){
        return $message;
    }

}