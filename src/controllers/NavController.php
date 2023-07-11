<?php

trait NavController {
    public static function navBar(){
        include './src/views/components/navbar.php';
    }

    public static function sideBar() {
        include './src/views/components/sidebar.php';
    }


}