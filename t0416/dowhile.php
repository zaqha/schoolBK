<?php
function dd($variable)
{
    echo'<pre>';
    //四種格式可選擇
    //die(var_export($variable));
    //var_dump($variable);
    //var_export($variable);
    print_r($variable);
    echo'</pre>';
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
<?php
// switch

$favcolor = "red";

// 裡加變數
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo"<br><hr>";
?>

<?php
$subject = "PHP";
switch($subject){
  case'PHP':
    echo"PHP";
  break;
  case'Java':
    echo"Java";
  break;
  case'JS':
    echo"JS";
  break;

}


echo"<br><hr>";

?>


<!-- 題目:
post form 

$chinese $english $math
input type text
same name score

$avg
A 90-100
B 80-89
C 70-79
D 60-69
E below 59
-->



<form action="./dowhile.php" method="post">
<p>
    <label for="chinese">chinese</label>
    <input type="text" name="score[]" id="chinese">
</p>
<p>
    <label for="math">math</label>
    <input type="text" name="score[]" id="math">
</p>
<p>
    <label for="english">english</label>
    <input type="text" name="score[]" id="english">
</p>

<p>
  <input type="submit" value="查詢">
</p>


<?php

$input = $_POST;

// $chinese => input['score'][0]
// $english => input['score'][1]
// $math => input['score'][2]

$sum = $input['score'][0] + $input['score'][1] + $input['score'][2];
$avg = $sum/count($input['score']);
$avg = round($avg,2)
dd($avg)
// dd($avg);

switch($avg){
  case ($avg >= 90 && $avg <=100):
    echo"A";
  break;
  case ($avg >= 80 && $avg <=89):
    echo"B";
  break;
  case ($avg >= 70 && $avg <=79):
    echo"C";
  break;
  case ($avg >= 60 && $avg <=69):
    echo"D";
  break;

  default:
    echo"E";
  break;

}








?>









<?php

// dowhile這個很少用

$sum = 0;
$x = 1;

  do { 
    $sum += $x;
    $x++;
  } while ($x <= 10);

  echo $sum;
  
  ?>
  
</body>
</html>