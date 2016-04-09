<?php
    $this->setTitle("Home");
?>
<div class="wrapper">
    <br>
    <div class="container">
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
    	<br>
    	<div class="row">
    	  <div class="col s6">
    	    Feature 1
    	  </div>
    	  <div class="col s6">
    	    Feature 2
    	  </div>
    	</div>
    	<div class="row">
    	  <div class="col s6">
    	    Feature 3
    	  </div>
    	  <div class="col s6">
    	    Feature 4
    	  </div>
    	</div>
    </div>
</div>