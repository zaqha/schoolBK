<?php
include 'C:\xampp\htdocs\effie\PHP\common\dd.php';
include 'C:\xampp\htdocs\effie\PHP\common\db.php';

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
<a href="./recover.php">回復資料庫</a>
<a href="./index.php">回首頁</a>
<a href="./sort.php">分區資料</a>
<a href="./create.php">新增單筆</a>

<table  border="1px" width="80%">
        <tr>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
        </tr>
<?php foreach($data as $key) :?>   
                <tr>   
                <td><?= $key ['location'] ;?></td>
                <td><?=  $key ['price'] ;?></td>
                <td> <?= $key ['people'] ;?></td>
            </tr>
            <?php endforeach;?>
            </table>




</body>
</html>