
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../js/script.js"></script>
</head>
<body>
    <div class="container">
        <form action="createAcc.php"  method="post" id="create-form">
            <h1>Create Account</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="create-username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="create-email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="create-password" name="password" type="password">
                <div class="error"></div>
            </div> 

            <button type="submit" id="registerbutton"name="register">Sign Up</button>
        </form>


    </div>
</body>
</html>
