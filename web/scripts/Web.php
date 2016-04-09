<?php

class Web {
    
    /** @var string $title */
    public $title = "Loading...";
    
    /** @var string $prefix */
    public $prefix = "PocketCore";
    
    /** @var array $menuItems */
    public $menuItems = array();
    
    /** @var array $info */
    public $info;
    
    /** @var array|null $user */
    public $user = null;
    
    public static $path = "";
    
    public function __construct(){
        $this->loadConfiguration();
        
        self::$path = dirname(__FILE__);
    }
    
    public function loadConfiguration(){
        require "include/config.php";
        $this->info = $INFO;
    }
    
    public function getMenuItems(){
        return $this->info['menu-items'];
    }
    
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
        // Auto set title
        $this->setTitle($this->info['menu-items'][$this->app]['display']);
        
        $r = require ("apps/".$this->app."/".$this->app.".php");
        return $r;
    }
    
    public function getAsset($name){
        if(file_exists('scripts/assets/'.$name.'.php')){
            return 'scripts/assets/'.$name.'.php';
        }
        return 'file_not_found';
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