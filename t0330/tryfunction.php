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
echo'strlen字數<br><br>';
echo strlen("Hello");

echo'strtoupper大寫<br><br>';
echo strtoupper("Hello WORLD!");

echo'strtolower小寫<br><br>';
echo strtolower("Hello WORLD.");

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));


$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);


echo 'substr 切字串';
echo substr("Hello world",6);


echo 'substr_replace 字串取代';





// explode string => array
// implode array => string
// str_split 
// substr
// substr_replace
// trim 清除前後空白 半形
// ucfirst 首字大寫
// ucwords 每組字的首字大寫
// array_merge array合併
// array_sum array加總
// round 四捨五入





?>



</body>
</html>