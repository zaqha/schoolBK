<?php
// function sum 
// input number1
// input number1
// 判斷$number1> $number2
// number1+....$number2

// 計算出1+....$number sum

$tmp=0; //做交換變數
function sumNum1Num2(int $number1, int $number2){
  if($number2>$number1){

  }elseif($number2<$number1){
    $tmp = $number1;
    $number1 = $number2;
    $number2 = $tmp;
  }else{
    return"請輸入不同number";
  }
  $sum=0;
  for($i=$number1; $i<=$number2 ; $i++){
    $sum = $i + $sum;
    //也可以寫 $sum+=$i;
  }
  return $sum;
}
$result= sumNum1Num2(5,2);
echo "result=".$result ."<br>";

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
  
</body>
</html>