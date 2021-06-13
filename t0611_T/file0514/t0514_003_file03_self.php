<?php

    include "../common/commonFun.php";
    // $target_dir = "./uploads/";
    $input = $_FILES;
    // dd($input);
    $target_dir = "./images/";
    //$_FILES["fileToUpload"]["name"] = "hw0430_sql.png"
    //target_file = "./images/hw0430_sql.png"
    // $str = "hw0430_sql.png";
    $str = $_FILES["fileToUpload"]["name"];
    $t=time(); //現在時間戳記
    $getStrArr = explode(".",$str); //拆字串變arr
    // dd($getStrArr[0]);//主檔名
    // dd($getStrArr[1]);//副檔名
    // $basename = basename($_FILES["fileToUpload"]["name"]);
    $changeName = $getStrArr[0].$t;
    // dd($changeName);
    //images/photo01.png
    //images/photo02.png
    //images/user-name/photo01.png
    //images/amy/photo02.png
    //images/bob/photo03.png
    //mkdir 建目錄

    $md5Name = md5($changeName); //md5 加密
    $target_file = $target_dir . $md5Name.".$getStrArr[1]"; //$getStrArr[1] 副檔名ex.png

    // dd($target_file);
    // $target_file = "./images/hw55688.png";

    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)):?>
        <img src="<?= "$target_file"?>" alt="" width="200">;
    <?php endif;?>
</body>
</html>