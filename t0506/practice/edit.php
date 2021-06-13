<?php
include './common/db.php';
include './common/dd.php';


// 動作一 select by id //index過來的
$input=$_GET;
$id = $input['id'];
$sql = "SELECT * FROM stores WHERE id = '$id'
";//not id 要多筆資料

$getData = $conn->prepare($sql);
$getData->execute();
$data = $getData->fetch(PDO::FETCH_ASSOC);
//fetch抓單層
//fetch 抓 data['id']

//fetchAll
//fetch 抓 data[0]['id']
dd($data);





//動作二 修改好的資料 修改後...
//cant find id 因為網址上的ID沒有惹
// 解決辦法:加hidden submit



// if(!empty($_GET['submit'])){
//     $input=$_GET;
    
//     $name = $input['name'];
//     $location = $input['location'];
//     $price = $input['price'];
//     $people = $input['people'];
//     $sql = "INSERT INTO stores (id, name , location, price, people) 
//     VALUE (NULL, '$name', '$location', '$price', '$people')";

// $insertData = $conn->prepare($sql);
// $insertData->execute();
// $url = "./index.php";
// header("Location: $url");
// }




//如果有submit的資料 就是edit form
//沒有submit 代表index過來
//if no submit
// code....index 動作一
//else
// code...edit form 動作二


if(empty($_GET['submit'])){
    $input = $_GET;
    $id = $input['id'];
    $sql = "SELECT * FROM stores WHERE id = '$id'
    ";
    $getData = $conn->prepare($sql);
    $getData->execute();
    $data = $getData->fetch(PDO::FETCH_ASSOC);
    dd($data);
}else{

    $input = $_GET;
    $id = $input['id'];
    $name = $input['name'];
    $location = $input['location'];
    $price = $input['price'];
    $people = $input['people'];

    $sql = "UPDATE stores SET
    name = '$name', location = '$location',
    price = '$price' , people = '$price'
    WHERE id = '$id'
    ";
    $updateData = $conn->prepare($sql);
    $updateData->execute();
    echo 'update Ok<br>';

    // $url = "./index.php?msg=edit_ok";

    // header("Location: $url");

    //submit後在同一頁顯示更改後資料
    $sql = "SELECT * FROM stores WHERE id = '$id'
    ";

    $getData = $conn->prepare($sql);
    $getData->execute();
    $data = $getData->fetch(PDO::FETCH_ASSOC);

    echo 'select Ok<br>';



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
<h1>編輯資料</h1>
<h1><a href="./index.php">回首頁</a></h1>
<form action="" method="get">  
<table  border="1px" width="80%">
        <tr>
            <th>id</th>
            <th>店名</th>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
        </tr>
        <td><?= $data['id'];
            // if(!empty($data['id']))
            // {
            //     echo $data['id'];
            // }
        ?>
        
        </td>

        <td><input type="text" name="name" id="name" value="<?= $data['name'];?>"></td>
        <td>
        <select id="location" name="location">
        <option value="<?= $data['location'];?>"><?= $data['location'];?></option>
    <option value="北區">北區</option>
    <option value="中區">中區</option>
    <option value="南區">南區</option>
    </select>
        </td>

        <td><input type="number" name="price" id="price" value="<?= $data['price'];?>"></td>
        <td><input type="number" name="people" id="people" value="<?= $data['people'];?>"></td>

    <tr>
        <td colspan=5> <input type="hidden" value="<?= $data['id'];?>" name="id">
        <input type="submit" value="submit" name="submit">
        </td>
        </tr>
        </form>
</body>
</html>