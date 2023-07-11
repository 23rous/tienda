<?php
    
include './src/models/User.php';

class UserController {
    public static function signIn() {
        if (isset($_POST["user"]) && isset($_POST["password"])) {
            $auth = User::validateUser($_POST["user"], $_POST["password"]);
            echo $auth;
        }
    }
}