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
use Kiaan\Security\Validator\Rule;

/*
|---------------------------------------------------
| Class
|---------------------------------------------------
*/
class Hello_World extends Rule implements ValidatorBuild
{
    /*
    * Error message
    *
    */
    protected $message = "':attribute' attribute and ':value' value is not 'Hello World'";

    /*
    * Fillable Params
    *
    */
    protected $fillableParams = [];

    /*
    * Implicit
    *
    */
    protected $implicit = false;

    /*
    * Rule check
    *
    */
    public function check($value): bool
    {
        // Check
        if($value=='Hello World'){
            // True
            return true;
        }else{
            // False
            return false;
        }
    }
}
