<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<?php
    include 'common/db.php';
    include 'common/dd.php';
    
// dd($_GET);
// dd($_GET['location']);

if(!empty($_GET['location'])){
    $location=$_GET['location'];
    $sql = "SELECT * FROM stores WHERE `location` = '$location'";
$getData = $conn->prepare($sql);
$getData->execute();
$result = $getData->fetchAll(PDO::FETCH_ASSOC);
$conn = null; 
}
else{
// // 沒有orderby => desc

if(empty($_GET['orderby'])){
    $orderby = "desc";//select
    $orderAtagString = "asc"; // a tag
}else{

         //orderby =>desc
    if($_GET['orderby'] == "desc"){
        $orderby = "desc";
        $orderAtagString = "asc";
    }else{
        //orderby =>asc
        $orderby = "asc";
        $orderAtagString = "desc";
    }
}


// $orderby = "desc";

$sql = "SELECT * FROM stores ORDER BY id $orderby";
dd($sql);

  $stmt = $conn->prepare($sql);
  $stmt->execute();

  // set the resulting array to associative 抓取全部
//   括弧內是function   fetch抓
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   ASSOC二維
//   $result = $stmt->fetchAll()(PDO::FETCH_ASSOC);

// index array
//   $result = $stmt->fetchAll()(PDO::FETCH_NUM);


// array
//   $result = $stmt->fetchAll()(PDO::FETCH_NUM);



//   foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//     echo $v;

$conn = null; // 關閉連線
// dd($result);

}
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
    <h1>店家資料</h1>

    <?php if(!empty($_GET['msg'])):?>
    <div>
        <strong>Sucess </strong><?= $_GET['msg']?>
    </div>
    <?php endif;?>


    <a href="./recover.php">回復資料庫</a>
    <a href="./index.php">回首頁</a>
    <a href="./sort.php">分區資料</a>
    <a href="./create.php">新增單筆</a>


    <table  class="table table-striped">
        <tr>
            <th>
                <a href="./index.php?orderby=<?= $orderAtagString?>">id123</a>
            </th>
            <th>店名</th>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
            <th>修改/刪除</th>
        </tr>



        <?php foreach($result as $key) :?>
        <tr>
            <td><?= $key ['id'] ;?></td>
            <td><?= $key ['name'] ;?></td>
            <td><?= $key ['location'] ;?></td>
            <td><?=  $key ['price'] ;?></td>
            <td> <?= $key ['people'] ;?></td>
            <td> <a href="edit.php?id=<?= $key ['id'] ;?>">修改</a>/
                <a href="del.php?id=<?= $key ['id'] ;?>">刪除</a>
            </td>

        </tr>
        <?php endforeach;?>


    </table>

    <br>
    <!-- <table  border="1px" width="80%">
        <tr>
            <th>id</th>
            <th>店名</th>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
            <th>修改/刪除</th> -->
    </tr>
    <?php
            // foreach($result as $row){
            //     echo"<tr>";               
            //     foreach($row as $column => $value){
            //     echo "<td>".$value."</td>";
            // }
            // echo"</tr>";
            // }
            ?>

    </table>


</body>

</html>