<?php
session_start();
include "./db/dd.php";
include "./db/account.php";

$id=$_GET['id'];

$sql="DELETE FROM `user` WHERE id = '$id';";
$getData=$conn->prepare($sql);
$getData->execute();
$deletedata = $getData->fetch(PDO::FETCH_ASSOC);

$url="account.php";
header("Location:$url");

$_SESSION['msg']="delete $id _ok";
?>