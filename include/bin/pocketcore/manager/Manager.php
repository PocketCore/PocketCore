<?php
namespace pocketcore\manager;

use pocketcore\Master;

abstract class Manager {
    
    /** @var Master $master */
    protected $master;
    
    public function __construct(Master $master){
        $this->master = $master;
    }
    
    public function getMaster() {
        return $this->master;
    }
    
}