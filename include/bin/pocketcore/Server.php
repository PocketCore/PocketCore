<?php
namespace pocketcore;

use Ratchet\ConnectionInterface;

class Server {
    
    protected $ip;
    protected $port;
    
    public $lastRequest = 0; // To avoid DDoS :)
    public $authenticated = false; // set to microtime(true)
    
    protected $connection;
    
    public function __construct(ConnectionInterface $conn){
        $this->connection = $conn;
    }
    
    public function getConnection(){
        return $this->connection;
    }
    
    public function send($data){
        $this->connection->send($data);
    }
    
    public function close(){
        $this->connection->close();
    }
    
    public function getAddress(){
        return $this->connection->remoteAddress;
    }
    
    /**
     * @deprecated
     */
    public function respond($data){
        $this->connection->send(json_encode(array('response' => $data)));
    }
    
    public function returnData($data){
        $this->connection->send(json_encode(array('return' => $data)));
    } 
    
    public function error($data){
        $this->connection->send(json_encode(array('error' => $data)));
    }    
}