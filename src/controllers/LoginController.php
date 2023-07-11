<?php

trait LoginController {
    public static function login() {
        include './src/views/components/login.php';
        include './src/controllers/UserController.php';
        UserController::signIn();

    }
}