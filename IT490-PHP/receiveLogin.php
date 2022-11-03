<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use PhpAmqpLib\Connection\AMQPStreamConnection;
    
    include('messaging.php');    
    include('connection.php');


    $callback = function ($msg) {
        echo ' [x] Received ';        

        $credentials = json_decode($msg->body);
        echo "username = ", $credentials->username;
        echo " ";
        echo "password = ", $credentials->password;
        
        $username = db()->query("SELECT * FROM users Where username='$credentials->username'");
        $dbuser = $username->fetch();
        $password = $dbuser['password'];
         
            if ($username->rowCount() > 0 and password_verify($credentials->password, $password)){
                session_start();
                $_SESSION['pageCount'] = $_SESSION['pageCount'] +1;
                echo " \n Login Valid \n";
                $message = 'Login Success';   
                loginRequestResponse($credentials, $message);
                
            } 
            
            else{
                echo "\n Invalid Login, username or password are incorrect \n";
                
            }
    
        

        //destroySession($credentials->username);

    };


    $channel = loginReceived($callback);

    //keeps channel open to listen for response
    while ($channel->is_open()) {
        $channel->wait();
    }
?>