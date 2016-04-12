<?php
if(!defined('API')) die('You don\'t have access to this file');

class Main {
    
    private $password = []; // ip:port => password();
    private $connections = []; // ip:port => time()
    
    public $response = null;
    
    /**
     * Generate password and on connection and sent back to plugin
     * Next time when plugin sends request it has to give this password
     */
    
    /**
     * $data will hold requester IP (MCPE server IP:Port) and API key
     * 
     * @param $data
     */
    public function __construct($api_key, $data){
        
        if($this->hasPermission($api_key)){
            $this->response['message'] = 'Hi '.$data['REMOTE_ADDR'].', You successfully reached our API server :).';
            $this->response['error'] = null;
            $this->response['response'] = self::generatePassword();
        } else {
            $this->response['message'] = 'You don\'t have permission';
            $this->response['error'] = '001';
            $this->resonse['response'] = false;
        }
        // Load passwords and connections from db or local file :/
        // But for testing purposes I'll add them manually here
    }
    
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
    
    /**
     * @return string
     */
    public static function generatePassword(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
}
