<?php

include './src/models/Connection.php';

class User
{
    public static function validateUser($user, $password)
    {

        $conn = Connection::connect();
        $statement = $conn->prepare("SELECT * FROM users WHERE username = '$user' AND password= '$password'");
        $statement->execute();
        $data = $statement->fetchAll();        
        $existUser = (count($data) > 0) ? "activate" : "";
        $_SESSION["session"] = $existUser;
        

    }
}
