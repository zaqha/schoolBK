<?php 
    include '../../../common/commonFun.php';
    include "../../class/database.php";
    include "../../class/story.php";

    if(empty($_POST['submit'])){
        //edit
        $id = $_GET['id'];
        $input = $_POST;
        $story = new Story();
        //update 先把get過來的id 抓過來修改
        $data = $story->getById($id);
    }else{
        $inputFile = $_FILES;
        $input = $_POST;
        if(!empty($_FILES['file']['name'])){           
            $target_dir = "../../images/"; //選擇目錄
            $target_file = $target_dir . $_FILES["file"]["name"]; //存放位置與檔名
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $input['file'] = $_FILES["file"]["name"];
        }

        $story = new Story();
        $data = $story->update($input);
        $url = "./index.php?msg=update_ok";
        header("Location: $url");

    }

?>

<?php
        //strArr
        $strArr = [
            "By failing to prepare, you are preparing to fail.",
        ];
        //echo count($strArr);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td {
        height: 80px;
        width: 80px;
        text-align: center;
    }

    .center {
        /* margin-left: auto;
        margin-right: auto; */
        margin: auto;
        text-align: center;
    }



    #example1 {
        border: 2px solid grey;
        border-radius: 25px;
    }

    a {
        text-decoration: none;
        color: inherit;
        font-size: 24px;
        /* color:royalblue; */
        /* color: cornflowerblue; */
    }

    a:hover {
        color: grey;
        text-decoration: none;
        cursor: pointer;
    }

    h3 {
        font-family: Verdana;
    }
    </style>
</head>

<body>
    <div class="center">
        <h3>修改資料</h3>
        <h5 style="margin-bottom:18px"></h5>
    </div>

    <div class="center">
        <a href="./index.php">回首頁</a>
    </div>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
    <table class="center" border="1px" width="80%">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>file_pic</th>
            <th>file</th>
            <th>修改檔案</th>
            <th>intro_chinese</th>
            <th>intro_english</th>
            <th>visible</th>

        </tr>
        <tr>
            <td><?= $data['id']?></td>
            <td><input type="text" name="name" id="name" value="<?= $data['name'];?>"></td>
            <td><img src="../../images/<?= $data['file'];?>" alt="<?= $data['file'];?>" width="180px" height="120px"></td>
            <td><?= $data['file']?></td>
            <td><input type="file" name="file" id="file" value="<?= $data['file'];?>"></td>
            <td><input type="text" name="intro_chinese" id="intro_chinese" value="<?= $data['intro_chinese'];?>"></td>
            <td><input type="text" name="intro_english" id="intro_english" value="<?= $data['intro_chinese'];?>"></td>
            <td>
            <select name="visible" id="visible">
                <option value="<?= $data['visible'];?>"><?= $data['visible'];?></option>
                <option value="<?= $data['visible'];?>">----</option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            </td>
        </tr>


        <tr>
            <!-- <td colspan="7">By failing to prepare, you are preparing to fail. </td> -->

            <td colspan="8">
                <!-- <p>
                <img src="https://unsplash.it/300/200" alt="" width="300px" height="200px">
            </p> -->
                <div id="example1">
                    <p>
                       <input type="hidden" name="id" value="<?= $data['id'];?>">
                       <input type="hidden" name="file" value="<?= $data['file'];?>">
                       <input type="submit" value="submit" name="submit">
                    </p>
                </div>
            </td>

        </tr>
    </table>
    </form>

</body>

</html>