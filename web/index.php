<?php
require 'scripts/Web.php';
if(!isset($_GET['app'])) {
    $app = 'home'; // Default app
} else {
    if(file_exists('apps/'.$_GET['app'].'/'.$_GET['app'].'.php')){
        $app = $_GET['app'];
    } else {
        $app = '404';
    }
}
$web = new Web();
$web->setTitlePrefix("PocketCore");
$web->app = $app;
?>
<html>
    
    <head>
        <title>PocketCore</title>
    
        <link rel="stylesheet" type="text/css" href="template/css/materialize.min.css">
        <!-- This have to come after importing materialize css in order to overwrite it's values -->
        <link href="template/css/main.css" type="text/css" rel="stylesheet"/>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="template/js/materialize.min.js"></script>
        <script type="text/javascript" src="template/js/main.js"></script>
        <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Loads UTF-8 characters-->
            <meta charset="UTF-8"/>
        <!-- FontAwesome -->
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    </head>
        
        <!-- :: HEADER -->
    	<?php $web->drawHeader(); // This code does not contain any metadata ?>
    	<!-- :: HEADER END -->

<main class=""> <!-- main tag is here to make sticky footer work -->
    <body class="background-color">
    	<?php $web->drawContent(); ?>
    </body>
</main>
    
        <!-- :: FOOTER -->
        <?php $web->drawFooter(); ?>
        <!-- :: FOOTER END -->
</html>

<?php

/*

For next update:

pages/home
 -- page.php < All page info goes here
 -- content.php

*/

?>