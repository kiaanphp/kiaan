<?php

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
class create_notifications_table implements MigrateBuild {

    /**
     * Migration
     * 
    **/
    public function migration()
    {
        Schema::createTable('notifications')
        ->id()
        ->integer('user_id')->notNullable()
        ->string('data')->notNullable()
        ->boolean('seen')->default(0)
        ->timestamp('seen_at')->nullable()
        ->timestamp('created_at')->current()
        ->timestamp('updated_at')->current()->updateCurrent()
        ->submit();
    }  

    /**
     * Rollback
     * 
    **/
    public function rollback()
    {
        Schema::deleteTable('notifications');
    } 

}