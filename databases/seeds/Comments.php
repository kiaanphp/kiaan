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

/*
|---------------------------------------------------
| Seeds
|---------------------------------------------------
*/
class Comments implements SeedBuild {

    /**
     * Handle
     * 
    **/
    public function handle()
    {
        DB::table("comments")->insert([
            "user_id" => "1",
            "comment" => "Hello"
        ]);
    }  

}