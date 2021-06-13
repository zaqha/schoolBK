<?php
//  時間函數參考 https://www.w3schools.com/php/func_date_date.asp
// mktime https://www.w3schools.com/php/func_date_mktime.asp

//now  empty:如果值是0的話就去抓GET
if (empty($_GET['year']) && empty($_GET['month'])) {
  $now = time(); //現在時間timestamp
  // var_dump(time());
  $month = date('m', $now);
  $year = date('Y', $now);
  // echo $month . '<br>';
  // echo $year . '<br>';
} else {
  $month = $_GET['month'];
  $year = $_GET['year'];
}




// $year = $_GET['year'];
// echo $year;

// $year = $_GET['month'];
// echo $month;


// $year = 2021;
// $month = 04;

// 先用mktime抓出本月第一天


// $now = time() 找現在時間戳記
$firstDayMonth = mktime(0, 0, 0, $month, 1, $year);
// echo $firstDayMonth;

// 設定本月有幾天 t是月有幾天的函數 t-The number of days in the given month
$days = date('t', $firstDayMonth);
// var_dump($days);

// 本月第一天是星期幾 w-A numeric representation of the day (0 for Sunday, 6 for Saturday)

$firstDayWeek = date('w', $firstDayMonth);
// var_dump($firstDayWeek);


if ($month == 1) {
  $preYear = $year - 1;
  $preMonth = 12;
} else {
  $preYear = $year;
  $preMonth =  $month - 1;
}

if ($month == 12) {
  $nextYear = $year + 1;
  $nextMonth = 1;
} else {
  $nextYear = $year;
  $nextMonth =  $month + 1;
}

//格言arr
$strArr = [
  "人生在世，應該在芬芳別人的同時美麗自己。",
  "人生是一條沒有回程的單行線，上帝不會給你一張返程的票。",
  "快樂在滿足中求，煩惱多從欲中來。",
  "我們心中的恐懼，永遠比真正的危險巨大的多。",
  "幸福不在得的多，而在計較的少。",
  "人生多一份感恩，就多一份美化。",
  "經營自己的長處，能使你人生增值；經營你的短處，能使你人生貶值。",
  "把事情變復雜很簡單，把事情變簡單很復雜。",
  "真正的財富是一種思維方式，而不是一個月收入數位。",
  "誰若遊戲人生，他就一事無成；誰不主宰自己，永遠是一個奴隸。",
  "一個人的快樂，不是因為他擁有的多，而是因為他計較的少。",
  "前往偉大的顛峰之路，必定崎嶇。",
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="time.css">
</head>

<body>
  <div class="in">
    <div class="square">

      <div class="r2">
        <div class="r">植<br>曆</div>

      </div>

    </div>
    <h1>Flora Calender</h1>
    <?php
    //This will get an array of all the gif, jpg and png images in a folder 
    $img_array = glob("./photo/*.{gif,jpg,png}", GLOB_BRACE);
    //Pick a random image from the array 
    $img = array_rand($img_array);
    //Display the image on the page 

    ?>

    <nav class="img"><?= '<img alt="' . $img_array[$img] . '" src="' . $img_array[$img] . '" / >'; ?></nav>

    <?php
    $changeMonth = str_pad($month, 2, "0", STR_PAD_LEFT);

    ?>
    <h3><?= $year . "&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;" . $changeMonth ?></h3>
    <div class="box">
      <!-- previous -->
      <a href="./time.php?year=<?= $preYear; ?>&month=<?= $preMonth; ?>">◀&nbspPRE</a>
      <!-- now -->
      <a href="./time.php">NOW</a>
      <!-- nex -->
      <a href="./time.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">NEXT&nbsp▶</a>
    </div>
    <table>
      <tr>
        <td class="dayV">星期日</td>
        <td class="day">星期一</td>
        <td class="day">星期二</td>
        <td class="day">星期三</td>
        <td class="day">星期四</td>
        <td class="day">星期五</td>
        <td class="dayV">星期六</td>
      </tr>
      <?php for ($i = 1; $i <= 6; $i++) : ?>
        <tr class="inside">
          <?php
          for ($j = 1; $j <= 7; $j++) {
            $dayStr = (($i - 1) * 7 + $j) - $firstDayWeek; //每個格子的日期
            if ($i == 1) { //判斷1st Row處理第一天
              if ($dayStr > 0) {
                //日期為1號以後會顯示
                // today 
                if ($dayStr == date('d') && $month == date('m')) {
                  echo "<td class='today' >$dayStr</td>";
                } else {
                  // the other days
                  echo "<td>$dayStr</td>";
                }
              } else {
                //dayStr 0以下 該格無資料
                echo "<td></td>";
              }
            } else {
              if ($dayStr <= $days) {
                if ($dayStr == date('d') && $month == date('m')) {
                  echo "<td class='today' >$dayStr</td>";
                } else {
                  // the other days
                  echo "<td>$dayStr</td>";
                }
              } else {
                if ($j == 1) {
                  break;
                }
                echo "<td></td>";
              }
            }
          }
          ?>
        </tr>
      <?php endfor; ?>
      <tr class="outside">
        <td class="motto" colspan="7"><?= $strArr[$month - 1]; ?></td>
      </tr>
    </table>
    <br>
    <div class="bottom"><br></div>
    <br><br>
  </div>
</body>

</html>