<?php
include './common/db.php';
include './common/dd.php';


$sql="SELECT sum(price) as price, sum(people) as people, location 
FROM `stores`
GROUP BY location;
";

$getSection = $conn->prepare($sql);
$getSection->execute();
$data = $getSection->fetchAll(PDO::FETCH_ASSOC);
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
<a href="add.php">回復資料庫</a>
<a href="section.php">分區資料</a>
<a href="add.php">新增單筆</a>
<table>
<tr>
<th>location</th>
<th>price</th>
<th>people</th>
</tr>
<?php foreach($data as $result) :?>
<tr>
<td><?= $result['location'] ;?></td>
<td><?= $result['price'] ;?></td>
<td><?= $result['people'] ;?></td>
</tr>
<?php endforeach; ?>
  </table>

</body>
</html>