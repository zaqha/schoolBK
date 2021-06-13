<?php
include 'common/db.php';
include 'common/dd.php';

if (!empty($_GET['submit'])) {
    $input = $_GET;

    $name = $input['name'];
    $location = $input['location'];
    $price = $input['price'];
    $people = $input['people'];
    $sql = "INSERT INTO stores (id, name , location, price, people) 
    VALUE (NULL, '$name', '$location', '$price', '$people')";

    $insertData = $conn->prepare($sql); // 預處理
    $insertData->execute(); // 執行
    $url = "./index.php";
    header("Location: $url");
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

    <a href="./recover.php">recover</a>
    <a href="">section</a>
    <a href="./add.php">add</a>
    <a href="index.php">home</a>

    <form action="" method="get">
        <table border="1px" width="80%">
            <tr>
                <th>id</th>
                <th>店名</th>
                <th>區域</th>
                <th>營業額</th>
                <th>來客數</th>
            </tr>
            <td>id</td>
            <td><input type="text" name="name" id="name"></td>
            <td>
                <select id="location" name="location">
                    <option value="北區">北區</option>
                    <option value="中區">中區</option>
                    <option value="南區">南區</option>
                </select>
            </td>
            <td><input type="number" name="price" id="price"></td>
            <td><input type="number" name="people" id="people"></td>
            <tr>
                <td colspan=5> <input type="submit" value="submit" name="submit"></td>
            </tr>
    </form>
</body>

</html>