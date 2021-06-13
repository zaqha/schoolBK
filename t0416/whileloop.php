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
  <title>whileloop</title>
</head>
<body>
<?php  

// 練習一 1+...+10
$x = 1;
$sum = 0;
// 宣告
while($x <= 10) {
  // echo "The number is: $x <br>";
  $sum += $x;
  $x++;
} 
echo '$sum ='.$sum."<br>"; 


// 練習二 while 1-49 樂透 6不能重複數字

$lottery = [];
// 超過6就不要再做
while(count($lottery)<6){
  // 範圍
  $randomNum = rand(1,49);
  // 不能重複
  if(in_array($randomNum,$lottery) == false ){
    $lottery[] = $randomNum;
  }
}
dd($lottery)

?>  

<!-- 練習三
指定開獎號碼 -->


<form action="./whileloop.php" method="post">
<p>
    <label for="number">開獎數 6-10</label>
    <input type="number" name="number" id="number" min="6" max="10">
</p>
<p>
<input type="submit" value="submit" name="submit">
</p>

</form>

<?php
  $input = $_POST['number'];
  if(!empty($input)){
    // empty抓空值的方法
    echo $input;
  }

  $lottery = [];
  while(count($lottery)<$input){
    // 範圍
    $randomNum = rand(1,49);
    // 不能重複
    if(in_array($randomNum,$lottery) == false ){
      $lottery[] = $randomNum;
    }
  }
  dd($lottery)


?>




</body>
</html>