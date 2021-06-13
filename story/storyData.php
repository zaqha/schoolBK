<?php
include "./db/dd.php";
include "./db/account.php";


$sql="SELECT * FROM `story`";
$data = $conn->prepare($sql);
$data->execute();
$userData = $data->fetchAll(PDO::FETCH_ASSOC);

// dd($userData);


$input=$_POST;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

<table>
    <tr>
      <th><a href="./index.php?orderby=<?= $orderAtagString?>">id</a></th>
      <th>name</th>
      <th>location</th>
      <th>price</th>
      <th>people</th>
      <th>edit/delete</th>
    </tr>
    <?php foreach ($result as $key) : ?>
      <tr>
        <td><?= $key['id']; ?></td>
        <td><?= $key['name']; ?></td>
        <td><?= $key['location']; ?></td>
        <td><?= $key['price']; ?></td>
        <td><?= $key['people']; ?></td>
        <td>
        <a href="edit.php?id=<?= $key['id']; ?>">編輯</a>
        /
        <a href="delete.php?id=<?= $key['id']; ?>">刪除</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>