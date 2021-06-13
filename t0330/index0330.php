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

    // $x++ $++x
    $x = 10;
    // $x = $x - 1 => $x++
    $y = $x++;
    // $y = $x + 1;

    echo '$x ='.$x."<br>";
    echo '$y ='.$y."<br>";


    echo'<br><br>';
    $testArr = [
        ['1','apple','1111111','AAAAAAA',100],
        ['2','book','4463143','CCCCCCCC',200],
        ['3','cat','464606','JRＲＲＲ',300],
    ];
    dd($testArr);

    echo'<br><br>';

    echo'名字=>地址<br>';
    $newArr = [
        $testArr[0][1] => ['address' => $testArr[0][3],'money'=>$testArr[0][4]],
        "book" => ['address' => $testArr[1][3],'money'=>$testArr[1][4]],
        "cat" => ['address' => $testArr[2][3],'money'=>$testArr[2][4]],
    ];
    dd($newArr);

    echo $newArr['apple']['address'];
    echo'<br><br>';
    

    echo'名字=>金額<br>';
    echo $newArr['apple']['money'];








    ?>
</body>
</html>