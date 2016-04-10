<?php
    $this->setTitle("Home");
?>
<div class="wrapper" class="large-header" id="large-header">
  
			<canvas height="100%" width="100%" id="demo-canvas"></canvas>
  
    <br>
    <div class="container demo-1">
      
      <script src="template/js/TweenLite.min.js"></script>
      <script src="template/js/EasePack.min.js"></script>
      <script src="template/js/rAF.js"></script>
      <script src="template/js/demo-1.js"></script>
      <link rel='stylesheet' type='text/css' href='tempate/css/component.css'></link>
      
    	<!-- Page content goes here -->
    	<div class="slider">
    	  <!-- page image -->
    	    <ul class="slides">
    	        <li>
    	            <img src="template/images/pocketcore_bg.png">
    	            <div class="caption center-align">
    	                <h4>Welcome to PocketCore!</h4>
    	                <p>A centralized system for PocketMine-MP.</p>
    	            </div>
    	            <div class="caption center-align" style="margin-top: 160px; text-align: center;">
    	                <!-- Form box to register your own server for PocketCore -->
    	                <form class="col s3" action="https://external-projects-hotfireydeath.c9users.io/PocketCore/web/apps/servers/servers.php" method="get">
    	                    <div class="row">
                                <div class="input-field col s6">
                                  <input id="ip" type="text" class="validate" name="ip">
                                  <label for="ip">IP</label>
                                </div>
                                <div class="input-field col s6">
                                  <input id="port" type="text" class="validate" name="port">
                                  <label for="port">Port</label>
                                </div>
                          </div>
                          <button type="submit" class="btn waves-effect waves-light theme-color">Register Your Server</button>
    	                </form>
    	            </div>
    	        </li>
    	    </ul>
    	</div>
    	<br>
    	<h5 style="text-align: center;">Features</h5>
    	
    	</br>
    	</br>
    	</br>
    	
    	<div class="row center-align">
    	  <div class="col s4">
    	    <i class="fa fa-bolt  fa-5x fa-color"></i>
    	    <p>
    	      Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis sodales ligula, vel laoreet justo tempus eu. Duis ultricies rutrum rutrum.
    	    </p>
    	  </div>
    	  <div class="col s4 ">
    	    <i class="fa fa-group fa-5x fa-color"></i>
    	    <p>
    	      Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis sodales ligula, vel laoreet justo tempus eu. Duis ultricies rutrum rutrum.
    	    </p>
    	  </div>
    	  <div class="col s4">
    	    <i class="fa fa-tasks  fa-5x fa-color"></i>
    	    <p>
    	      Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis sodales ligula, vel laoreet justo tempus eu. Duis ultricies rutrum rutrum.
    	    </p>
    	  </div>
    	</div>
    	</div>
    </div>
</div>