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
| Uses
|---------------------------------------------------
*/
use Kiaan\Contact\Socket\Build\SocketBuild;

/*
|---------------------------------------------------
| Socket
|---------------------------------------------------
*/
class Socket implements SocketBuild {

    /*
    * Traits
    *
    */
    use Open;
    use Message;
    use Error;
    use Close;

    /*
    * Clients
    *
    */
    protected $clients;

}