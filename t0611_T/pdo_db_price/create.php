<?php 
    include '../common/commonFun.php';
    include './db2.php';
    
    if(!empty($_GET['submit'])){
        $input = $_GET;
        $name = $input['name'];
        $location_type = $input['location_type'];
        $price = $input['price'];
        $people = $input['people'];
        $sql = "INSERT INTO stores ( name , location_type , price , people ) 
            VALUE ('$name' , '$location_type' ,'$price' ,'$people');";
        //dd($sql);
        $insertData = $conn->prepare($sql);
        $insertData->execute();
        $url = "./index.php?msg=add_ok";
        header("Location: $url");

    }
    // $data = $getData->fetchAll(PDO::FETCH_ASSOC);
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
        <h3>新增資料</h3>
        <h5 style="margin-bottom:18px"></h5>
    </div>

    <div class="center">
        <a href="./index.php">回首頁</a>
    </div>
    <br>
    <form action="" method="get">
    <table class="center" border="1px" width="80%">
        <tr>
            <th>ID</th>
            <th>店名</th>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>

        </tr>
        <tr>
            <td>id</td>
            <td><input type="text" name="name" id="name"></td>
            <td>
            <select name="location_type" id="location_type">
                <option value="北區">北區</option>
                <option value="中區">中區</option>
                <option value="南區">南區</option>
            </select>
            </td>
            <td><input type="number" name="price" id="price"></td>
            <td><input type="number" name="people" id="people"></td>
        </tr>


        <tr>
            <!-- <td colspan="7">By failing to prepare, you are preparing to fail. </td> -->

            <td colspan="7">
                <!-- <p>
                <img src="https://unsplash.it/300/200" alt="" width="300px" height="200px">
            </p> -->
                <div id="example1">
                    <p>
                       <input type="submit" value="submit" name="submit">
                    </p>
                </div>
            </td>

        </tr>
    </table>
    </form>

</body>

</html>