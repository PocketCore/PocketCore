<?php

/*
    Default port: 27090 - 27100
*/

define("API", 1); // To require scripts, constant 'API' must be defined else you won't have permission for them

require __DIR__ . '/include/vendor/autoload.php'; // Load Ratchet

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use pocketcore\Master;
use pocketcore\utils\Logger;

$logger = new Logger();
$st = microtime(true);

$host = gethostname();
$ip = gethostbyname($host);
$port = 27095;

$logger->info("Starting...");
$logger->info("Accepting connections to ".$ip.":".$port);

$server = IoServer::factory(
                            new Master($logger), $port);


$server->run();
$logger->info("Server stopped!");

?>
