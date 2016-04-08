<?php
namespace pocketcore;

use pocketmine\plugin\PluginBase;

use pocketcore\Bridge;z

class PocketCore extends PluginBase 
{
  
  public function onLoad(){}
  public function onEnable(){
    $this->saveDefaultConfig();
    
    if($api_key = $this->getConfig()->get('api_key') or Bridge::validateKey($api_key))
    {
      $this->bridge = new Bridge($api_key);    
    } else {
      $this->getLogger()->critical("Config: 'api_key' is invalid");
      $this->getServer()->getPluginManager()->disablePlugin($this);
      return;
    }
    
  }
  public function onDisable(){}

}
