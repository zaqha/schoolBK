<?php
    $servername = "localhost";
    $port = "3306";
    $username = "root";
    $password = "123456";

    $conn = new PDO("mysql:host=$servername;port=$port;dbname=db_0503", $username, $password);
    // $conn = new PDO("mysql:host=$servername;port=$port;dbname=db_price", $username, $password);

    $sql = "SELECT * FROM table_0503";
    $getData = $conn->prepare($sql);// 預處理
    $getData->execute();// 執行
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);
    //$array = ['王曉明'];
    var_dump($data); 
    // var_dump($array);

?>
