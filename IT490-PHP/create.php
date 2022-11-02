<?php include('messaging.php') ?>
<html>
<body>
<div id="container">
    <form id="create-form" method ='post' action="create.php">
        <h1>Create Account</h1>
        <div class="input-control">
            <label for="username" >Username</label>
            <input id="login-username" name="username" type="text" required>
            <div class="error"></div>
            <link rel="stylesheet" href="style.css">
        </div>
        <div class="input-control">
            <label for="password">Password</label>
            <input id="login-password" name="password" type="password" required>
            <div class="error"></div>
        </div>
        <button type="submit" name="submit" >Register</button>
        </div>
    </form>
    <?php 
        if(isset($_POST['submit']))
        {
            if(strlen($_POST['password']) <= '8' ) {
                echo '<script type="text/javascript">';
                echo 'alert("password must be at least 8 characters")';   
                echo '</script>';
            }
            
            elseif(!preg_match("#[0-9]+#",$_POST['password'])) {
                echo '<script type="text/javascript">';
                echo 'alert("Password must contain at least 1 number")';   
                echo '</script>';
            }
            elseif(!preg_match("#[A-Z]+#",$_POST['password'])) {
                echo '<script type="text/javascript">';
                echo 'alert("Passwor must contain at least 1 capital letter")';   
                echo '</script>';
            }
            elseif(!preg_match("#[\W]+#",$_POST['password'])) {
                echo '<script type="text/javascript">';
                echo 'alert("Password must contain at least 1 special character")';   
                echo '</script>';
            } 
            else{
                sendRegistration($_POST['username'], $_POST['password']); 
                ?>
                <script type="text/javascript">
                window.location.href = 'index.php';
                </script>
                <?php

            }
        }
    ?>
</div>
</body>
</html>