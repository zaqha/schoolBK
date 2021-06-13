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
    for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br><br>";
    }

    echo"<br>";

    $number = 50;
    $addNumber = 5;
    for ($y=0; $y <=$number ; $y+=$addNumber) { 
        echo "$y".'<br>';
    };

    echo"練習 1+2+3...+10 total為?<br>";

    // for ($n=1; $n <=10 ; $n+=$add++) { 
    //     echo "$n".'<br>';
    // };


    // for( $x=1 ; $x<=10 ; ++$x ){ 
    //     $sum = $sum + $x ;
    // }echo "1加總至10的和為：" . $sum;

    $total = 0;
    for ($i=1; $i <= 10 ; $i++) {
        $total= $total + $i;
    }
    echo"$total"."<br>";

    echo"<br>練習 星星1<br>";
    

    // for($i=1; $i<=5; $i++) {
    // for($j=1; $j<=$i; $j++)
    // {
    // echo '$j';
    // }
    // echo '<br>';
    // }

    $input = 5 ; // 出現五行
    for($i=0; $i < $input; $i++) {
    //     echo"$i";}

        // no.1
        // $1 = 0

        // no.2
        // $1 = 1
            // $j = 0
            // $j = 1
        for($j=0; $j<=$i; $j++){
        echo $j;
        }
        echo '<br>';
        }

    echo"<br>練習 星星2<br>";
    for($i=0; $i<5; $i++) {
        for($j=0; $j<5; $j++)
        {
        echo '*';
        }
        echo '<br>';
        }

    

    echo"<br>練習 星星3<br>";
    // for($i=1; $i<=5; $i++) {
    //     for($j=5; $j>=$i; $j--)
    //     {
    //     echo '*';
    //     }
    //     echo '<br>';
    //     }

    $input=5;
    $tmp = $input;
    for ($i=0; $i < $input ; $i++){
        $tmp--;
        for($j=0; $j <= $tmp; $j++){
        echo$tmp;
        }
        echo"<br>";
    }
    

    echo"<br>練習 星星4<br>";
    // $s=5;  
    // // 行數
    // for($i=0 ; $i<$s ; $i++){
    //     // 空格
    //     for($j=$i ; $j<$s-1 ; $j++){            
    //     echo "&nbsp&nbsp";
    //     }
    //     for($k=0 ; $k< ($i*2-1) ; $k++){
    //     echo "*";
    //     }
    // echo "<br>";
    // }


    $input=5;  
    // 行數
    for($i=1 ; $i<$input ; $i++){
        // 空格
        for($j=$i ; $j<$input-1 ; $j++){            
        echo "&nbsp&nbsp";
        }
        for($k=0 ; $k< ($i*2-1) ; $k++){
        echo "*";
        }
    echo "<br>";
    }


    echo"<br>練習 星星5<br>";
    
        $s=9;      //宣告一個變數為列數
    for($i=0 ; $i<($s*2-1) ; $i++){
        if($i<$s){   //反向的判斷
        for($j=$i ; $j<($s-1) ; $j++){
            echo "&nbsp&nbsp";
        }
        for($k=0 ; $k<($i*2-1) ; $k++){
            echo "*";
            }
        }else{
        for($j=0 ; $j<($i-$s)+1 ; $j++){
            echo "&nbsp&nbsp";
        }
        $r=(($s*2-1)-$i)-1; //總列數減去目前第幾列再減去一列
        $starts=($r*2-1); //根據列數計算要印出的星星數
        for($k=0 ; $k<$starts ; $k++){
        echo "*";
        }
    }
    echo "<br>";
    }


    // 分上下半部
    $input=5;  
    // 行數
    for($i=1 ; $i<$input ; $i++){
        // 空格
        for($j=$i ; $j<$input-1 ; $j++){            
        echo "&nbsp&nbsp";
        }
        for($k=0 ; $k< ($i*2-1) ; $k++){
        echo "*";
        }
    echo "<br>";
    }

    // 下半部

    for($i=$input ; $i > 1;$i--){
        // 空格
        for($j=0 ; $j<=($input-$i) ; $j++){            
        echo "&nbsp&nbsp";
        }
        for ($k=((($i-1)*2)-1); $k >0 ; $k--){
        echo "*";
        }
    echo "<br>";
    }




    // 99乘法表
    
    for ($i = 1; $i <= 9; $i++) {
        for($j=1; $j<=9 ; $j++) {    
        // echo " $i &nbsp x &nbsp $j &nbsp = &nbsp" .$i*$j ."&nbsp&nbsp&nbsp";       
        $result = $i*$j;
        echo"$i*$j = $result"."&nbsp&nbsp&nbsp";
        }
        echo "<br>";
        }


    for ($i = 1; $i <= 9; $i++) {
        // str_pad($myString,length,補0,STR_PAD_LEFT往左邊補齊);
        for ($j=1; $j <=9; $j++) {
            $changeI = str_pad($i,2,0,STR_PAD_LEFT);
            $changej = str_pad($j,2,0,STR_PAD_LEFT);
            $result = $i*$j;
            $result = str_pad($j,2,0,STR_PAD_LEFT);
            echo "$changeI x $changej =". $result . "&nbsp&nbsp&nbsp&nbsp";
        }
        echo"<br>";
    }

echo "<br><hr>";

    for ($i = 1; $i <= 9; $i++) {
        // str_pad($myString,length,補0,STR_PAD_LEFT往左邊補齊);
        for ($j=1; $j <=9; $j++) {
            $changeI = str_pad($i,2,0,STR_PAD_LEFT);
            $changej = str_pad($j,2,0,STR_PAD_LEFT);
            $result = $i*$j;
            $result = str_pad($j,2,0,STR_PAD_LEFT);
            echo "$changeI x $changej =". $result . "&nbsp&nbsp&nbsp&nbsp";
        }
        echo"<br>";
    }

echo "<br><hr>";




echo "<table border='1px'>";
for ($i = 1; $i <= 9; $i++) {


    echo "<tr>";

    for ($j=1; $j <=9; $j++) {
        $changeI = str_pad($i,2,0,STR_PAD_LEFT);
        $changej = str_pad($j,2,0,STR_PAD_LEFT);
        $result = $i*$j;
        $result = str_pad($j,2,0,STR_PAD_LEFT);
        

        echo "<td>"."$changeI x $changej =". $result . "&nbsp&nbsp&nbsp&nbsp" ."</td>";
        
    }

    echo "</tr>";
}

echo"</table>"



    ?>
<br><br>





<table style="width:100%" border='1px'>
    <?php for ($i=1; $i<=9;$i++) :?>
        <tr>
            <?php for($j=1; $j<=9;$j++) :?>
                <?php
                    $changeI = str_pad($i,2,0,STR_PAD_LEFT);
                    $changej = str_pad($j,2,0,STR_PAD_LEFT);
                    $result = $i*$j;
                    $result = str_pad($j,2,0,STR_PAD_LEFT);
                    ?>
                    <td><?= "$changeI x $changej =". $result . "&nbsp&nbsp&nbsp&nbsp";?></td>
            <?php endfor;?>
        </tr>
        <?php endfor;?>
    </tr>
</table>







<?php
echo "<table border='1px'>\n";
// echo的換行
for ($i = 1; $i <= 9; $i++) {


    echo "<tr>";

    for ($j=1; $j <=9; $j++) {
        echo "<td>";
        $changeI = str_pad($i,2,0,STR_PAD_LEFT);
        $changej = str_pad($j,2,0,STR_PAD_LEFT);
        $result = $i*$j;
        $result = str_pad($j,2,0,STR_PAD_LEFT);
        
        echo "$changeI x $changej =". $result . "&nbsp&nbsp&nbsp&nbsp" ;
        echo "</td>";
        
    }

    echo "</tr>";
}

echo"</table>";


?>




<!-- practice -->
<hr>
<table border='2px'>
    <?php for ($i=1; $i<=9; $i++) :?>
    <tr>
        <?php for ($j=1;$j<=9; $j++) :?>
            <?php $result = 'hello';?>
            <td><?php echo $result;?></td>
        <?php endfor ;?>
    </tr>
    <?php endfor;?>

</table>











</body>

</html>