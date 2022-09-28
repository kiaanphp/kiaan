<?php

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
class seed_users_table implements SeedBuild {

    /**
     * Handle
     * 
    **/
    public function handle()
    {
        DB::table("users")->insert([
            "name" => "admin",
            "email" => "admin@email.com",
            "password" => Auth::hash("password")
        ]);
    }  

}