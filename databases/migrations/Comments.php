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
namespace App\Databases\Migrations;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Database\Schema\Build\MigrateBuild;
use Kiaan\Schema;

/*
|---------------------------------------------------
| Migrations
|---------------------------------------------------
*/
class Comments implements MigrateBuild {

    /**
     * Handle
     * 
    **/
    public function handle()
    {
        Schema::createTable('comments')
        ->key('id')->notNull()->primary()->auto()
        ->number('user_id')->notNull()
        ->string('comment')->notNull()
        ->timestamp('created_at')->current()
        ->timestamp('updated_at')->current()->updateCurrent()
        ->submit();
    }  

}