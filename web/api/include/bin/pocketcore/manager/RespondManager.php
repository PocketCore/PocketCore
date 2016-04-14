<?php
namespace pocketcore\manager;

use pocketcore\Master;

class RespondManager extends Manager {
    
    public static $responses = array(
        'Connection' => array (
            'open' => 'Connection established!',
            'close' => array (
                'kick' => 'Connection was terminated. (Kicked)',
                'error' => 'Connection was terminated. (Error)',
                'shutdown' => 'Connection was terminated because PocketCore shutdown'
                )
            ),
        'Request' => array(
            'fail' => array (
                 'spam' => 'Stop flooding our server',
                 'noperm' => 'Access denied',
                ),
            'action' => array (
                'invalid' => 'Given method does not exist in target class',
                'null' => 'No \'action\' was given'
                ),
            'target' => array (
                'invalid' => 'Given target does not exist or is not a proper Manager',
                'null' => 'No \'target\' was given'
                )
            ),
        'Auth' => array (
            'ok' => 'Access granted'
            )
        );
    
    public function __construct(Master $master){
        parent::__construct($master);
    }
    
    public function toText($respond){
        if(is_array($respond)){
            $respond = $respond[0];
        }
        $trends = explode('.', $respond);
        $curr = array();
        if(!isset(self::$responses[$trends[0]])){
            return "Unknown trend ".$trends[0];
        } else {
            $curr = self::$responses[$trends[0]];
            var_dump($curr);
        }
        $i = 1;
        while(is_array($curr)){
            $curr = $curr[$trends[$i]];
        }
        var_dump($curr);
        return $curr;
    }
    
}