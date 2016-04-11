<?php
if(!defined('API')) die('You don\'t have access to this file');

class BanManager {
    
    private $main;
    
    public function __construct($api){
        $this->main = $api;
    }
    
    public function isBanned($name){
        // $this->main->getBanList(); << This function will get ban list whetever server is using global or individual
        return in_array(strtolower($name[0]), array('steve', 'mega', 'jake', 'rob', 'stephanie', 'chris'), true);
    }
}