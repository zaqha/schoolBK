<?php

// 登出

session_start();
unset($_SESSION['user']);
header("location:./session_login.php");

$input=$_SESSION;
var_dump($input);


?>
