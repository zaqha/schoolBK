<?php
class Database{
    public function(){
    $servername = "localhost";
    $port = "3306";
    $username = "root";
    $password = "123456";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $return $conn
    }
}
?>