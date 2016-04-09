<ul id="user_dropdown" class="dropdown-content">
    <?php
    echo "Hello;";
        if($this->user !== null){
            # User has authenticated
            
        } else {
            # User must login/register
            ?>
            <li><a>Login</a></li>
            <li><a>Register</a></li>
            <?php
        }
    ?>
</ul>