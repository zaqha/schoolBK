<?php
include './common/db.php';
include './common/dd.php';

$input = $_GET;
    $id = $input['id'];
    $sql = "DELETE FROM `stores` WHERE id = '$id'
    ";
    $delData = $conn->prepare($sql);
    $delData->execute();
    $url = "./index.php?msg=del_ok";
    header("Location:$url")

?>