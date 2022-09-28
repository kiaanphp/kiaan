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
class create_configurations_table implements MigrateBuild {

    /**
     * Migration
     * 
    **/
    public function migration()
    {
        Schema::createTable('configurations')
        ->id()
        ->string('title')->notNullable()
        ->string('value')->notNullable()
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
        Schema::deleteTable('configurations');
    } 

}