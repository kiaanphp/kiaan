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
| Open
|---------------------------------------------------
*/
trait Open {
    
    /*
    * On open
    *
    */
    public function onOpen($from) {
        // Store the new connection for client
        $this->clients[$from->id] = $from;

        echo "New connection! ({$from->id})\n";
    }
    
}