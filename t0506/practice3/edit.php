<?php
session_start();

include 'common/db.php';
include 'common/dd.php';

$input = $_POST;

if (empty($input['submit'])) {
  $input = $_GET;
  $id = $input['id'];
  $sql = "SELECT * FROM stores WHERE id = '$id'
        ";
  $getData = $conn->prepare($sql);
  $getData->execute();
  $editdata = $getData->fetch(PDO::FETCH_ASSOC);

  dd($editdata);
} else {
  dd($input);

  $id = $_GET['id'];
  $name = $input['name'];
  $location = $input['location'];
  $price = $input['price'];
  $people = $input['people'];

  $sql = "UPDATE `stores` SET `name`='$name',`location`='$location',`price`='$price',`people`='$people' WHERE id = '$id'";
  $updateData = $conn->prepare($sql);
  $updateData->execute();

  $url = "./index.php";
  header("Location: $url");
  $_SESSION['msg'] = "edit $id _ok";
}

$conn = null;

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
  <a href="index.php">回首頁</a>
  <a href="recover.php">回復資料庫</a>
  <a href="section.php">分區資料</a>
  <a href="add.php">新增單筆</a>

  <form action="" method="post">
    <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>location</th>
        <th>price</th>
        <th>people</th>
      </tr>
      <td><?= $editdata['id'] ?></td>
      <td><input type="text" name="name" id="name" value="<?= $editdata['name'] ?>"></td>
      <td>
        <select id="location" name="location">
          <option value="<?= $editdata['location'] ?>"SELECTED disabled><?= $editdata['location'] ?></option>
          <option value="北區" <?php if($editdata['location'] == "北區") print 'hidden'?>>北區</option>
          <option value="中區" <?php if($editdata['location'] == "中區") print 'hidden'?>>中區</option>
          <option value="南區" <?php if($editdata['location'] == "南區") print 'hidden'?>>南區</option>

        </select>
      </td>
      <td><input type="number" name="price" id="price" value="<?= $editdata['price'] ?>"></td>
      <td><input type="number" name="people" id="people" value="<?= $editdata['people'] ?>"></td>
      </td>
    </table>
    <input type="submit" value="submit" name="submit">

  </form>

</body>

</html>