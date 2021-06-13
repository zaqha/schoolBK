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
  <h1>main.php</h1>
  <h3>hello session['user']</h3>
  <?php
$input=$_SESSION['user'];
echo "Helo $input";
?>

  <h3>a tag logout</h3>
<a href="./logout.php">logout</a>

</body>
</html>