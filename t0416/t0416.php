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

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($age as $key => $value) {
//   if($value== "35"){
//     continue;
//   }
//  // continue 跳過迴圈的循環剩餘程式碼

//   echo '$key => '.$key ',$value = > '.$value ."<br>"
// }



?>



<?php



$data = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];

dd($data);

foreach ($data as $key => $value) {
  foreach ($value as $keySec => $valueSec) {
    echo $valueSec."<br>";
  }
}

// 練習一
// $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");


// 練習二
// a => 1
// b => 1


$data2 = [
  ['a'=> 1, 'b'=>2, 'c'=> 3],
  ['d'=>4,'e'=>5,'f'=>6],
  ['g'=>7,'h'=>8,'i'=>9]
];

foreach ($data2 as $key => $value) {
  foreach ($value as $keySec => $valueSec) {
    echo '$key =>'.$key.', $keySec =>'.$keySec.', $keySec =>'."$valueSec"."<br>";
  }
}



// 練習三
// [name => amy , chinese => 100, english=>100, math=>80 ]
// [name => bob , chinese => 80, english=>90, math=>70 ]
// [name => cat , chinese => 70, english=>80, math=>60 ]
// sumChinese avgChinese

$score = [
  ['name' => 'amy' , 'chinese' => 90, 'english'=>100, 'math'=>80 ],
  ['name' => 'bob' , 'chinese' => 80, 'english'=>90, 'math'=>70 ],
  ['name' => 'cat' , 'chinese' => 70, 'english'=>80, 'math'=>60 ]
];

dd($score);

$sumChinese = 0;
// 初始值，宣告在外面
foreach ($score as $key => $value) {
  foreach($value as $keySec => $valueSec){
  // echo "$keySec=>$valueSec"."<br>";
    if($keySec=='chinese'){
        if ($valueSec >= 100) {
          echo"continue"
          // 結果150不會計算chinese
          // echo"break"答案0
        }


      $sumChinese += $valueSec;

    }
  }
  echo"<br>"
}

echo '$sumChinese =>'.$sumChinese;


?>





</body>
</html>