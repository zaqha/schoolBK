<?php
include "./db/dd.php";
include "./db/account.php";

$sql="SELECT * FROM `story`";
$data = $conn->prepare($sql);
$data->execute();
$storyData = $data->fetchAll(PDO::FETCH_ASSOC);

$x=0;
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
<button><a href="storyData.php">編輯故事</a></button>
<body class="container d-flex justify-content-center">
<button class="btn btn-secondary"><a href="story.php?page=<?=$x; ?>">上頁</a></button>

<div>
  <div class="<?=$storyData[$x]['visible']; ?>">
    <h1 class="text-center"><?= $storyData[$x]['name']; ?></h1>
    <img src="./img/<?= $storyData[$x]['file']; ?>" alt="">
    <p class="text-center"><?= $storyData[$x]['intro_chinese']; ?></p>
    <p class="text-center"><?= $storyData[$x]['intro_english']; ?></p>
  </div>
</div>
<button class="btn btn-secondary"><a href="story.php?page=<?=$x; ?>">下頁</a></button>
</body>
</html>