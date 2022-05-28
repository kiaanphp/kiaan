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
| Close
|---------------------------------------------------
*/
trait Close {

    /*
    * On close
    *
    */
    public function onClose($from) {
        // Close connection
        $this->clients[$from->id]->close();

        // Remove connection
        unset($this->clients[$from->id]);
        
        echo "Connection {$from->id} has disconnected\n";
    }

}