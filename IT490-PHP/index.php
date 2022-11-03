<?php 
include_once('messaging.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="login-form" action='index.php' method='post'>
            <h1>Login</h1>
            <div class="input-control">
                <label for="username" >Username</label>
                <input id="login-username" name="username" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="login-password" name="password" type="password" required>
                <div class="error"></div>
            </div>
            <button name = "submit" type="submit">Login</button>
            <div id="create-account-wrap">
                <p>Dont have an account? 
                    <div></div>
                    <a id= "create-account-tag" href="create.php">Create Account</a>
                <p>
            </div>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            requestLogin($_POST['username'], $_POST['password']) ;  

        } 

        ?>
    </div>
</body>
</html>
