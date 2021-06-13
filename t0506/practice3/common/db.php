<?php
    $servername = "localhost";
    $port = "3306";
    $username = "root";
    $password = "123456";

    $conn = new PDO("mysql:host=$servername;port=$port;dbname=db_price", $username, $password);
    // $conn = new PDO("mysql:host=$servername;port=$port;dbname=db_price", $username, $password);

    $sql = "SELECT * FROM stores";
    $getData = $conn->prepare($sql);// 預處理
    $getData->execute();// 執行
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);


?>