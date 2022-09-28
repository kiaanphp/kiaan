<?php

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
class Notifications extends Model implements ModelBuild {
    
    /*
    * Table
    *
    */
    public $table = "notifications";

    /*
    * Customize value of item when insert to database.
    *
    */
    public function __setter($item)
    {
        if($item->seen){
            $item->seen_at = date("Y-m-d h:i:s");
        }

        return $item;
    }
    
}