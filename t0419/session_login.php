<?php
include '../common/dd.php';
session_start();

?>

<!-- 資料刪除 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>shoe unset</h1>
<?php
  $input=$_SESSION;
var_dump($input);
session_unset();
session_destroy();
$url="./session_set.php";
header("Refresh:3;url=$url");



?>
</body>
</html>