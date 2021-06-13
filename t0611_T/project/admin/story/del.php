<?php

include '../../../common/commonFun.php';
include "../../class/database.php";
include "../../class/story.php";

$id  = $_GET['id'];
$story = new Story();
$story->delete($id);
$url = "./index.php?msg=delete_ok";
header("Location: $url");

?>

