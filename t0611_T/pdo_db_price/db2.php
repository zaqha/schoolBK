<?php
$servername = "localhost";
$username = "root";
$password = "12345";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_price;port=3306;charset=utf8;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
}
?>