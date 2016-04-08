<?php
class PocketCore 
{
  
  /** @var bool $answer */
  public $answer = false;
  /** @var bool $error */
  public $error = false;
  public function __construct($api_key){
    # Check if this server has connected to our server already if not return a password for their session.
  }
  
  /**
  * @return void
  */
  public function request($q, $pass){
    # 1) Verify password
    # 2) Decode $q
    # 3) Verify if $q is valid request.
    # 4) Do what $q says!
  }
}
?>
