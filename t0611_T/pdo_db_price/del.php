<?php
session_start();
include '../common/commonFun.php';
include './db2.php';
    $input = $_GET;
    $id = $input['id'];
    //$id = $_GET['id'];
    // dd("del 0504");
    //dd($_SERVER['HTTP_REFERER']); 回到上一頁
    
    $sql = "DELETE FROM stores WHERE id = '$id';
    ";
    $delData = $conn->prepare($sql);//預處理
    $delData->execute();//執行
    // $url = "./index.php?msg=del_id_$id";
    $url = $_SERVER['HTTP_REFERER'];
    $_SESSION['msg'] = "del_id_$id";

    header("Location: $url");
?>

