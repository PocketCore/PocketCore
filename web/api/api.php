<?php

define("API", 1); // To require scripts, constant 'API' must be defined else you won't have permission for them

/*
Test this script from phpfiddle.org using code below:

And using these api keys:
- FakeAPIKey
- AnotherFakeAPIKey
- AndAnother

//////////////////////
<?php
$response = false;
if(isset($_POST['ok'])){

	$url = 'https://external-projects-hotfireydeath.c9users.io/PocketCore/web/api/api.php';
$vars = 'api_key=' . $_POST['api_key'];
$vars .= "&target=".$_POST['target'];
$vars .= "&action=".$_POST['action'];
	
$args = explode(',', $_POST['args']);
	foreach($args as $arg){
		$vars .= "&args[]=".$arg;
	}
	
$ch = curl_init($url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $vars);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$r = curl_exec($ch);
//	var_dump($r);
	
$response = json_decode($r);
	
}
?>
<form action="#" method="POST">
	<input type="text" name="api_key" value="FakeAPIKey" placeholder="API Key" />
	<input type="text" name="target" value="BanManager" placeholder="Class" />
	<input type="text" name="action" value="isBanned" placeholder="Method" />
	<input type="text" name="args" value="Steve" placeholder="Arguments" />
	<input type="submit" name="ok" value="Send" />
</form>
<?php
if($response){
	echo 'Message: '.$response->message."</br>";
	echo 'Errors: '.$response->error."</br>";
	echo 'Response: '.($response->response ? 'true' : 'false')."</br>";
}
?>
/////////////////////////
How to pass arguments to function?
use &arg[]=arg1&arg[]=arg2
And so on

Good luck Chief, let the god be with you...
- Thank you. Goodbye :)
*/


$response = array(
    'message' => null,
    'error' => null,
    'response' => null
    );

$error_codes = array(
        '000' => 'Unknown error',
        '001' => 'No permission',
        '002' => 'Key expired',
        '003' => 'Server banned ',
        '004' => 'Undefined target',
        '005' => 'Unknown target',
        '006' => 'Undefined action',
        '007' => 'Unknown action',
        '008' => 'Invalid request method'
    );
    
/** Main API script */
require_once ('scripts/pocketcore/Main.php');
/** Script for Ban system */
require_once ('scripts/pocketcore/manager/BanManager.php');
/** Script for Auth system */
require_once ('scripts/pocketcore/manager/AuthManager.php');
/** Script for Player data managment */
require_once ('scripts/pocketcore/manager/PlayerManager.php');




if(isset($_POST['api_key'])){
    
    extract($_POST);
    
    $api = new Main($_POST);
    
    $r = $api->hasPermission($_POST['api_key']);
    if($r !== true){
        __error($r);
    } else {
        
        
        if(isset($_POST['target'])){
            # What class is the method reffering to...
            # For example &target=BanManager&action=isBanned&args=Steve
            
            if(class_exists($target)){
                
                $s = new $target($api);
                
                if(isset($_POST['action'])){
                    if(method_exists($s, $action)){
                        
                        // 
                        $response['response'] = $s->$action($args);
                        
                    } else {
                        __error('007');
                    }
                } else {
                    __error('006');
                }
                
            } else {
                __error('005');
            }
            
        } else {
            __error('004');
        }
        
    }
    
} else {
    die('You don\'t have access to this file!');
}

function __error($error_code){
    global $response, $error_codes;
    
    if(isset($error_codes[$error_code])){
        $response['error'] = $error_codes[$error_code];
    } else {
        $response['error'] = "Unknown error";
    }
}

function __answer($msg){
    global $response;
    $response['message'] = $msg;
}

__response();

function __response(){
    global $response;
  die(json_encode($response));  
}

?>
