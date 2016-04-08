<html>
    <head>
    	<title>PocketCore</title>
    	<link rel="stylesheet" type="text/css" href="template/css/materialize.min.css">
    	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="template/js/materialize.min.js"></script>
    	<!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Loads UTF-8 characters-->
        <meta charset="UTF-8" />
        <script>
        /*global $*/
            $(document).ready(function(){
              $('.parallax').parallax();
            });
        </script>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="header">
    			<nav>
    			  <div class="nav-wrapper">
    			     <a href="#" class="brand-logo"><h4 style="margin-left: 7px; margin-top: 12px;">PocketCore</h4></a>
    			     <ul id="nav-mobile" class="right hide-on-med-and-down">
    				    <li><a href="sass.html">Servers</a></li>
    				    <li><a href="badges.html">Stats</a></li>
    				    <li><a href="collapsible.html"><?php echo (true ? "Logout" : "Login/Register"); ?></a></li>
    			     </ul>
    			  </div>
    			</nav>
    		</div>
    	</div>
    	<div class="container">
    		<!-- Page content goes here -->
    		<div class="parallax-container" style="height: 540px;">
    		    <div class="parallax"><img src="template/images/pocketcore_bg.png"></img></div>
    		</div>
    	</div>
    </body>
</html>