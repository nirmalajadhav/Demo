<div class="loginWrapper">

    <form action="<?php echo BASE_URL;?>login/verify" id="login" method="post">
        <div class="loginPic">
            <span>Login</span>
        </div>
        
        <input type="text" name="username" placeholder="Your username" class="loginEmail" />
        <input type="password" name="password" placeholder="Your password" class="loginPassword" />
        
        <div class="logControl">
            <input type="submit" name="submit" value="Login"  />
            <div class="clear"></div>
        </div>
    </form>
  
</div>