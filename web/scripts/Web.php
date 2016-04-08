<?php

class Web {
    
    /** @var string $title */
    public $title = "Unknown page";
    /** @var string $prefix */
    public $prefix = "PocketCore";
    
    public function __construct(){}
    
    public function setTitlePrefix($prefix){
        $this->prefix = $prefix;
        
        $this->setTitle($this->title, true); // Update
    }
    
    public function setTitle($title, $keepPrefix = true){
        $this->title = ($keepPrefix ? $this->prefix : "")." | ".$title;
        
        echo "<script>document.title = '".$this->title."';</script>"; // Update
    }
    
    public function drawHeader(){
        echo "<title>PocketCore</title>
    	<link rel=\"stylesheet\" type=\"text/css\" href=\"template/css/materialize.min.css\">
    	<link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    	<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"template/js/materialize.min.js\"></script>
    	<!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!--Loads UTF-8 characters-->
        <meta charset=\"UTF-8\" />
        <script>
        /*global $*/
            $(document).ready(function(){
              $('.parallax').parallax();
            });
        </script>"  . "<div class=\"header\">
    		<nav>
    		  <div class=\"nav-wrapper\">
    		     <a href=\"#\" class=\"brand-logo\"><h4 style=\"margin-left: 7px; margin-top: 12px;\">PocketCore</h4></a>
    		     <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
    			    <li><a href=\"sass.html\">Servers</a></li>
    			    <li><a href=\"badges.html\">Stats</a></li>
    			    <li><a href=\"collapsible.html\">".(true ? "Logout" : "Login/Register")."</a></li>
    		     </ul>
    		  </div>
    		</nav>
    	</div>";
    }
    
    public function drawContent(){
            $r = require ("apps/".$this->app.".php");
           return $r;
    }
    
    public function drawFooter(){
        echo "";
    }
}

?>