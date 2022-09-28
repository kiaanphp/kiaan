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
class Configurations extends Model implements ModelBuild {
    
    /*
    * Table
    *
    */
    public $table = "configurations";
    
}