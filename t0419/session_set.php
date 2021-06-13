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
<h1>set5</h1>

<!-- $_SESSION 只能在HTML  -->
<?php

$_SESSION["user"] = "admin";
$_SESSION["data"] = "adminData";
// $input=$_SESSION;
// dd($input);
$url = "./session_show.php";
header("Refresh:3;url=$url");



?>
</body>
</html>