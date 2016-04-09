<?php
    $this->setTitle("Home");
?>
<div class="wrapper">
    <br>
    <div class="container">
    	<!-- Page content goes here -->
    	<div class="slider">
    	    <ul class="slides">
    	        <li>
    	            <img src="template/images/pocketcore_bg.png">
    	            <div class="caption center-align">
    	                <h4>Welcome to PocketCore!</h4>
    	                <p>A centralized system for PocketMine-MP.</p>
    	            </div>
    	            <div class="caption center-align" style="margin-top: 160px; text-align: center;">
    	                <!-- Form box to register your own server for PocketCore -->
    	                <form class="col s3">
    	                    
    	                    <div class="row">
                                <div class="input-field col s6">
                                  <input id="ip" type="text" class="validate">
                                  <label for="ip">IP</label>
                                </div>
                                <div class="input-field col s6">
                                  <input id="port" type="text" class="validate">
                                  <label for="port">Port</label>
                                </div>
                            </div>
                            
    	                </form>
    	            </div>
    	        </li>
    	    </ul>
    	</div>
    </div>
</div>