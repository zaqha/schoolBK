<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 參考資料看這個
https://www.w3schools.com/php/php_operators.asp -->



<?php
echo 'Hello World';
?>
<br>
<?php
$x = 10;  
$y = 6;
echo $x + $y;
?> 
<br>
<!-- x += y	same as x = x + y -->
<?php
$x = 10;  
$x += 6;
echo $x;
?> 
<br>
<!-- x -= y same as	x = x - y -->
<?php
$x = 50;
$x -= 30;

echo $x;
?>  
<br>
<!-- x *= y same as	x = x * y -->
<?php
$x = 5;
$x *= 6;

echo $x;
?>  
<br>
<!-- x /= y same as	x = x / y -->
<?php
$x = 10;
$x /= 5;

echo $x;
?>  

<br>
<!-- x %= y	same as x = x % y -->
<?php
$x = 15;
$x %= 4;

echo $x;
?>  
<br>

<?php
//命名

$oldPrice = "1"; //原始價格
$net = 1; //利潤

$totalPrice= $oldPrice + $net; //總金額
echo' $totalPrice + $net = ' . $totalPrice . "<br>";
var_dump($totalPrice)."<br>";

?>
<br>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y) ."<br>"; // ==相等 returns true because values are equal
echo "<br>";
var_dump($x === $y) ."<br>"; // === 全等於 returns false because types are not equal
echo "<br>";
var_dump($x != $y); // != 不等於 returns false because values are equal
echo "<br>";
?> 

<br>
<hr>

<!-- Q
國文
英文
數學
總分
平均 計算到小數點第二位
比較 平均分數是否及格 -->

<?php

$Chinese = 66;
$English = 55;
$Math = 88;
$Pass = 60;

$total = $Chinese + $English + $Math;
$avg = round($total / 3 , 2);


echo "國文 : " . $Chinese ."分<br>";
echo "英文 : " . $English ."分<br>";
echo "數學 : " . $Math ."分<br>";
echo' 總分 ' . $total ."分<br>";
echo' 平均 ' . $avg ."分<br>";
var_dump($avg == $Pass) ; 
echo "<br>";
var_dump($avg > 60);


?>

<hr>

<!-- 邏輯運算子 -->
<?php
$data = 100;  
$result = ($data>0) && ($data<50);
var_dump($result);

echo "<br>";

$data = 100;  
$result = ($data>0) || ($data<50);
var_dump($result);

echo "<br>";

$x = 100;  
$y = 50;
$result = ($x == 100 && $y == 50);
var_dump($result);

?>  
<hr>

<!-- 遞增遞減  
++$x $x++
-->
<?php
$x = 10;
$y = $x++;
// 先丟值後++ 很少用

echo'$x++';
echo'<br>';
echo'$x = ' .$x;
echo'<br>';
echo'$y = ' .$y;
echo'<br>';

$x = 10;
$y = ++$x;
// 先做++再丟值

echo '++$x';
echo'<br>';
echo '$x = ' .$x;
echo'<br>';
echo '$y = ' . $y;
echo'<br>';






?>

</body>

</html>




