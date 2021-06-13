<?php
// database 連線
require('./common/db.php');
// CSRF 驗證
// require('class/CSRF.class.php');
// SESSION 訊息傳遞
// require('class/Message.class.php');
// 頁碼分頁
require('class/Paginator.class.php');
// 頁碼寬度(單數)
define("PAGE_COUNT", 5);
// 每頁顯示數量
define("DISPLAYROWS", 10);
// 定義可搜尋的內容
define("ALLOW_SEARCH_TYPE", ['storeName', 'area', 'money', 'people']);

### 將網址查詢轉成陣列 ###
$urlParams = $_GET; // 網址參數

// 設置搜尋旗標
$isSearch = false;

### 取得頁碼 
$currentPage = (isset($urlParams['page'])) ? intval($urlParams['page']) : 1;

### 排序順序
$ORDERBY = ["ASC", "DESC"];
$COLUMNS = ["ID", "storeName", "area", "money", "people"];

## ORDER BY columnIndex 參數處理
// columnIndex 參數，應該為 0 ~ 4
// 若沒有預設值，給予 0
if (!isset($urlParams['columnIndex'])) {
  $columnIndex = $COLUMNS[0];
} else { // 有值的話，要確認是否在限制內
  $columnIndex = (in_array($urlParams['columnIndex'], $COLUMNS)) ? $urlParams['columnIndex'] : $COLUMNS[0];
}

## ORDER BY orderIndex 參數處理
// orderIndex 參數，應該為 0 或 1
// 若沒有預設值，給予 0
if (!isset($urlParams['orderIndex'])) {
  $orderIndex = 0;
} else { // 有值的話，要確認是否為 0 或 1，
  $orderIndex = ($urlParams['orderIndex'] == 0) ? 0 : 1;
}

// 將 orderIndex 轉換為 ASC 或 DESC
$order = $ORDERBY[$orderIndex];
## 反向排序的參數
$reverseOrderIndex = ($orderIndex == 0) ? 1 : 0;

// 搜尋語法
// SELECT * from `crud` where money like '100000';
// SELECT * from `crud` where money > 100000;
if (isset($urlParams['searchSubmit']) && $urlParams['searchSubmit'] == '搜尋') {
  $isSearch = true; // 設置旗標

  ## 進行內容檢查 seachMethod
  ## 如果 Method 不再 ALLOW_SEARCH_TYPE 裡面，顯示錯誤訊息終止程式
  if (!in_array($urlParams['searchType'], ALLOW_SEARCH_TYPE)) {
    MessageDeliver::putMessage('error', '錯誤的查詢內容');
    header("Location:index.php");
    exit();
  }

  ## 進行搜尋的 seachMethod searchText 檢查
  $sqlMethod = ''; // SQL 用的 Method 內容
  $sqlText = ''; // SQL 用的 Text 內容
  switch ($urlParams['searchMethod']) {  // 檢查 Method
    case 'equal': // 包含
      $sqlMethod = 'like';
      if ($urlParams['searchType'] == 'storeName' || $urlParams['searchType'] == 'area') {
        $sqlText = "%" . $urlParams['searchText'] . "%"; // 如果是搜尋 storeName 欄位，兩邊加上 %
      } else {
        $sqlText = $urlParams['searchText']; // 其他欄位用精準搜尋(不加 %)
      }
      break;
    case 'larger': // 大於
      $sqlMethod = '>=';
      break;
    case 'less': // 小於
      $sqlMethod = '<=';
      break;
    default:
      // 搜尋的 method 都不在
      MessageDeliver::putMessage('error', '錯誤的查詢內容');
      header("Location:index.php");
      exit();
  }

  ### 設定查詢 SQL
  $sql = sprintf(
    // select * from TABLENAME where COLUMN_NAME like 'SEARCH_TEXT' order by COLUMN_NAME ASC/DESC limit START_POSITION, LENGTH
    "select * from `stores` where %s %s ? order by %s %s limit %s, %s",
    $urlParams['searchType'], //查詢欄位
    $sqlMethod, // 查詢算式
    $columnIndex, // 排序欄位
    $order, // 排序順序
    (($currentPage - 1) * DISPLAYROWS) + 1, // 資料比數
    DISPLAYROWS // 每頁呈現的資料量
  );


  # 取得查詢結果
  $sth = $conn->prepare($sql);
  $sth->execute([$sqlText]);
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);


  ## 取得資料總筆數(用於分頁用)
  # 設定 SQL 語法
  $sqlForRowCount = sprintf(
    "select count(*) as count from `stores` where %s %s ?",
    $urlParams['searchType'], //查詢欄位
    $sqlMethod, // 查詢算式
  );
  ## 設定 $rowCount，取得資料總比數
  $sthForRowCount = $conn->prepare($sqlForRowCount);
  $sthForRowCount->execute([$sqlText]);
  $resultForRowCount = $sthForRowCount->fetch();
  $rowCount = (isset($resultForRowCount['count']) && $resultForRowCount) ? $resultForRowCount['count'] : 0;


} else { ### 設定一般 SQL
  $sql = sprintf(
    "select * from `stores` order by %s %s limit %s, %s",
    $columnIndex,
    $order,
    (($currentPage - 1) * DISPLAYROWS) + 1,
    DISPLAYROWS
  );
  # 取得結果
  $sth = $conn->prepare($sql);
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);

  // 資料筆數 SQL
  $sqlForRowCount = sprintf("select count(*) as count from `stores`");
  $sthForRowCount = $conn->prepare($sqlForRowCount);
  $sthForRowCount->execute();
  $resultForRowCount = $sthForRowCount->fetch();
  $rowCount = (isset($resultForRowCount['count']) && $resultForRowCount) ? $resultForRowCount['count'] : 0;
}

## 宣告分頁物件
$paginator = new Paginator($rowCount, DISPLAYROWS, $currentPage); // 產生分頁物件並初始化

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

    .searchGrouup {
      width: 370px !important;
      flex: 0 0 auto !important;
    }

    .searchSelection {
      width: 90px !important;
      flex: 0 0 auto !important;
    }

    .searchMethod {
      width: 90px !important;
      flex: 0 0 auto !important;
    }

    .searchText {
      width: 130px !important;
      flex: 0 0 auto !important;
    }
  </style>
</head>

<body class="pt-4">
  <div class="container">

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
        <form action="index.php" method="get" class="float-md-right mt-2 mt-md-0">
          <div class="input-group mb-3 searchGrouup">
            <select class="custom-select searchSelection " name="searchType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <option value="storeName" <?php print (isset($urlParams['searchType']) && $urlParams['searchType'] == 'storeName') ? 'selected' : '' ?>>店名</option>
              <option value="area" <?php print (isset($urlParams['searchType']) && $urlParams['searchType'] == 'area') ? 'selected' : '' ?>>地區</option>
              <option value="money" <?php print (isset($urlParams['searchType']) && $urlParams['searchType'] == 'money') ? 'selected' : '' ?>>收入</option>
              <option value="people" <?php print (isset($urlParams['searchType']) && $urlParams['searchType'] == 'people') ? 'selected' : '' ?>>人數</option>
            </select>
            <select class="custom-select searchMethod" name="searchMethod">
              <option value="equal" <?php print (isset($urlParams['searchMethod']) && $urlParams['searchMethod'] == 'equal') ? 'selected' : '' ?>>包含</option>
              <option value="larger" <?php print (isset($urlParams['searchMethod']) && $urlParams['searchMethod'] == 'larger') ? 'selected' : '' ?>>大於</option>
              <option value="less" <?php print (isset($urlParams['searchMethod']) && $urlParams['searchMethod'] == 'less') ? 'selected' : '' ?>>小於</option>
            </select>
            <input type="search" name="searchText" class="form-control searchText" placeholder="搜尋內容" value="<?php print (isset($urlParams['searchText'])) ? htmlspecialchars($urlParams['searchText']) : '' ?>">
            <div class="input-group-append">
              <input class="btn btn-secondary" type="submit" value="搜尋" name="searchSubmit">
            </div>
          </div>
        </form>
      </nav>

      <div class="col-12">
        <form action="batchProcess.php" method="POST">
          <table class="table table-dark my-2 rounded text-center">
            <thead>
              <tr>
                <td colspan="7" class="text-left ">
                  <?php
                  if ($isSearch) {
                    printf("搜尋 \"%s\" 的結果：%s 筆資料", htmlspecialchars($urlParams['searchText'], ENT_QUOTES), $rowCount);
                  } else {
                    printf("當前資料：%s 筆資料", htmlspecialchars($rowCount));
                  }
                  ?>
                  <a href="index.php" class="btn btn-sm btn-outline-light float-right">清空搜尋</a>
                </td>
              </tr>
            </thead>
            <thead>
              <tr>
                <td>#</td>
                <?php
                ### 設定個標題的排序連結
                $theadUrlLink = $urlParams;
                unset($theadUrlLink['columnIndex']); // 移除columnIndex
                unset($theadUrlLink['orderIndex']); // 移除 orderIndex
                ?>
                <td class="d-none d-md-table-cell"><a class="text-warning" href="<?php printf("index.php?columnIndex=ID&orderIndex=%s&%s", $reverseOrderIndex, http_build_query($theadUrlLink)) ?>">ID </a></td>
                <td><a class="text-warning" href="<?php printf("index.php?columnIndex=storeName&orderIndex=%s&%s", $reverseOrderIndex, http_build_query($theadUrlLink)) ?>">店名</td>
                <td><a class="text-warning" href="<?php printf("index.php?columnIndex=area&orderIndex=%s&%s", $reverseOrderIndex, http_build_query($theadUrlLink)) ?>">區域</td>
                <td class="d-none d-md-table-cell"><a class="text-warning" href="<?php printf("index.php?columnIndex=money&orderIndex=%s&%s", $reverseOrderIndex, http_build_query($theadUrlLink)) ?>">收入</td>
                <td class="d-none d-md-table-cell"><a class="text-warning" href="<?php printf("index.php?columnIndex=people&orderIndex=%s&%s", $reverseOrderIndex, http_build_query($theadUrlLink)) ?>">人數</td>
                <td>動作</td>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($result)) : ?>
                <tr>
                  <td colspan="7">無資料</td>
                </tr>
              <?php endif ?>
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

          <nav aria-label="navigation" class="float-right">
            <ul class="pagination">
              <?php
              ### 設定個頁面的排序連結
              $paginationLink = $urlParams;
              unset($paginationLink['page']);

              ?>
              <!-- 是否有上一頁 -->
              <li class="page-item <?php print ($currentPage == 1) ? 'active' : '' ?>">
                <a class="page-link" href="<?php printf("index.php?%s&page=%s", http_build_query($paginationLink), $paginator->getFirstPage()) ?>">1</a>
              </li>
              <!-- 印出 ...  -->
              <?php if ($currentPage > (intval(PAGE_COUNT / 2) + 2) && $paginator->getLastPage() > 1) : ?>
                <li class="page-item"><a class="page-link">...</a></li>
              <?php endif ?>
              <!-- 印出中間的頁碼 -->
              <?php for ($i = ($currentPage - intval(PAGE_COUNT / 2)); $i <= ($currentPage + intval(PAGE_COUNT / 2)); $i++) : ?>
                <?php if ($i < 2 || $i > ($paginator->getTotalPages() - 1)) continue ?>
                <li class=" page-item <?php print ($i == $paginator->getCurrentPage()) ? 'active' : '' ?>">
                  <a class="page-link" href="<?php printf("index.php?%s&page=%s", http_build_query($paginationLink), $i) ?>">
                    <?php print $i ?>
                  </a>
                </li>
                <?php if ($i < 1) continue ?>
              <?php endfor ?>
              <!-- 印出 ...  -->
              <?php if ($currentPage < ($paginator->getLastPage() - (intval(PAGE_COUNT / 2) + 1))) : ?>
                <li class="page-item"><a class="page-link">...</a></li>
              <?php endif ?>
              <!-- 是否有最終頁 -->
              <?php if ($paginator->getLastPage() > 1) : ?>
                <li class="page-item <?php print ($currentPage == $paginator->getLastPage()) ? 'active' : '' ?>">
                  <a class="page-link" href="<?php printf("index.php?%s&page=%s", http_build_query($paginationLink), $paginator->getLastPage()) ?>"><?php print $paginator->getLastPage() ?></a>
                </li>
              <?php endif ?>
            </ul>
          </nav>
          <?php print CSRF::generateTokenWithInputHidden('csrfToken') ?>
          <input type="submit" class="btn btn-warning ml" name="submit" value="批次修改">
          <input type="submit" class="btn btn-danger ml-2 multi-delete" name="submit" value="批次刪除">
        </form>
        <div class="col-12 form-group p-0 mt-2">
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