<?php
// HW2
// db 資料庫規劃
// table:user
// id/name/password/level
// table:story
// id/name/file/intro_chinese/intro_english/visible

// 前端頁面
// login user

// 後端頁面(有權限才可以進)
// user crud
// stories crud 3-5pages
// session_start();

include "./db/dd.php";
include "./db/account.php";
session_start();

$sql="SELECT * FROM `user`";
$data = $conn->prepare($sql);
$data->execute();
$userData = $data->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="container">
<div class="mt-5">

<!-- msg刪除成功 -->
<?php if (!empty($_SESSION['msg'])) : ?>
    <div>
      <strong>Success!</strong> <?= $_SESSION['msg'] ?>
    </div>
    <?php unset($_SESSION['msg']); ?>
  <?php endif; ?>


  <a href="add.php"><button type="button" class="btn btn-primary">新增帳號</button></a>
  <a href="story.php"><button type="button" class="btn btn-primary">看故事</button></a>
  
  <!-- table -->
  <table class="table table-bordered mt-4">
      <tr class="table-light">
        <th>id</th>
        <th>name</th>
        <th>password</th>
        <th>level</th>
        <th></th>
      </tr>
      <?php foreach ($userData as $key) : ?>
        <tr>
          <td><?= $key['id']; ?></td>
          <td><?= $key['name']; ?></td>
          <td><?= $key['password']; ?></td>
          <td><?= $key['level']; ?></td>
          <td>
            <a href="edit.php?id=<?= $key['id']; ?>">編輯</a>
            /
            <a href="delete.php?id=<?= $key['id']; ?>">刪除</a>
        </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>