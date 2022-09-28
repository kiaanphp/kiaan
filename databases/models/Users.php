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
use App\Databases\Models\Notifications;
use App\Databases\Models\Phones;

/*
|---------------------------------------------------
| Model
|---------------------------------------------------
*/
class Users extends Model implements ModelBuild {
    
    /*
    * Table
    *
    */
    public $table = "users";

    /*
     * The attributes that should be hidden for arrays.
    *
    */
    public $hidden = [
        "password",
    ];

    /*
    * Customize value of item when insert to database.
    *
    */
    public function __setter($item)
    {
        $item->password = password($item->password);

        return $item;
    }

    /*
    * Phones
    *
    */
    public function phones()
    {
       return $this->hasOne(Phones::class);
    }

}