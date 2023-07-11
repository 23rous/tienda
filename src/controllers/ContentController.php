<?php

trait ContentController {
    public static function tableUser () {
        include './src/views/components/table.php';
    }
    public static function card() {
        include './src/views/components/card.php';
    }
}