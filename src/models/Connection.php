<?php

class Connection {

    public static function connect()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: {$e->getMessage()}" ;
        }
    }

    // public static function getAll () {
    //     $conect = self::connect();
    //     $statement = $conect->prepare("SELECT * FROM users");
    //     $statement->execute();
    //     $data = $statement->fetchAll();
    //     echo json_encode($data);
    // }
}


// Connection::connect();
// Connection::getAll();