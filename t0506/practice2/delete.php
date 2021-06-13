<?php
session_start();
include "./common/db.php";
include "./common/dd.php";

$id=$_GET['id'];

$sql="DELETE FROM `stores` WHERE id = '$id';";
$getData=$conn->prepare($sql);
$getData->execute();
$deletdata = $getData->fetch(PDO::FETCH_ASSOC);

$url="index.php";
header("Location:$url");

$_SESSION['msg']="delete $id _ok";
?>