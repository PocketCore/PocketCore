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
            'documentation' => array (
                'link' => '?app=docs',
                'display' => 'For Developers',
                'type' => 'link',
                'visible' => true,
                'side' => 'left'
                ),
            'account' => array(
                'display' => 'Account',
                'type' => 'file',
                'side' => 'right',
                'file' => 'user_tab.php'
                )
            );

?>