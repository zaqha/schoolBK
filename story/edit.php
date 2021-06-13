<?php
include "./db/dd.php";
include "./db/account.php";
session_start();

$input = $_POST;

if (empty($input['submit'])) {
  $input = $_GET;
  $id = $input['id'];
  $sql = "SELECT * FROM user WHERE id = '$id'
        ";
  $getData = $conn->prepare($sql);
  $getData->execute();
  $editdata = $getData->fetch(PDO::FETCH_ASSOC);

  dd($editdata);
} else {
  dd($input);

  $id = $_GET['id'];
  $password = $input['password'];
  $name = $input['name'];
  $level = $input['level'];

  $sql = "UPDATE `user` SET `name`='$name',`password`='$password',`level`='$level' WHERE id = '$id'";
  $updateData = $conn->prepare($sql);
  $updateData->execute();

  $url = "./account.php";
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
  <a href="index.php"><button type="button" class="btn btn-primary">會員資料</button></a>

  <form action="" method="post">
    <table>
      <tr>
        <th>id</th>
        <th>password</th>
        <th>name</th>
        <th>level</th>
      </tr>
      <td><?= $editdata['id'] ?></td>
      <td><input type="text" name="password" id="password" value="<?= $editdata['password'] ?>"></td>
      <td><input type="text" name="name" id="name" value="<?= $editdata['name'] ?>"></td>
      <td><input type="number" name="level" id="people" value="<?= $editdata['level'] ?>"></td>
      </td>
    </table>
    <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>