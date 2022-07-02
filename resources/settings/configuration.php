<?php

/**
 * Kiaan framework
 *
 * @author Hassan Kerdash kerdashhassan@gmail.com
**/

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
    | Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration of your application.
    |
    */
    'configuration' => [
        "path" => "resources/config",
        "database" => [
            "migration" => false,
            "table" => "config"
        ]
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
        "defaultMethod" => 'handle'
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
        'routes' => [ // routes
            'web' => [ // Web
                'web'
            ],
            'api' => [ // API
                'api'
            ],
        ],
        'api' => [ // API
            'prefix' => '/api', // @string :url
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
        'driver' => getenv('Database_driver'),
        'host'   => getenv('Database_host'),
        'db'     => getenv('Database_db'),
        'user'   => getenv('Database_user'),
        'pass'   => getenv('Database_pass'),
        'port'   => getenv('Database_port'),
        'error'   => getenv('Database_error'),
        "auth" => [
            "table" => "users",
            "loginSession" => "auth",
            "fields" => [
                "primaryField" => "id",
                "idField" => "email",
                "passField" => "password"
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
            "method" => "handle",
        ],
        "seeds" => [
            "namespace" => "App\\Databases\\Seeds",
            "path" => "databases/seeds",
            "method" => "handle",
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
        'debugger' => [ // debugger
            'enable' => true, // @bool :true or false @default false
        ],
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
        "path" => "application/validator",
        "defaultMethod" => 'handle'
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Sockets
    |--------------------------------------------------------------------------
    |
    | Sockets of your application.
    |
    */
    'socket' => [
        "namespace" => "App\\Application\\Sockets\\Socket",
        "port" => "8080"
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
        "defaultMethod" => 'handle'
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
    | Errors
    |--------------------------------------------------------------------------
    |
    | Configurations for errors
    |
    */
    'errors' => [ // Errors
        '403' => [ // Forbidden
            'page' => '', // @string :path | @default :page 403 of Kiaan framework
        ],
        '404' => [ // Not Found
            'page' => '', // @string :path | @default :page 404 of Kiaan framework
        ],
        '500' => [ // Internal server error 
            'page' => '', // @string :path | @default :page 500 of Kiaan framework
        ],
    ],
    /*--------------------------------------------------------------------------
    | End
    --------------------------------------------------------------------------*/

]; 