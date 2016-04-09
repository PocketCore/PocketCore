<?php

# $INFO must be passed to Web

$INFO = array();

$INFO['closed'] = false; // Set this to 'true' if you want to close the web temporarily
$INFO['debug'] = false; // Error reporting and other shit

$INFO['sql'] = array (
        
        'web_auth' => array (
                'host' => 'samzheng1968.fatcowmysql.com',
                'user' => 'root_user',
                'password' => 'supersecret',
                'db' => 'pocketcore_web_auth'
            )
    );

$INFO['pages'] = array ( # TODO
        'home' => array (
            
            ),
        'stats' => array (
            
            ),
        'downloads' => array (
            
            )
    );
    
$INFO['menu-items'] = array (
            'servers' => array (
                'link' => '?app=servers',
                'display' => 'Servers',
                'visible' => true,
                'type' => 'link',
                'side' => 'left'
                ),
            'stats' => array (
                'link' => '?app=stats',
                'display' => 'Stats',
                'visible' => true,
                'type' => 'link',
                'side' => 'left'
                ),
            'downloads' => array (
                'link' => '?app=downloads',
                'display' => 'Downloads',
                'visible' => true,
                'type' => 'link',
                'side' => 'left'
                ),
            'docs' => array (
                'link' => '?app=docs',
                'display' => 'For Developers',
                'type' => 'link',
                'visible' => true,
                'side' => 'left'
                ),
            'account' => array(
                'visible' => true, #We forgot to add this, and look at my comment in header.php as well..
                'display' => 'Account', # Wait for me :D
                'type' => 'file',
                'side' => 'right',
                'file' => 'user_tab'
                )
            );

?>