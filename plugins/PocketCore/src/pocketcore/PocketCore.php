<?php
namespace pocketcore;

use pocketmine\plugin\PluginBase;

use pocketcore\Bridge;

class PocketCore extends PluginBase 
{
  
  public function onLoad(){}
  
  public function onEnable(){
    $this->saveDefaultConfig();
    
    $this->connect();
  }
  
  private function connect(){
    if($api_key = $this->getConfig()->get('api_key') or Bridge::validateKey($api_key))
    {
      $st = microtime(true);
      $this->bridge = new Bridge($api_key); 
      
      if(Bridge::$connected === false)
      {
        $this->getLogger()->critical(Text::RED."Connect:".Text::WHITE." Failed ('".Bridge::$error."')");
        $disable = true;
      }
    } else {
      $this->getLogger()->critical(Text::RED."Config:".Text::WHITE." 'api_key' is invalid");
      $disabled = true;
    }
    if(isset($disable) || $disable == true){
      $this->getServer()->getPluginManager()->disablePlugin($this);
      return;
    }
    
    $this->getLogger()->info(Text::GREEN."Connect:".Text::WHITE." Connection established! (".(microtime(true) - $st)."s)");
  }
  
  public function onDisable(){}

}
