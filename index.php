<?php

try {
    
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0)))
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);
         
        throw new \Exception($errormsg, $errorcode);
    }
    //Connect socket to remote server
    if(!socket_connect($sock , '172.17.53.126' , 8080))
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);
         
        throw new \Exception($errormsg, $errorcode);
    }
     
} catch (\Exception $e){
    die("Following error occured ".$e->getCode()."#: ".$e->getMessage());
}
    echo "Connected successfully!";

    $message = "Connected";
     
    //Send the message to the server
    if( !$r = socket_send ( $sock , $message , strlen($message) , 0))
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);
         
        die("Could not send data: [$errorcode] $errormsg \n");
    }
    
    
?>
