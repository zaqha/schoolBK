<?php include '../common/dd.php';?>

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
echo'【條件 外掛用 if else】';
    $t = date("H");

    if ($t < "20") {
    echo "Have a good day!";
    };

echo'<br><br><hr>';

echo'【多重條件 迴圈】';
$t = 15;

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
};

echo'<br><br>';

$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";


echo'<br><br>';

$t=15;

echo 'if elseif要放condition，else不用放condition';

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
};

echo'<br><br>';

if($t > 200);
echo ">10000";

echo'<br><br><hr>';

// 分數 && ||
// A 91-100 
// B 81-90 
// C 71-80 
// D 61-70 
// E 60以下


$g = 55;

if ($g > "90") {
    echo "A";
  } elseif ($g > "80") {
    echo "B";
} elseif ($g > "70") {
    echo "C";
} elseif ($g > "60") {
    echo "D";
  } else {
    echo "E";
  };

  echo'<br><br><hr>';
  

  $score = 85;
  $grade = '';

  if ($score > "90") {
    $grade = "A";
  } elseif ( $score >= 81 && $score <=90 ) {
    $grade = "B";
} elseif ($score >= 71 && $score <=80) {
    $grade = "C";
} elseif ($score >= 61 && $score <=70) {
    $grade = "D";
  } else {
    $grade = "E";
  };

  echo'<br><br><hr>';

//   ABCDE 建立 array
//   區間 建立 array

$scoreArr = [
     [1,91,100],
     [2,81,90],
     [3,71,80],
     [4,61,70],
     [5,0,60]
];

dd($scoreArr);

$arr = [
    'a' => [ 'id'=> $score[0][0], 'start' => $score[0][1], 'end' => $score[0][2]],

];


echo $arr['a']['start'];
echo $arr['a']['end'];


$grades = [
    [1,'A'],
    [2,'B'],
    [3,'C'],
    [4,'D'],
    [5,'E']
];

dd($grades);
echo'<br><br><hr>';





?>

</body>
</html>