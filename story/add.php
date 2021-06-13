<?php
include "./db/dd.php";
include "./db/account.php";
session_start();

if (!empty($_GET['submit'])) {
    $input = $_GET;

    $name = $input['name'];
    $price = $input['password'];
    $level = $input['level'];
    $sql = "INSERT INTO user (id, name , password, level) 
    VALUE (NULL, '$name', '$password', '$level')";

    $insertData = $conn->prepare($sql); // 預處理
    $insertData->execute(); // 執行

dd($insertData);

    // $url = "account.php";
    // header("Location: $url");

    $_SESSION['msg']="add_ok";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>新增資料</h1>
    <a href="account.php">會員資料</a>

    <form action="" method="get">
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>password</th>
                <th>level</th>
            </tr>
            <td>id</td>
            <td><input type="text" name="name" id="name"></td>
            <td><input type="text" name="password" id="password"></td>
            <td><input type="number" name="level" id="level"></td>
            <tr>
                <td colspan=5> <input type="submit" value="submit" name="submit"></td>
            </tr>
    </form>

    
</body>

</html>