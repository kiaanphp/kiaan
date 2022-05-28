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
class Users extends Model implements ModelBuild {

    /*
    * Class
    *
    */
    protected static $__CLASS__ = __CLASS__; 

    /*
    * Table
    *
    */
    public $table = "users"; 

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
        "comments" => "id",
    ];

    /* 
    * Foreign keys
    *
    */
    public $foreign_keys = [
        "comments" => "user_id",
    ];

    /*
    * Comments
    *
    */
    public function _comments()
    {
        return $this->get()->and(Comments::class);
    }

}