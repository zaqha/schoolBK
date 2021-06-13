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

echo "Array 參考看這邊 https://www.w3schools.com/php/php_arrays.asp";
echo'<br><br>';
// 宣告
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo'<br><br>';
$cars = ["aaa", "bbb","ccc","ddd"];
echo $cars[3];

echo'<br><br>';

echo '$cars[0] = ' . $cars[0] ."<br>";
echo '$cars[1] = ' . $cars[1] ."<br>";
echo '$cars[2] = ' . $cars[2] ."<br>";
echo'<br><br>';



echo "var_dump()";
var_dump($cars);
echo'<br><br>';

echo"print_r()";
print_r($cars);
echo'<br><br>';

echo"dd()";
dd($cars);
echo'<br><br>';



?>
<hr>

<!-- 關聯式 -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo'<br>';
$testArray = ["aaa" => 111, "bbb" => 222, "ccc" => 333];
dd($age);
dd($testArray);

echo "<hr>";

// 建立 index array
// a1-a10

$firstArray = array("a1","a2","a3","a4","a5","a6","a7","a8","a9","a10");
dd($firstArray);
echo'<br>';


$indexArr = [
    'A01',
    'A02',
    'A03',
    'A04',
    'A05',
    'A06',
    'A07',
    'A08',
    'A09',
    'A10',
];

dd($indexArr);

// 建立 associative array
// a01 =>100
// a10 => 1000

$assocArr = [
    'A01' => 100,
    'A02' => 200,
    'A03' => 300,
    'A04' => 400,
    'A05' => 500,
    'A06' => 600,
    'A07' => 700,
    'A08' => 800,
    'A09' => 900,
    'A10' => 1000,
];

dd($assocArr);

?>

<hr>

<?php
// 練習一
echo "【練習一】";
$myArray = [
    'Apple',
    'Book',
    'Cat',
];

dd($myArray);
echo'<br>';

// 練習二
echo "【練習二】";

$testArray = [1,3,5,7,9];
$tmptestArray = $testArray;

dd($testArray);
echo'<br>';
// 排序由小到大
sort($testArray);
dd($testArray);
// 排序由大到小
rsort($tmptestArray);
dd($tmptestArray);

echo'<br>';


// 練習三
echo "【練習三】";
echo'<br>';
$dicArray = [
    "worda" => 'apple',
    "wordb" => 'book',
    "wordc" => 'cat',
];

// worda 結果 apple
$input = 'worda';
echo 'dicArray[worda] = ' . $dicArray[$input] ."<br>";

// WORDB 結果 book
// echo 'WORDB = ' . $dicArray["wordb"] ."<br>";
$input = "WORDB";
$newinput = strtolower ($input);
echo 'dicArray[WORDB] =' . $dicArray[$newinput] ."<br>";


// echo wordC結果 Cat
$input = "wordC";
$newinput = strtolower ($input);
echo 'dicArray[wordC] = ' . $dicArray[$newinput] ."<br>";
echo'<br>';


// 練習四
echo "【練習四】";
// array_multi
$multiArr = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
];

dd($multiArr);

echo $multiArr[0][0].'<br>';
echo $multiArr[0][1].'<br>';
echo $multiArr[0][2].'<br>';
echo $multiArr[1][0].'<br>';
echo $multiArr[1][1].'<br>';
echo $multiArr[1][2].'<br>';
echo $multiArr[2][0].'<br>';
echo $multiArr[2][1].'<br>';
echo $multiArr[2][2].'<br>';

echo'<br><br>';

$dicMArry = [
    ['apple',100,1000],
    ['book',200,2000],
    ['cat',300,3000],
];

echo $dicMArry[0][0].'<br>';
echo $dicMArry[0][1].'<br>';
echo $dicMArry[0][2].'<br>';
echo $dicMArry[1][0].'<br>';
echo $dicMArry[1][1].'<br>';
echo $dicMArry[1][2].'<br>';
echo $dicMArry[2][0].'<br>';
echo $dicMArry[2][1].'<br>';
echo $dicMArry[2][2].'<br>';

echo'<br><br>';
echo'練習4-2<br><br>';

$newdicMArry = [
    $dicMArry[0][0] => ['buy'=> $dicMArry[0][1],'sell'=> $dicMArry[0][2]],
    $dicMArry[1][0] => ['buy'=> $dicMArry[1][1],'sell'=> $dicMArry[1][2]],
    $dicMArry[2][0] => ['buy'=> $dicMArry[2][1],'sell'=> $dicMArry[2][2]],
];




dd($newdicMArry);

echo $newdicMArry['apple']['buy'].'<br>';
echo $newdicMArry['apple']['sell'];

echo'<br><br>';

echo'練習4-3<br><br>';
//     ['num01','國100','英80','數90'],
//     ['num02','國70','英60','數50'],
//     ['num03','國40','英30','數20'],

// $grades = [
//     ['num01',100,80,90],
//     ['num02',70,60,50],
//     ['num03',40,30,20],
// ];

// echo $grades[0][0].'<br>';

// $student = [
//     $grades[0][0] => ['chinese'=> $grades[0][1]],
//     $grades[1][0] => ['chinese'=> $grades[1][1]],
//     $grades[2][0] => ['chinese'=> $grades[2][1]],
// ];

$student =[
    "num01" => ["chinese"=>100, "english" => 80, "math" => 90],
    "num02" => ["chinese"=>70, "english" => 60, "math" => 50],
    "num03" => ["chinese"=>40, "english" => 30, "math" => 20],
];



dd($student).'<br>';
echo $student['num01']['chinese'].'<br>';
var_dump($student);
echo'<br><br>';


echo'<br>練習4-4<br><br>';




?>

</body>
</html>