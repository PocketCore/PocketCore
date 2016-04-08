<?php
require 'scripts/Web.php';
if(!isset($_GET['app'])) {
    $app = 'home'; // Default app
} else {
    if(file_exists('apps/'.$_GET['app'].'.php')){
        $app = $_GET['app'];
    } else {
        $app = '404.php';
    }
}
$web = new Web();
$web->setTitlePrefix("PocketCore");
$web->app = $app;
?>
<html>
    <head>
    	<?php $web->drawHeader(); ?>
    </head>
    <body>
    	<?php $web->drawContent(); ?>
    </body>
    <footer class="page-footer green">
        <?php $web->drawFooter(); ?>
    </footer>
</html>