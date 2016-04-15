<?php
namespace pocketcore\utils;

use pocketcore\utils\TextFormat;

class Logger {
    
    protected $debugLevel = 1;
    
    public function __construct(){
        $this->debugLevel = 2; // Enable debug
    }
    
    public function info($msg){
        $this->send('[INFO] '.$msg);
    }
    
    public function debug($msg){
        if($this->debugLevel > 1){
            $this->send("[DEBUG] ".$msg);
        }
    }
    
    public function warning($msg){
        $this->send(TextFormat::ORANGE.'[WARNING] '.$msg);
    }
    
    public function send($msg){
        echo "[".date("G:i:s")."] ".$msg."\n";    
    }
    
}