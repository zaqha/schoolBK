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
<h1>log out</h1>
<?php
unset($_SESSION['user']);

session_unset();
session_destroy();


$_SESSION['msg']="logout OK";

$url = "./login.php";
header("Refresh:3;url=$url");

?>


</body>
</html>