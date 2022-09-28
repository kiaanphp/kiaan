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
class create_users_table implements MigrateBuild {

    /**
     * Migration
     * 
    **/
    public function migration()
    {
        Schema::createTable('users')
        ->id()
        ->string('name')->notNullable()
        ->string('email')->notNullable()
        ->string('password')->notNullable()
        ->string('token')->nullable()
        ->string('jwt')->nullable()
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
        Schema::deleteTable('users');
    } 

}