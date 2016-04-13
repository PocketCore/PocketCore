<?php
namespace pocketcore\utils;

class Logger {
    
    public function __construct(){}
    
    public function info($msg){
        $this->send('[INFO] '.$msg);
    }
    
    public function send($msg){
        echo "[".date("G:i:s")."] ".$msg."\n";    
    }
    
}