<?php
include '../common/commonFun.php';
include './db2.php';
    $input = $_GET;
    $id = $input['id'];
    //$id = $_GET['id'];
    $sql = "DELETE FROM stores WHERE id = '$id';
    ";
    $delData = $conn->prepare($sql);//預處理
    $delData->execute();//執行
    $url = "./index.php?msg=del_id_$id";
    header("Location: $url");
?>

