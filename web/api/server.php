<?php

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

$logger->info("Starting...");
$logger->info("Accepting connections to ".$ip.":19132");

$server = IoServer::factory(new HttpServer(new WsServer(new Master($logger))), 19132);


$server->run();

?>
