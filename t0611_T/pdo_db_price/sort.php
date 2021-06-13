<?php 
    include '../common/commonFun.php';
    include './db2.php';


    // if(empty($_GET['orderby'])){
    //     $orderby = "desc";
    //     $orderAtagString = "asc";
    // }else{
    //     if($_GET['orderby'] == "desc"){
    //         $orderby = "desc";
    //         $orderAtagString = "asc";
    //     }else{
    //         $orderby = "asc";
    //         $orderAtagString = "desc";
    //     }
    // }
    

    //沒有orderby  => desc
    if(empty($_GET['orderby'])){
        $orderby = "desc";
        $orderbyChange = "asc";
    }else{
        if($_GET['orderby'] == "desc"){
            $orderby = "desc";
            $orderbyChange = "asc";
            //orderby=desc => desc
        }else{
            //orderby=asc =>asc 
            $orderby = "asc";
            $orderbyChange = "desc";
        }
    }

    // $sortKey;
    // $sortValue;

    $sql = "SELECT SUM(price) AS price, SUM(people) AS people, location_type
    FROM stores
    GROUP BY location_type;
    ";

    // $sql = "SELECT * FROM stores ORDER BY id $orderby";
    //$sql = "SELECT * FROM stores ORDER BY $sortKey $sortValue";
    // $sql = "SELECT * FROM stores ORDER BY id $orderby";

    dd($sql);
    $getData = $conn->prepare($sql);
    $getData->execute();
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);
    //dd($data);
    $conn = null ; //關閉連線
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
        <h3>分區店家資料</h3>
        <h5 style="margin-bottom:18px"></h5>
    </div>

    <?php if(!empty($_GET['msg'])):?>
    <div class="alert alert-success">
        <strong>Success!</strong> <?= $_GET['msg']?>
    </div>
    <?php endif;?>

    <div class="center">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./recover.php">回復資料庫</a>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./index.php">回首頁</a>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./sort.php">分區資料</a>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./create.php">單筆新增</a>

    </div>
    <br>

    <table class="center" border="1px" width="80%">
        <tr>
            <!--  < ?= 等於  < ?php echo -->
            <!-- <th><a href="./index.php?orderby=<?= $orderAtagString?>">ID</a></th> -->
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
            <th>修改/刪除</th>

        </tr>
        <?php foreach ($data as $key => $value) :?>
        <tr>
        <td><a href="./index.php?msg=<?= $value['location_type']."資料";?>&sort=<?= $value['location_type'];?>"><?= $value['location_type'];?></a></td>
            <!-- <td><?= $value['location_type'];?></td> -->
            <td><?= $value['price'];?></td>
            <td><?= $value['people'];?></td>
            <td><a href="./edit.php?id=<?= $value['id'];?>" class="btn btn-info btn-sm" role="button">修改</a> <a href="./del.php?id=<?= $value['id'];?>" class="btn btn-danger btn-sm" role="button">刪除</a> </td>
            <!-- <td><a href="./edit.php?id=<?= $value['id'];?>">修改</a> </td> -->
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

</body>

</html>