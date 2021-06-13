<?php
// database 連線
require('db.php');
// CSRF 驗證
require('class/CSRF.class.php');
// SESSION 訊息傳遞
require('class/Message.class.php');
// 頁碼分頁
require('class/Paginator.class.php');

//每頁顯示的資料
define("PAGE_LIMIT", 5);

### 抓頁碼
// isset判斷的是 "變數"
//empty判斷的是 "值"
$page = (isset($_GET['page'])) ? intval($_GET['page']): 1;
$page = ($page < 1)? 1 : $page;
// 讀取資料庫的資料
// $sql = "select * from `$tableName` LIMIT 1,;
$sql = sprintf(
  "select * from `$tableName` LIMIT %s, %s",
  ($page - 1) * PAGE_LIMIT,
  PAGE_LIMIT
); 

// 總共的頁數
// 資料庫總筆數 / 每頁顯示筆數 = 總頁數
$sqlTmp = "select count(*) as totalRows from `crud`";
$sthTmp = $dbConnection->prepare($sqlTmp);
$sthTmp->execute();
$resultTmp = $sthTmp->fetch(PDO::FETCH_ASSOC);
// 資料庫總比數 totalRows
$totalRows = $resultTmp['totalRows'];
// 總頁數
$totalPages = ceil($totalRows / PAGE_LIMIT);
// 上一頁
$previousPage = $page - 1;
$previousPage = ($previousPage < 1) ? 1: $previousPage;
// 下一頁
$nextPage = $page + 1;
$previousPage = ($previousPage > $totalPages) ? $totalPages : $previousPage;



## 資料庫查詢
$sth = $dbConnection->prepare($sql);
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">

<head>
  <title>小鴨鴨 - 首頁</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    input[type=checkbox] {
      width: 16px;
      height: 16px;
    }

    td {
      vertical-align: middle !important;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body class="pt-4">
  <div class="container">
    <form action="batchProcess.php" method="POST">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">小鴨鴨報表管理</h2>
          <hr>
          <?php if (MessageDeliver::checkMessage('error')) : // 錯誤訊息
          ?>
            <div class="alert alert-danger">
              <?php print MessageDeliver::getMessage('error') ?>
            </div>
          <?php elseif (MessageDeliver::checkMessage('warning')) : ?>
            <div class="alert alert-warning">
              <?php print MessageDeliver::getMessage('warning') ?>
            </div>
          <?php elseif (MessageDeliver::checkMessage('success')) : ?>
            <div class="alert alert-success">
              <?php print MessageDeliver::getMessage('success') ?>
            </div>
          <?php endif ?>
        </div>
      </div>
      <div class="row">
        <nav class="col-12">
          <a href="create.php" class="btn btn-outline-primary">新增資料</a>
          <a href="recover.php" class="btn btn-outline-secondary ml-2">資料庫復原</a>
          <a href="region.php" class="btn btn-outline-info ml-2">分區資料</a>
        </nav>
        <div class="col-12">
          <table class="table table-dark my-2 rounded text-center">
            <thead>
              <tr>
                <td>#</td>
                <td class="d-none d-md-table-cell">ID</td>
                <td>店名</td>
                <td>區域</td>
                <td class="d-none d-md-table-cell">收入</td>
                <td class="d-none d-md-table-cell">人數</td>
                <td>動作</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $row) : ?>
                <tr>
                  <td>
                    <input type="checkbox" name="selected[]" value="<?php print $row['ID'] ?>">
                  </td>
                  <td class="d-none d-md-table-cell">
                    <?php print $row['ID'] ?>
                  </td>
                  <td><?php print $row['storeName'] ?></td>
                  <td><?php print $row['area'] ?></td>
                  <td class="d-none d-md-table-cell"><?php print $row['money'] ?></td>
                  <td class="d-none d-md-table-cell"><?php print $row['people'] ?></td>
                  <td>
                    <a href="edit.php?ID=<?php print $row['ID'] ?>" class="btn btn-warning">修改</a>
                    <a href="delete.php?ID=<?php print $row['ID'] ?>" class="btn btn-danger single-delete">刪除</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="index.php?page=<?php print $previousPage ?>">上一頁</a></li>

              <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="page-item <?php if($page == $i) print 'active'?>"><a class="page-link" href="index.php?page=<?php print $i ?>"><?php print $i ?></a></li>
              <?php endfor ?>
              <li class="page-item"><a class="page-link" href="index.php?page=<?php print $nextPage ?>">下一頁</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="row">
        <nav class="col-12">
          <?php print CSRF::generateTokenWithInputHidden('csrfToken') ?>
          <input type="submit" class="btn btn-warning ml" name="submit" value="批次修改">
          <input type="submit" class="btn btn-danger ml-2 multi-delete" name="submit" value="批次刪除">
        </nav>
      </div>
    </form>
    <div class="row  align-items-center">
      <div class="col-12 mt-2 form-group">
        <form action="batchProcessCreate.php" method="post">
          <input type="submit" class="btn btn-primary mb-1" value="批次增加">
          <label for="batchCreate">資料 </label>
          <input type="number" class="form-control d-inline-block" style="width:70px;" id="batchCreate" name="batchCreate" value="3" min="1" max="20"> 筆
        </form>
      </div>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <!-- Optional JavaScript -->
  <script>
    $('.single-delete, .multi-delete').click(function() {
      if (!confirm("確定要刪除?")) {
        return false;
      }
    });
  </script>
</body>

</html>