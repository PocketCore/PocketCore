<?php
namespace pocketcore\manager;

use pocketcore\Master;

class ServerManager extends Manager {
    
    public function __construct(Master $master){
        parent::__construct($master);
    }
    
}