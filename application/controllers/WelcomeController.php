<?php

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

/*
|---------------------------------------------------
| Controller
|---------------------------------------------------
*/
class WelcomeController implements ControllerBuild {

  public function index() {
    page("welcome");
  }

}