<?php
require_once "Config.php";

class Database{

    public function getConnection(): ?PDO
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" .DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PASS);
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $exception){
            echo "DB could not be connected: " . $exception->getMessage();
        }
        return $conn;
    }

}