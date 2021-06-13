<?php
session_start();




// remove all session


if{$_SESSION['user']}{
  $url="./login.php";
  header("refresh:3 $url");
}else{
  header("./login.php");
}




session_unset();
session_destroy();




?>