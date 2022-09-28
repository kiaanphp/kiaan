<?php

/*
|---------------------------------------------------
| Namespace
|---------------------------------------------------
*/
namespace App\Application\Events;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Dev\Event\Build\EventBuild;

/*
|---------------------------------------------------
| Event
|---------------------------------------------------
*/
class WelcomeEvent implements EventBuild {

  /*
  * index
  */
  public function index() {
    echo "Welcome";
  }
  
}