<?php
session_start();
include'../common/dd.php';
?>


<?php

$_SESSION["user"] = "admin";
$_SESSION["tmp"] = "tmpString";

$input=$_SESSION;
dd($input);

unset($_SESSION['tmp']);
if (empty($_SESSION['tmp'])){
  session_destroy(); //清掉全部session   session_unset(); 也可以 
}
header("localtion:./session.php");
// 清掉後導入另一頁
dd($input);





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
  
</body>
</html>