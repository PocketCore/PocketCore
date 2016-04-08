<?php

class Web {
    
    /** @var string $title */
    public $title = "Loading...";
    /** @var string $prefix */
    public $prefix = "PocketCore";
    
    public function __construct(){}
    
    public function setTitlePrefix($prefix){
        $this->prefix = $prefix;
        
        $this->setTitle($this->title, true); // Update
    }
    
    public function setTitle($title, $keepPrefix = true){
        $this->title = ($keepPrefix ? $this->prefix : "")." | ".$title;
        
        echo "<script>title = '".$this->title."';</script>"; // Update
    }
    
    public function drawHeader(){
        # TODO
        if(file_exists('apps/'.$this->app."/header.php")){
            $r = require 'apps/'.$this->app."/header.php";
            return $r;
        } else {
            # Use default header
            $r = require 'assets/header.php';
            return $r;
        }
    }
    
    public function drawContent(){
        $r = require ("apps/".$this->app."/".$this->app.".php");
        return $r;
    }
    
    public function drawFooter(){
        if(file_exists("apps/".$this->app."/footer.php")){
            $r = require "apps/".$this->app."/footer.php";
            return $r;
        } else {
            $r = require "assets/footer.php";
            return $r;
        }
    }
}

?>