<?php     
    include '../../../common/dd.php';
    include "../../class/database.php";
    include "../../class/story.php";

    $story = new Story();
    $data = $story->getAll();
    // $data = $story->getAllByVisibleN();
    // dd($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="./myJs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <h3>story</h3>
        <h5 style="margin-bottom:18px"></h5>
    </div>

    <div class="center">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./index.php">回首頁</a>
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./create.php">單筆新增</a>

    </div>
    <br>

    <table class="center" border="1px" width="80%">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>file</th>
            <th>intro_chinese</th>
            <th>intro_english</th>
            <th>visible</th>
            <th>修改/刪除</th>

        </tr>
        <?php foreach ($data as $key => $value) :?>
        <tr>
            <td><?= $value['id'];?></td>
            <td><?= $value['name'];?></td>
            <td><?= $value['file'];?></td>
            <td><?= $value['intro_chinese'];?></td>
            <td><?= $value['intro_english'];?></td>
            <td><?= $value['visible'];?></td>
            <td>
                <a href="./edit.php?id=<?= $value['id'];?>" class="btn btn-info btn-sm" role="button">修改</a>
                <a href="./del.php?id=<?= $value['id'];?>" class="btn btn-danger btn-sm" role="button">刪除</a>
            </td>
        </tr>
        <?php endforeach;?>


        <tr>
            <!-- <td colspan="7">By failing to prepare, you are preparing to fail. </td> -->

            <td colspan="7">
                <!-- <p>
                <img src="https://unsplash.it/300/200" alt="" width="300px" height="200px">
            </p> -->
                <div id="example1">
                    <p>
                        <?= $strArr[0]?>
                    </p>
                </div>
            </td>

        </tr>
    </table>

    <br><br><br>

</body>

</html>