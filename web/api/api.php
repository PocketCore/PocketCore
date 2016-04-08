<?php
require 'scripts/PocketCore.php'; # This file contains class PocketCore

# This file recieves requests from MCPE servers.

if(isset($_GET['api_key'])){
  $api = new PocketCore($_GET['api_key']);
  
  if($api->answer){
    die($api->answer); // If connection is made for first time, this will return password for session.
  }
  
  if(!isset($_GET['pass'])){
    die('ERROR: No Password');
  }
  
  if($api->error !== null){
    die('ERROR: '.$api->error);
  }
  
  if(isset($_GET['q'])){
    $api->request($_GET['q'], $_GET['pass']);
  }
  die($api->answer);
  
} else {
  die('ERROR: Invalid API Key');
}

?>
