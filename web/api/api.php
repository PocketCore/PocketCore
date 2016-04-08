<?php
require 'scripts/PocketCore.php'; # This file contains class PocketCore

# This file recieves requests from MCPE servers and completes .

if(isset($_GET['api_key'])){
  $api = new PocketCore($_GET['api_key']);
  
  if($api->answer){
    answer($api->answer); // If connection is made for first time, this will return password for session.
  }
  
  if(!isset($_GET['pass'])){
    error('INVALID_PASSWORD');
  }
  
  if($api->error !== null){
    error($api->error);
  }
  
  if(isset($_GET['q'])){
    $api->request($_GET['q'], $_GET['pass']);
  }
  answer($api->answer);
  
} else {
  error('INVALID_KEY');
}

function answer(array $var){
  die(json_ecode($var));
}

function error($error){
  die(json_encode(array('error' => $error)));
}

?>
