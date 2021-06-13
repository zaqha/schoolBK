<?php
include 'C:\xampp\htdocs\effie\PHP\common\dd.php';
include 'C:\xampp\htdocs\effie\PHP\common\db.php';

    $input = $_GET;
    $id = $input['id'];
    $sql = "DELETE FROM `stores` WHERE id = '$id'
    ";
    $delData = $conn->prepare($sql);
    $delData->execute();
    $url = "./index.php?msg=del_ok";
    header("Location:$url")



?>