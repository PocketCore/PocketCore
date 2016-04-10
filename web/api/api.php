<?php

define("API", 1); // To require scripts, constant 'API' must be defined else you won't have permission for them

# I do what I like to do
# also what about that VenierPLaysMc guy that owns a faction server ;l
# I don't know him

/*
Test this script from phpfiddle.org using code below:

$url = 'https://external-projects-hotfireydeath.c9users.io/PocketCore/web/api/api.php';
$myvars = 'api_key=' . 'FakeAPIKey';

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

var_dump($response);




*/
$errors = array();
$response = array(
    'message' => '',
    'errors' => &$errors
    );

$error_codes = array(
        '000' => 'Unknown error',
        '001' => 'No permission',
        '002' => 'Key expired',
        '003' => 'Server banned ',
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
    
    $api = new Main($_POST);
    
    $r = $api->hasPermission($_POST['api_key']);
    if(!$r === true){
        __error($r);
    } else {
        
        __answer('Great');
        
    }
    # Damn, what next? :(
    
} else {
    
    die('You don\'t have access to this file!');
    
}

function __error($error_code){
    global $errors, $error_codes;
    
    if(isset($error_codes[$error_code])){
        $errors[$error_code] = $error_codes[$error_code];
    } else {
        $errors[$r] = "Unknown error";
    }
}

function __answer($msg){
    global $response;
    $response['message'] = $msg;
}

die(json_encode($response));
?>
