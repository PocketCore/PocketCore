<?php
if(!defined('API')) die('You don\'t have access to this file');

class Main {
    
    /** This is only for testing */
    private $keys = [
            'FakeAPIKey',
            'AnotherFakeAPIKey',
            'AndAnother'
        ];
        
    public function hasPermission($api_key){
        // This function must be rewrited but as we are in dev stage...
        if(in_array($api_key, $this->keys, true)){
            return true;
        } else {
            return '001'; # No permission
        }
    }
    
}
