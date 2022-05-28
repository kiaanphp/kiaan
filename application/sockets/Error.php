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
namespace App\Application\Sockets;

/*
|---------------------------------------------------
| Error
|---------------------------------------------------
*/
trait Error {
    
    /*
    * On error
    *
    */
    public function onError($from, $e) {
        echo "An error has occurred: {$e->getMessage()}n";
        
         // Close connection
        $from->close();
    }
    
}