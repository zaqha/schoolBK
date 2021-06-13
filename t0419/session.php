<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
// unset($_SESSION["favanimal"]);
unset($_SESSION);
// unset 刪除
// print_r($_SESSION);
// $_SESSION["favanimal"] = "cat";
// print_r($_SESSION);
unset($_SESSION);

session_destroy();
// 全部暫存清除


// $input=$_SESSION


?>
</body>
</html>