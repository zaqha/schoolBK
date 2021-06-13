<?php
include '../common/dd.php';
session_start();
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
  <h1>show</h1>

  <?php


// 如果不是session的變數 ex $_SESSION['565'] 網頁會當掉
// !是反向
// if(!empty($_SESSION['user'])){

// }

if($_SESSION['user']=='admin'){
  echo "hello". $_SESSION['user'];
}else{
  echo "no session['user']data";
}

?>
<br>
<a href="./session_logout.php">logout</a>


</body>
</html>


