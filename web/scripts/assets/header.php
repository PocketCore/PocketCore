<div class="header">
	<nav class="theme-color">
	  <div class="nav-wrapper theme-color">
	     <a href="?app=home" class="brand-logo center"><h4 style="margin-left: 7px; margin-top: 12px;">PocketCore</h4></a>
         <?php
            $left = "<ul class='left hide-on-med-and-down'>";
            $right = "<ul class='right hide-on-med-and-down'>";
            
            foreach($this->getMenuItems() as $id => $item){
                if($item['type'] === 'link'){
	                if($item['side'] == 'left'){
                    # Left
                       if($item['visible']) $left .= "<li class='waves-effect waves-light ".($id == $_GET['app'] ? 'active' : '')."'><a href='".$item['link']."'>".$item['display']."</a></li>";
	                } else {
                    # Right
                    if($item['visible']) $right .= "<li class='waves-effect waves-light ".($id == $_GET['app'] ? 'active' : '')."'><a href='".$item['link']."'>".$item['display']."</a></li>";
	                }
	           } elseif ($item['type'] == 'file'){
                        require $this->getAsset($item['file']);
	           }
            }
		            
		    $left .= "</ul>";
		    $right .= "</ul>";
		    echo $left.$right;
		 ?>
		  </div>
	</nav>
</div>