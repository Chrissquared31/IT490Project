<?php
include('connection.php');

/**
* Register a user
*
* @param string $username
* @param string $password
* @return bool
*/
function register_user(string $username, string $password): bool
{
    $sql = 'INSERT INTO users(username, password)
            VALUES(:username, :password)';

    $statement = db()->prepare($sql);

    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);

    return $statement->execute();
}

function createSession(string $username){
    $str = rand();
    $session = md5($str);
    
    $sql = 'UPDATE users SET session = $session WHERE username=$username';

    $statement = db()->prepare($sql);
    return $statement->execute();

}


function destroySession(string $username){
    if(session_status() < 1){
        $sql = 'UPDATE users SET session = NULL WHERE username=$username';
        $statement = db()->prepare($sql);
        echo 'session destroyed';
        return $statement->execute();
        
    }
}

?>