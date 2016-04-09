<?php

class Servers {
    public static function isServerRegistered($ip, $port){
        /**
         * Checks if the server is already registered or not,
         * should return true if is registered, else false if is not registered.
         * */
    }
    public static function registerServer($ip, $port){
        /**
         * Register server with $ip and $port.
         * */
    }
    public static function unregisterServer($ip, $port){
        /**
         * Unregister a server with $ip and $port.
         * Should return false if server is non-registered to begin with.
         * */
    }
}

if (isset($_GET["ip"]) and isset($_GET["port"])){
    $ip = $_GET["ip"];
    $port = $_GET["port"];
    $isRegistered = Servers::isServerRegistered($ip, $port); // should return false..
    
}