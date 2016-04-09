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
        <!-- :: HEADER -->
    	<?php $web->drawHeader(); ?>
    	<!-- :: HEADER END -->
    </head>

<main> <!-- main tag is here to make sticky footer work -->
    <body style="background-color: #ecf0f1;">
    	<?php $web->drawContent(); ?>
    </body>
</main>
    
        <!-- :: FOOTER -->
        <?php $web->drawFooter(); ?>
        <!-- :: FOOTER END -->
</html>