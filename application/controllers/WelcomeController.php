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
namespace App\Application\Controllers;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Dev\Controller\Build\ControllerBuild;
use Kiaan\View;

/*
|---------------------------------------------------
| Controller
|---------------------------------------------------
*/
class WelcomeController implements ControllerBuild {

    /*
    * Index
    */
    public function index() {
        View::page("welcome");
    }

}

