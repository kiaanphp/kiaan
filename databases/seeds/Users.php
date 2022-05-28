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
namespace App\Databases\Seeds;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Database\Schema\Build\SeedBuild;
use Kiaan\DB;
use Kiaan\Auth;

/*
|---------------------------------------------------
| Seeds
|---------------------------------------------------
*/
class Users implements SeedBuild {

    /**
     * Handle
     * 
    **/
    public function handle()
    {
        DB::table("users")->insert([
            "name" => "Hassan",
            "email" => "kerdashhassan@gmail.com",
            "password" => Auth::hash("password")
        ]);
    }  

}