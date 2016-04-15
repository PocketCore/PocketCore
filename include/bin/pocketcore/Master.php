<?php
namespace pocketcore;
/*
 Alright, lets do this :)
*/

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

use pocketcore\utils\Logger;

use pocketcore\manager\Manager;
use pocketcore\manager\BanManager;
use pocketcore\manager\AuthManager;
use pocketcore\manager\PlayerManager;
use pocketcore\manager\ServerManager;
use pocketcore\manager\RespondManager;
use pocketcore\Server;

class Master implements MessageComponentInterface {
    
    protected $servers;
    
    private static $managers = [];
    
    public function __construct(Logger $logger){
        $st = microtime(true);
        $this->servers = array();
        
        $this->logger = $logger;
        
        $load = [
            BanManager::class,
            AuthManager::class,
            PlayerManager::class,
            ServerManager::class,
            RespondManager::class,
        ];
        foreach($load as $m){
            if(self::loadManager($m, false, $this)){
                $this->logger->debug("Loaded manager '".$m."'");
            } else {
                $this->logger->debug("Failed to load manager '".$m."'");
            }
        }
        $this->getLogger()->info("All managers loaded.");
        $this->logger->info("Done! (".(microtime(true) - $st)."s).");
    }
    
    /**
     * @param string $className
     * @param bool $force = false
     * 
     * @return bool
     */
    public static function loadManager($className, $force = false, Master $master){
        $class = new \ReflectionClass($className);
        if(is_a($className, Manager::class, true) and !$class->isAbstract()){
            self::$managers[$class->getShortName()] = new $className($master);
            return true;
        } elseif(!$force) {
            return false;
        }
    }
    
    /**
     * @return Logger
     */
    public function getLogger(){
        return $this->logger;
    }
    
    /**
     * Called when new server is trying to connect
     * 
     * @void
     */
    public function onOpen(ConnectionInterface $conn){
        $server = $this->createServer($conn);
            $this->getLogger()->info($server->getAddress()." connected.");
        $server->respond('Connection.open');
    }
    
    
    /**
     * @param ConnectionInterface $conn
     * @return NULL|Server
     */
    public function createServer(ConnectionInterface $conn){
        if(!$this->getServer($conn)){
            $server = new Server($conn);
            $this->servers[] = $server;
            return $server;
        }
        return false;
    }
    
    /**
     * @param ConnectionInterface
     */
    public function getServer(ConnectionInterface $conn){
        foreach($this->servers as $server){
            if($server->getConnection() === $conn) return $server;
        }    
        return null;
    }
    
    /**
     * Called when server is making a request (API)
     * 
     * @param ConnectionInterface $conn
     * @param string $msg
     */
    public function onMessage(ConnectionInterface $conn, $msg){
        $server = $this->getServer($conn);
        if((microtime(true) - $server->lastRequest) < 1){ // calm down 1 second
            $server->error('Request.fail.spam');
            $server->lastRequest = microtime(true);
            return;
        } else {
            $this->logger->debug(($server->lastRequest - microtime(true))." > 0.5");
        }
        $this->logger->info(rtrim($server->getAddress().": ".$msg));
        if($data = json_decode($msg)){
            $this->logger->debug('Recieved request from '.$conn->remoteAddress."");
            if(!$this->hasPermission($server)){
                if(isset($data->api_key)){
                    $server->authenticated = true; # TODO: add authentication system for servers
                    $server->respond('Auth.ok');
                    return; # One action at the time ;)
                } else {
                    # Server doesn't have permission to make requests
                    $server->error('Request.fail.noperm');
                    return;
                }
            }
            if(isset($data->target)){
                if(isset(self::$managers[$data->target])){
                    $target = self::$managers[$data->target];
                    if(isset($data->action)){
                        if(method_exists($target, $data->action)){
                            $args = isset($data->args) ? $data->args : array();
                            $action = $data->action;
                            $server->returnData($target->{$action}($args));
                        } else {
                            $server->error('Request.action.invalid');
                        }
                    } else {
                        $server->error('Request.action.null');
                    }
                } else {
                    $server->error('Request.target.invalid');
                }
            } else {
                $server->error('Request.target.null');
            }
        } else {
            $this->logger->debug("Got invalid message, could not decode into json!");
        }
    }
    
    public function hasPermission(Server $server){
        return $server->authenticated;
    }
    
    public function onClose(ConnectionInterface $conn){
        $server = $this->getServer($conn);
        
    }
    
    public function onError(ConnectionInterface $conn, \Exception $e){
        $this->logger()->warning("The following error occured ".$e->getCode()."#: ".$e->getMessage());
        $server = $this->getServer($conn);
        
        $this->connections->detach($conn);
    }
    
    public function __destruct(){}
    
}