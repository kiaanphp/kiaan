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
namespace App\Databases\Models;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Database\DB\Build\ModelBuild;
use Kiaan\Database\DB\Build\Model;

/*
|---------------------------------------------------
| Model
|---------------------------------------------------
*/
class Comments extends Model implements ModelBuild {

    /*
    * Class
    *
    */
    protected static $__CLASS__ = __CLASS__; 

    /*
    * Table
    *
    */
    public $table = "comments"; 

    /*
    * Primary key
    *
    */
    public $primary_key = "id";

    /* 
    * Primary keys
    *
    */
    public $primary_keys = [

    ];

    /* 
    * Foreign keys
    *
    */
    public $foreign_keys = [

    ];

    /*
    * Users
    *
    */
    public function _users()
    {
        return $this->get()->with(Users::class);
    }

}