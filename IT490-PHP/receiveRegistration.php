<?php
    
    include('messaging.php');
    include('auth.php');

    $callback = function ($msg) {
       
        echo ' [x] Received ', $msg->body, "\n";
       
        $userInfo = json_decode($msg->body);
    
        $result = db()->query("select * from users where username='$userInfo->username'");
	    
        if($result->rowCount() > 0) 
        {
            echo "Username is taken!";
            return false;
        }
        else 
        {
            registrationRequestResponse($userInfo, "registration status");
            register_user($userInfo->username, $userInfo->password);
        }
        
      };

    $channel = registrationReceived($callback);

    //keeps channel open to listen for response
    while ($channel->is_open()) {
        $channel->wait();
    }
?>