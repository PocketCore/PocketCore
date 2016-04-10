<?php
namespace pocketcore;

use pocketmine\Server;
use pocketmine\utils\Utils;

use pocketcore\task\Requester;

class Bridge {
    
    const API_SERVER = "https://external-projects-hotfireydeath.c9users.io/PocketCore/web/api/api.php";
    
    /** @var bool $connected */
    public static $connected = true;
    /** @var mixed $error */
    public static $error = false;
    /** @var string $password */
    private $password = "";
    
    /** @var array $queue */
    public static $queue = [];
    
    public function __construct($api_key){
        # Create connection with API server
        
        // $r is Response from the API_SERVER in this case it have to be password
       $r = Utils::getUrl(self::API_SERVER."?api_key=".$api_key."");
       
       $r = json_decode($r);
       
       if($r->password){ // If not then probably some kind of error happened
           $this->password = $r->password;
           self::$connected = true;
       } else {
           if($r->error){
                self::$error = $r->error;
           } else {
               # This server is offline or either PocketCore service is unavaliable
               self::$error = "Connection timed out";
           }
       }
       
    }
    
    public function queue($query){
        # Add query to queue
        # TODO
    }
    
    public function query($query){
        # TODO
        # Creat async task to do the real query else it may cause lag :P
    }
    
    public static function cryptQueryRequest($string){
        # TODO
    }
    
    public static function validateKey($key){
        # TODO
    }
    
    
}
