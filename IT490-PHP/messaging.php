<?php    

    require_once __DIR__.'/vendor/autoload.php';

    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use PhpAmqpLib\Message\AMQPMessage;

    function getConnection(){
        $host = 'localhost';
        $port = '5672';
        $username = 'guest';
        $password = 'guest';
        $vhost = 'testHost';
        return $connection = new AMQPStreamConnection($host, $port, $username, $password,$vhost);
    }

    function sendMessage($queue, $message){
        $connection = getConnection();
        $channel = $connection->channel();
        $channel->queue_declare($queue, false, false, false, false);
        $msg = new AMQPMessage($message);
        $channel->basic_publish($msg, '', $queue);
        $channel->close();
        $connection->close();
    }
    
    function loginRequestResponse($userInfo, $message){
         $connection = getConnection();
        $channel = $connection->channel();
        $queue ='login_response';
        $channel->queue_declare($queue, false, false, false, false);

        $login = array("userinfo"=>$userInfo,"message"=>$message);
        $json = json_encode($login);        
        $msg = new AMQPMessage($json);

        $channel->basic_publish($msg, '', $queue);
        $channel->close();
        $connection->close();
    }

    //front end to listen for login response
    function loginResponse($callback){
        $connection = getConnection();
        $channel = $connection->channel();
        $queue ='login_response';
        $channel->queue_declare($queue, false, false, false, false);
        $channel->basic_consume($queue, '', false, true, false, false, $callback);
        return $channel;
    }        
    //called by front end to send login credentials
    function requestLogin($username, $password){
        $connection = getConnection();
        $channel = $connection->channel();
        $queue ='login_request';
        $channel->queue_declare($queue, false, false, false, false);
        
        $login = array("username"=>$username,"password"=>$password);
        $json = json_encode($login);        
        $msg = new AMQPMessage($json);

        $channel->basic_publish($msg, '', $queue);
        $channel->close();
        $connection->close();
    }
    function loginReceived($callback){
         $connection = getConnection();
        $channel = $connection->channel();
        $queue ='login_request';
        $channel->queue_declare($queue, false, false, false, false);
        $channel->basic_consume($queue, '', false, true, false, false, $callback);
        return $channel;
    }


     //called by front end to send registration details
     function sendRegistration( $username, $password){
         $connection = getConnection();
        $channel = $connection->channel();
        $queue ='registration_request';
        $channel->queue_declare($queue, false, false, false, false);
        
        $registration = array("username"=>$username,"password"=>$password);
        $json = json_encode($registration);
        $msg = new AMQPMessage($json);

        $channel->basic_publish($msg, '', $queue);
        $channel->close();
        $connection->close();
    }
    //front end to listen for registration response
    function registrationResponse($callback){
         $connection = getConnection();
        $channel = $connection->channel();
        $queue ='registration_response';
        $channel->queue_declare($queue, false, false, false, false);
        $channel->basic_consume($queue, '', false, true, false, false, $callback);
        return $channel;
    }
    function registrationReceived($callback){
        $connection = getConnection();
        $channel = $connection->channel();
        $queue ='registration_request';
        $channel->queue_declare($queue, false, false, false, false);
        $channel->basic_consume($queue, '', false, true, false, false, $callback);
        return $channel;
    }
    function registrationRequestResponse($userInfo, $message){
         $connection = getConnection();
        $channel = $connection->channel();
        $queue ='registration_response';
        $channel->queue_declare($queue, false, false, false, false);
        
        $login = array("userinfo"=>$userInfo,"message"=>$message);
        $json = json_encode($login);        
        $msg = new AMQPMessage($json);        
        
        $channel->basic_publish($msg, '', $queue);
        $channel->close();
        $connection->close();
    }
?>