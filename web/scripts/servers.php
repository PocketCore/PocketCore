<?php

# TODO: Move this class to scripts folder in order to use it in other files, without rewrite :P
# Reply: Done ? :D

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
    
    if (empty($ip) or empty($port)){
        echo '<script>window.location="'.'../../web/index.php?app=home&redirect=_emptyipport'.'"</script>';
    }
    $isRegistered = Servers::isServerRegistered($ip, $port); // should return false..

    if($isRegistered === false){
        
        // Lets query the server to gather more information about it
        // And offer to register this server
        
        // Must think of way to safely allow registering servers to avoid fake owners
        // What about owner see rcon console?
        
        $status = Servers::registerServer($ip, $port);
        
    } else {
        
        // If it's already registered here then show user the info from our databases (+ query ?)
        // And offer to delete this server from our record if the user is the owner
        
    }
} else {
    // Return user back to home page
    Header('Location: ../home');
    die(); // Don't go any further
}