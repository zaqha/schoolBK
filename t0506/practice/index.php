<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include "/xampp/htdocs/PHP/common/db.php";
include "/xampp/htdocs/PHP/common/dd.php";


$input = $_GET;

dd($_SERVER['PHP_SELF']);
$basename = basename($_SERVER['PHP_SELF']);//最後的檔案名稱 ex: index.php
dd($basename);
$urlVal = http_build_query($input);//把array 組成 GET value ex:page=1
dd($urlVal);
$pageString = "./$basename?$urlVal"; //./index.php?page=1
dd($pageString);



// pagination
$pagePer = 10; //每頁數量
// $pageNow = 1; //現在頁面
// $sqlLimit = "SELECT 8 FROM stores LIMIT 11,5;";
//從11開始5位

//get page
if(!empty($input['page'])){
    $pageNow = $input['page'];
    unset($input['page']);//unset:移除變數的值 這邊unset原因 因下方分頁超連結
}


$pageStart = ($pageNow - 1) * $pagePer; //起始值


$sqlLimit = " LIMIT $pageStart , $pagePer ; ";

$sql = "SELECT * FROM stores";
$sql = $sql . $sqlLimit;


$sqlCount = "SELECT Count(*) AS page_count FROM stores";
$getDataCount = $conn->prepare($sqlCount);
$getDataCount->execute();
$dataCount = $getDataCount->fetch(PDO::FETCH_ASSOC);
// dd($dataCount);

$pageCount = $dataCount['page_count']; //總筆數
$pageCount = ceil($pageCount / $pagePer); //總共會多少的頁  //ceil無條件進位


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



//分區分頁
    // $urlVal 抓GET value
    if(!empty($urlVal)){
        //有GET 變數 ex.sort=北區
        $pageStringFirst = $pageString."&page=1";
        $pageStringEnd = $pageString."&page=$pageCount";
    }else{
        $pageStringFirst = $pageString."page=1";
        $pageStringEnd = $pageString."page=$pageCount";
    }



// dd($_GET['deletes']);

if(!empty($_GET['deletes'])){
    $deletes = $_GET['deletes'];
    foreach($deletes as $key){
    $sql = "DELETE FROM `stores` WHERE id = '$key'
    ";
    $delData = $conn->prepare($sql);
    $delData->execute();
    $url = "./index.php?msg=del_ok";
    header("Location:$url");}
}


// $orderby = "desc";
$sql = "SELECT * FROM stores";
$sql = $sql . $sqlLimit;
dd($sql);
// $sql = "SELECT * FROM stores ORDER BY id $orderby";
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
<div class="container">
    <?php if(!empty($_GET['msg'])):?>
    <div class="alert alert-success" role="alert">
        <strong>Sucess </strong><?= $_GET['msg']?>
    </div>
    <?php endif;?>


<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">店家資料</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="./index.php">Home</a></li>
    <li><a href="./recover.php">回復資料庫</a></li>
    <li><a href="./sort.php">分區資料</a></li>
    <li><a href="./add.php">新增單筆</a></li>
    </ul>
</div>
</nav>



    <table  class="table table-striped">
        <tr>
        <th>id</th>
            <th>
                <a href="./index.php?orderby=<?= $orderAtagString?>">id123</a>
            </th>
            <th>店名</th>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
            <th>修改/刪除</th>
        </tr>


        <form action="index.php">
        <?php foreach($result as $key) :?>
        <tr>
        <td><input type="checkbox" name="deletes[]" value="<?= $key ['id'] ;?>"></td>
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
    <input type="submit" value="Submit">
        </form>

    <br>




    <div class="container">              
<ul class="pagination justify-content-center">
    <!-- 最前一頁 -->
    <li class="page-item"><a class="page-link" href="./index.php?<?=$pageStringFirst;?>">&lt;&lt;</a></li>
        <?php
            $iStart = 1;
            $iStart =$pageNow - 2; //5放到中間所以 - 2
            if($iStart < 2 ){
                $iStart = 1;
            }
            $iEnd = $iStart + 4 ;
            if($iEnd >=($pageCount + 2)){
                $iStart = $pageCount - 4;
                $iEnd = $pageCount;
            }elseif($iEnd >= ($pageCount + 1)){
                $iStart = $pageNow - 3;
                $iEnd = $pageCount;
            }
            
            ?>

        <?php for($i=$iStart; $i <= $iEnd ; $i++) :?>
        <?php if($i == $pageNow):?>
        <li class="page-item active"><a class="page-link" href="./index.php?<?= "page=$i";?>"><?= $i?></a></li>
        <?php else:?>

        <li class="page-item"><a class="page-link" href="./index.php?<?= "page=$i";?>"><?= $i?></a></li>
        <?php endif;?>
        <?php endfor;?>

    <!-- 最後一頁 -->
    <li class="page-item"><a class="page-link" href="./index.php?<?="$pageStringEnd";?>">&gt;&gt;</a></li>
</ul>
</div>

</body>
</div>
</html>