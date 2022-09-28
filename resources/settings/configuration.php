<?php

/*
|---------------------------------------------------
| Configuration
|---------------------------------------------------
*/
return [

    /*
    |--------------------------------------------------------------------------
    | FileSystem
    |--------------------------------------------------------------------------
    |
    | FileSystem configuration of your application.
    |
    | Change "Public folder" in ".htaccess" file.
    |
    */
    'fileSystem' => [
        "public" => "public"
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing
    |--------------------------------------------------------------------------
    |
    | Configuration of cross-origin resource sharing.
    |
    */
    'cors' => [
        "enable" => true
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration of your application.
    |
    */
    'configuration' => [
        "path" => "resources/config",
        "database" => [
            "table" => "configurations"
        ]
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/
    
    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | Notifications of your application.
    |
    */
    'notifications' => [
        "table" => "notifications"
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/
    
    /*
    |--------------------------------------------------------------------------
    | Controller
    |--------------------------------------------------------------------------
    |
    | Configurations controllers of your application.
    |
    */
    'controller' => [
        "namespace" => 'App\\Application\\Controllers',
        "path" => 'application/controllers',
        "defaultMethod" => 'index'
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Configurations middleware of your application.
    |
    */
    'middleware' => [
        "namespace" => 'App\\Application\\Middleware',
        "path" => 'application/middleware',
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Configurations router of your application.
    |
    */
    'router' => [
        'enable' => true, // @bool :true or false @default false
        'path' => 'resources/routes', // path
        'web' => [ // API
            'prefix' => '', // @string :url
            'routes' => [ // @array :path
                'web'
            ]
        ],
        'api' => [ // API
            'prefix' => '/api', // @string :url
            'routes' => [ // @array :path
                'api'
            ]
        ],
        'default' => [ // Default
            'method' => 'index', // @string :index
        ],
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Views
    |--------------------------------------------------------------------------
    |
    | Configuration of views.
    |
    */
    'views' => [
        "path" => "resources/views"
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | languages
    |--------------------------------------------------------------------------
    |
    | languages of your application.
    |
    */
    'languages' => [
        "path" => "resources/lang",
        "defaultLang" => "en"
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Database
    |--------------------------------------------------------------------------
    |
    | Customize the database of your application.
    |
    */
    "db" => [
        'driver'=> getenv('Database_driver'),
        'host'=> getenv('Database_host'), // @string :mysql, sqlite, pgsql, sqlsrv
        'db' => getenv('Database_db'),
        'user' => getenv('Database_user'),
        'pass' => getenv('Database_pass'),
        'port' => getenv('Database_port'),
        'connect'=> getenv('Database_connect'),
        'error'=> getenv('Database_error'),
        "path" => "databases/database",
        "auth" => [
            "table" => "users",
            "loginSession" => "auth",
            "fields" => [
                "primaryField" => "id",
                "idField" => "email",
                "passField" => "password",
                "tokenField" => "token",
                "jwtField" => "jwt"
            ],
            "jwt" => [
                "header" => "Authorization",
                "headerPrefix" => "Bearer",
            ],
        ],
        "models" => [
            "primaryKey" => "id",
            "namespace" => "App\\Databases\\Models",
            "path" => "databases/models",
        ],
        "migrations" => [
            "namespace" => "App\\Databases\\Migrations",
            "path" => "databases/migrations",
            "table" => "migrations"
        ],
        "seeds" => [
            "namespace" => "App\\Databases\\Seeds",
            "path" => "databases/seeds"
        ],
    ],

    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Email
    |--------------------------------------------------------------------------
    |
    | Email configuration of your application.
    |
    */
    'mail' => [
        "driver" => getenv('Email_Driver'),
        'from' => [
            "email" => getenv('Email_email'),
            "name" => getenv('Email_name'),
        ],
        'host'=> getenv('Email_host'),
        'username'=> getenv('Email_username'),
        'password'=> getenv('Email_password'),
        'port'=> getenv('Email_port'),
        'protocol'=> getenv('Email_secure'), // null || tls || ssl
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Security
    |--------------------------------------------------------------------------
    |
    | Configurations for security
    |
    */
    'security' => [ // Security
        'method'=> [ // Methods of request
            'input' => '_method', // @string :name || default :_method
        ],
        'csrf' => [ // Cross-site request forgery
            'enable' => true, // @bool :true or false
            'key' => '_csrf', // @string :name || default :_csrf
            'input' => '_csrf', // @string :name || default :_csrf
        ],
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/
    
    /*
    |--------------------------------------------------------------------------
    | Validator
    |--------------------------------------------------------------------------
    |
    | Customize the validator of the framework.
    |
    */
    "validator" => [
        "namespace" => "App\\Application\\Validator",
        "path" => "application/validator"
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Events
    |--------------------------------------------------------------------------
    |
    | Configurations events of your application.
    |
    */
    'events' => [
        "namespace" => 'App\\Application\\Events',
        "path" => 'application/events',
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Cli
    |--------------------------------------------------------------------------
    |
    | Customize the cli of the framework.
    |
    */
    "cli" => [
        "namespace" => "App\\Application\\Cli",
        "path" => "application/cli",
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/
    
    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    |
    | Helpers application.
    |
    */
    'helpers' => [
        "path" => "application/helpers/helpers"
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Debug
    |--------------------------------------------------------------------------
    |
    | Configurations for debug
    |
    */
    'debug' => [ // debug
        'enable' => getenv('APP_debug'), // @bool :true or false @default false
        '404' => [ // Not found
            'page' => null, // @string :path | @null :page 404 of Kiaan framework
            'template' => true, // @bool :true or false @default false
        ],
        '500' => [ // Internal server error 
            'page' => null, // @string :path | @null :page 500 of Kiaan framework
            'template' => true, // @bool :true or false @default false
        ],
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

]; 