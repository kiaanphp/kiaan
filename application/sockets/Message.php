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
| Message
|---------------------------------------------------
*/
trait Message {
    
    /*
    * On message
    *
    */
    public function onMessage($from, $msg) {
        // Send message to all users and but not for you
        foreach ($this->clients as $client) {
            if ($from->id !== $client->id) {
                echo "\n Client said: '{$msg}' to ({$client->id})\n";

                $client->send($msg);
            }
        }        
    }
    
}