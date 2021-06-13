<?php
session_start();
include "./common/db.php";
include "./common/dd.php";

// search回傳值--------------------------------------------------------
$urlParams = [];//網址參數  把QUERY_STRING轉為陣列用
parse_str($_SERVER['QUERY_STRING'],$urlParams);
print_r($_GET);

$test=http_build_query($urlParams);
dd($test);


// orderby(bug)--------------------------------------------------------
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

//【分頁】--------------------------------------------------------------
// 每頁筆數
$pageper=10;
// 總共幾筆
$sqlCount = "SELECT Count(*) as pagetotal FROM stores";
$stmt = $conn->prepare($sqlCount);
$stmt->execute();
$dataTotal = $stmt->fetch(PDO::FETCH_ASSOC);
$dataNumbers = $dataTotal['pagetotal'];
//總共幾頁
$totalPages= ceil($dataNumbers / $pageper);
//該頁 我在哪頁
$input=$_GET;

$pageNow = (isset($_GET['page'])) ? $_GET['page']: 1;
$pageNow = ($pageNow < 1)? 1 : $pageNow;


//該頁起始值
$pageStart = ($pageNow - 1) * $pageper;
//讀取該頁資料 
$sqlLimit = " LIMIT $pageStart , $pageper;";





// 抓資料-------------------------------------------------------
//search
if( isset($urlParams['submit']) && $urlParams['submit'] =='搜尋'){
  //處理searchMethod
    $sqlMethod = '';
  switch($urlParams['searchMethod']){
      case 'equal':
          $sqlMethod = 'like';
          //將搜尋內容加上單引號及百分比 跳脫字元
          $urlParams['searchText'] = "'%". $urlParams['searchText'] . "%'";
          break;
      case 'larger':
          $sqlMethod = '>';
          break;
      case 'less':
          $sqlMethod = '<';
          break;
      default:
          die("參數錯誤") ; //die函數,輸出並跳脫
  }

  echo 'hello';

  // 搜尋無分頁LIMIT功能,整頁顯示 
  $sql = sprintf(
  "SELECT * FROM `stores` WHERE %s %s %s ORDER BY `id` $orderby LIMIT $pageStart , $pageper",
  $urlParams['searchType'],
  $sqlMethod,
  $urlParams['searchText'],
  );

  dd($sql);
  $stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

}else{


$orisql = "SELECT * FROM stores ORDER BY id $orderby";
$sql = $orisql . $sqlLimit;
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$conn = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

  <?php if (!empty($_SESSION['msg'])) : ?>
    <div>
      <strong>Success!</strong> <?= $_SESSION['msg'] ?>
    </div>
    <?php unset($_SESSION['msg']); ?>
  <?php endif; ?>



  <a href="index.php">回首頁</a>
  <a href="recover.php">回復資料庫</a>
  <a href="section.php">分區資料</a>
  <a href="add.php">新增單筆</a>

<!-- search -------------------------->
<form action="index.php" method="get" class="search ms-5">
<div class="input-group mb-3 searchGrouup float-right">
  <select class="custom-select searchSelection " name="searchType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">>
    <option value="all" selected>全部欄位</option>
    <option value="name">店名</option>
    <option value="location">地區</option>
    <option value="money">收入</option>
    <option value="people">人數</option>
  </select>
  <select class="custom-select searchMethod" name="searchMethod">
    <option value="equal" selected>包含</option>
    <option value="larger">大於</option>
    <option value="less">小於</option>
  </select>
  <input type="search" name="searchText" class="form-control searchText" placeholder="搜尋內容">
  <div class="input-group-append">
    <input class="btn btn-secondary" type="submit" value="搜尋" name="submit">
  </div>
</div>   
</form>





  <table>
    <tr>
      <th><a href="./index.php?orderby=<?= $orderAtagString?>">id</a></th>
      <th>name</th>
      <th>location</th>
      <th>price</th>
      <th>people</th>
      <th>edit/delete</th>
    </tr>
    <?php foreach ($result as $key) : ?>
      <tr>
        <td><?= $key['id']; ?></td>
        <td><?= $key['name']; ?></td>
        <td><?= $key['location']; ?></td>
        <td><?= $key['price']; ?></td>
        <td><?= $key['people']; ?></td>
        <td>
        <a href="edit.php?id=<?= $key['id']; ?>">編輯</a>
        /
        <a href="delete.php?id=<?= $key['id']; ?>">刪除</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

<!-- 這裡是分頁 ------------------------------------------------------------------>
<?php
//分頁部分只顯示5頁
//【第一個/5的頁數】
$iStart = 1;
$iStart = $pageNow - 2; //5 放到中間 所以-2
if($iStart < 2){
    $iStart = 1;
}
//【最後一個/5的頁數】
$iEnd = $iStart + 4; // 1 2 3 4 5
if($iEnd >= ($totalPages + 2)){
    $iStart = $pageNow - 4; //62 63 64 65 "66"
    $iEnd = $totalPages;
}elseif($iEnd >= ($totalPages + 1)){
    $iStart = $pageNow - 3; // 62 63 64 "65" 66
    $iEnd = $totalPages;
}
//當資料頁數 小於五
if($totalPages < 5){
    $iStart = 1;
    $iEnd = $totalPages;
}
?>

  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="index.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for ($i=$iStart; $i <= $iEnd ; $i++) : ?>
    <li class="page-item <?php if($pageNow == $i) print 'active'?>"><a class="page-link" href="index.php?page=<?=$i,'&', http_build_query($urlParams)?>" ><?=$i?></a> </li>
    <?php endfor ?>
    <li class="page-item">
      <a class="page-link" href="index.php?page=<?= $totalPages; ?>&orderby=" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


</body>
</html>