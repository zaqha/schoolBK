<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
include 'common/db.php';
include 'common/dd.php';

$input = $_GET;


//每頁顯示的資料
define("PAGE_LIMIT", 10); //PAGE_LIMIT = 5

### 抓頁碼
// isset判斷的是 "變數"
//empty判斷的是 "值"
$page = (isset($_GET['page'])) ? intval($_GET['page']): 1;
$page = ($page < 1)? 1 : $page;

  
//get page
$page=isset($input['page'])? $_GET['page']: 1;
$page = ($page < 1)? 1 : $page;

// 讀取資料庫的資料
// $sql = "select * from `$tableName` LIMIT 1,;

$sql = sprintf(
  "select * from `stores` LIMIT %s, %s",
  ($page - 1) * $pagePer,
  $pagePer
); 

// 總共的頁數
// 資料庫總筆數 / 每頁顯示筆數 = 總頁數
$sqlTmp = "select count(*) as totalRows from `stores`";
$sthTmp = $conn->prepare($sqlTmp);
$sthTmp->execute();
$resultTmp = $sthTmp->fetch(PDO::FETCH_ASSOC);

// // 資料庫總比數 totalRows
$totalRows = $resultTmp['totalRows'];
// 總頁數
//ceil取整數
$totalPages = ceil($totalRows / $pagePer);

dd($totalPages);
// // 上一頁
$previousPage = $page - 1;
$previousPage = ($previousPage < 1) ? 1: $previousPage;
// // 下一頁
$nextPage = $page + 1;
$previousPage = ($previousPage > $totalPages) ? $totalPages : $previousPage;




$sql = "select * from stores";
$index = $conn->prepare($sql);
$index->execute();
$result = $index->fetchAll(PDO::FETCH_ASSOC);
// dd($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<main >
  <div class="btn-group">
    <a class="btn btn-outline-dark" href="./recover.php" >recover</a>
    <a class="btn btn-outline-dark" href="./section.php" >section</a>
    <a class="btn btn-outline-dark" href="./add.php" >add</a>
    <a class="btn btn-primary" href="index.php" >home</a>
  </div>
  <table class="table table-striped">
    <form action="./editMore.php" method="get" name="theForm">
      <thead>
        <tr>
          <th>多筆編輯</th>
          <th>ID</th>
          <th>姓名</th>
          <th>區域</th>
          <th>營業額</th>
          <th>來客數</th>
          <th>修改/刪除</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($result as $value) : ?>
        <tr>
          <td><input type="checkbox" name="batch[]" value="<?= $value['id']; ?>"></td>
          <td><?= $value['id']; ?></td>
          <td><?= $value['name']; ?></td>
          <td><?= $value['location']; ?></td>
          <td><?= $value['price']; ?></td>
          <td><?= $value['people']; ?></td>
          <td> <a href="edit.php?id=<?= $value['id']; ?>">修改</a>
            <br>
            <a href="del.php?id=<?= $value['id']; ?>">刪除</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
  <nav class="nav justify-content-around">
    <input type='hidden' name='act'>
    <input class="btn btn-danger" type="submit" name="batchDelete" value="批次刪除" onclick="document.forms['theForm'].act.value='batchDelete';" />
    <input class="btn btn-primary" type="submit" name="batchedit" value="批次修改" onclick="document.forms['theForm'].act.value='batchEdit';" />
  </nav>
  </form>



<nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="index.php?page=<?php print $previousPage ?>">上一頁</a></li>

              <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="page-item <?php if($page == $i) print 'active'?>"><a class="page-link" href="index.php?page=<?php print $i ?>"><?php print $i ?></a></li>
              <?php endfor ?>
              <li class="page-item"><a class="page-link" href="index.php?page=<?php print $nextPage ?>">下一頁</a></li>
            </ul>
          </nav>





</body>

</main>
</html>