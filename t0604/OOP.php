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
<?php
include "./class.php";
// 練習OOP
// class長方形
// $length 長 
// $width 寬
// $getArea 面積
// $getPeri 周長





// 建立obj (10,20)
$box1= new Square(10,20);
echo $box1->getArea();
echo $box1->getPeri();

// 建立obj (20,40)
$box2= new Square(20,40);


//建立(20-50) 當數值為負數 抓原本預設值
$box3= new Square(20,-40);
dd($box3);
echo $box3->getArea();

//統計有幾個obj
echo "new object count =>" .Square::$count."<br>";

?>
