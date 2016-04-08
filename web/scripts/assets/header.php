<title>PocketCore | Loading...</title>
<link rel="stylesheet" type="text/css" href="template/css/materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="template/js/materialize.min.js"></script>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--Loads UTF-8 characters-->
<meta charset="UTF-8"/>
<!-- FontAwesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<script>
    /* global $ */
    var title = "";
    $(document).ready(function(){
         $('.parallax').parallax();
         document.title = title;
         $('.slider').slider({
             full_width: true,
             indicators: false
         });
    });
</script>
        <div class="header">
    		<nav class="green">
    		  <div class="nav-wrapper green">
    		     <a href="#" class="brand-logo"><h4 style="margin-left: 7px; margin-top: 12px;">PocketCore</h4></a>
    		     <ul id="nav-mobile" class="right hide-on-med-and-down">
    			    <li><a href="?app=servers">Servers</a></li>
    			    <li><a href="?app=stats">Stats</a></li>
    			    <li><a href="?app=auth"><?php echo (true ? "Logout" : "Login/Register"); ?></a></li>
    		     </ul>
    		  </div>
    		</nav>
    	</div>