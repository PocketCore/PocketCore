<?php
namespace pocketcore;
/*
 Alright, lets do this :)
*/

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

use pocketcore\utils\Logger;

class Master implements MessageComponentInterface {
    
    protected $connections;
    
    public function __construct(Logger $logger){
        $this->connections = new \SplObjectStorage;
        $this->logger = $logger;
        
        $this->logger->info("Server started.");
    }
    
    public function getLogger(){
        return $this->logger;
    }
    
    public function onOpen(ConnectionInterface $conn){
        $this->connections->attach($conn);
        $this->info("New connection received");
        $conn->send("Connected");
    }
    
    public function onMessage(ConnectionInterface $conn, $msg){
        # TODO
        $this->info("Received: ".$msg);
    }
    
    public function onClose(ConnectionInterface $conn){
        $this->connections->detach($conn);
        $this->info("Someone disconnected");
    }
    
    public function onError(ConnectionInterface $conn, \Exception $e){
        echo "\n"."[ERROR] The following error occured: ".$e->getMessage();
        $conn->close();
        $this->connections->detach($conn);
    }
    
    public function __destruct(){
        echo "\nServer Stopped.";
    }
    
}