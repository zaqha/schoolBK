<?php
include './common/db.php';
include './common/dd.php';


$sql = "SELECT sum(price) as price, sum(people) as people, location
FROM stores
GROUP BY location;
";

$getData = $conn->prepare($sql);
$getData->execute();
$data = $getData->fetchAll(PDO::FETCH_ASSOC);
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
<table>
    <thead>
      <tr>
        <th>區域</th>
        <th>營業額</th>
        <th>來客數</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($data as $value) : ?>
      <tr>
        <td><a href="sectionD.php?location=<?= $value['location'] ;?>"><?= $value['location'] ;?></td>
        <td><?= $value['price']; ?></td>
        <td><?= $value['people']; ?></td>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>