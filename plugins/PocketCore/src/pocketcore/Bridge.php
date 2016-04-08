<?php
namespace pocketcore;

use pocketmine\Server;
use pocketmine\utils\Utils;

class Bridge {
    
    const API_SERVER = "https://external-projects-hotfireydeath.c9users.io/PocketCore/web/api/api.php";
    
    /** @var bool $connected */
    public static $connected = true;
    
    /** @var array $queue */
    public static $queue = [];
    
    public function __construct($api_key){
        # Create connection with API server
        
        // $r is Response from the API_SERVER in this case it have to be password
       $r = Utils::getUrl(self::API_SERVER."?api_key=".$api_key."");
       
       $r = json_decode($r);
       
       if($r->password){
           $this->password = $r->password;
           self::$connected = true;
       }
       
    }
    
    public function queue($query){
        # Add query to queue
        # TODO
    }
    
    public function query($query){
        # TODO
    }
    
}