<?php
// 1.login.php
// 2.main.php 
// show hello user
// show log out =>unset('user')頁面

// 3.logout.php
// unset('user')
// to login
// refresh 3 show h1 tage


// 4.remove_session.php
// .remove all session
// .if no session['user'] to refresh login
// .if have session['user'] to refresh main.php
        // main.php if no user =>login.php
        // login.php msg =>"you must login"
        // main.php if have user =>main.php

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
<h1>login.php</h1>
<h3>set session['user'] = 'admin'</h3>
<body>
<?php
  $_SESSION['user']= 'admin';
  $url="./main.php";
  header("Refresh:3 $url");


?>



</body>
</html>