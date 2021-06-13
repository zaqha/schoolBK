<?php 
            $strArr = [
                    "The biggest drawback of mediocre people is that they often feel better than others.",
                    "Tell you your faults of a friend is a great deal of trust and tell him his faults is greater trust.",
                    "The biggest drawback of mediocre people is that they often feel better than others.",
                    "Tell you your faults of a friend is a great deal of trust and tell him his faults is greater trust.",
                    "The biggest drawback of mediocre people is that they often feel better than others.",
                    "Tell you your faults of a friend is a great deal of trust and tell him his faults is greater trust.",
                    "The biggest drawback of mediocre people is that they often feel better than others.",
                    "Tell you your faults of a friend is a great deal of trust and tell him his faults is greater trust.",
                    "The biggest drawback of mediocre people is that they often feel better than others.",
                    "Tell you your faults of a friend is a great deal of trust and tell him his faults is greater trust.",
                    "The biggest drawback of mediocre people is that they often feel better than others.",
                    "Tell you your faults of a friend is a great deal of trust and tell him his faults is greater trust."
            ];

            /*  
                date(format, timestamp)
                Y - A four digit representation of a year
                m - A numeric representation of a month (from 01 to 12)
                w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
                t - The number of days in the given month

                mktime(hour, minute, second, month, day, year, is_dst)

                $dayStr = (($i-1)*7+$j) - $firstDayWeek;
            */

                //now
                if(empty($_GET['year']) && empty($_GET['month'])){
                    $now = time(); //現在時間timestamp
                    $year = date('Y',$now);
                    $month = date('m',$now);
                }else{
                    $month = $_GET['month'];
                    $year = $_GET['year'];
                }
                

                //１．get year
                // $year = $_GET['year'];
                // echo $year;
                // echo "<br>";

                //get month
                // $month = $_GET['month'];
                // echo $month;

                // $year = 2021;
                // $month = 05;
                // $now = time();
                // $nowMonth = date('m',$now);
                // var_dump($now);
                //設定本月第一天
                $firstDayMonth = mktime(0,0,0,$month,1,$year);
                //$now = time();
                //var_dump($now);
                //抓出本月有幾天
                $days = date('t',$firstDayMonth);
                //var_dump($days);
                //抓出本月第一天是星期幾
                $firstDayWeek = date('w',$firstDayMonth);
                //var_dump($firstDayWeek);
                //echo ;

                //set a tag previous- value
                if($month == 1){
                    $preYear = $year - 1;
                    $preMonth = 12;
                }else{
                    $preYear = $year;
                    $preMonth = $month - 1;
                    //echo $preMonth;
                }

                //set a tag next value
                if($month == 12){
                    $nextYear = $year + 1;
                    $nextMonth = 1;
                }else{
                    $nextYear = $year;
                    $nextMonth = $month + 1;
                }


            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td {
        height: 80px;
        width: 80px;
        text-align: center;
    }

    .center {
        margin: auto;
        text-align: center;
    }

    #box1 {
        border: 2px solid grey;
        border-radius: 25px;
    }

    a {
        text-decoration: none;
        color: inherit;
        font-size: 24px;
    }

    a:hover {
        color: grey;
        text-decoration: none;
        cursor: pointer;
    }

    h3 {
        font-family: Verdana;
    }
    
    </style>
</head>

<body>
    <div class="center">
        <h3>Monthly Calendar</h3>
        <?php 
        $changeMonth = str_pad($month,2,"0",STR_PAD_LEFT);
        ?>
        <h5 style="margin-bottom:18px"><?= $year."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;". $changeMonth?></h5>
    </div>
    <div class="center">
        
            <!-- previous 上一個月 -->
            <!-- $preYear = $year ++ -- -->
            <!-- $preMonth = $month ++ -- -->
            <a href="./t042201_time.php?year=<?= $preYear;?>&month=<?= $preMonth;?>">prev</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
            <!-- now 現在月份 -->
            <a href="./t042201_time.php">now</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- next 下一個月 -->
            <!-- $nextYear = $year ++ -- -->
            <!-- $nextMonth = $month ++ -- -->
            <a href="./t042201_time.php?year=<?= $nextYear;?>&month=<?= $nextMonth;?>">next</a>
        
    </div>
    <br>

    <table class="center" border="1px" width="80%">
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            <!-- <td>星期日</td>
            <td>星期一</td>
            <td>星期二</td>
            <td>星期三</td>
            <td>星期四</td>
            <td>星期五</td>
            <td>星期六</td> -->
        </tr>
        <?php for($i=1;$i<=6;$i++):?>
        <tr>
            <?php
            for($j=1;$j<=7;$j++){
                //  1    2    3   4   5   6   7 $j
                // -3   -2   -1   0   1   2   3 希望的結果
                //  0    1    2   3   4   5   6 firstday
                //  1    1    1   1   1   1   1 $i

                //7*6 42 
                //foreach 所有天數抓進去
                //preDateArr =[
                //["date"="","week" = "星期二" ],    
                //["date"="","week" = "星期三" ],    
                //["date"="2021-04-01","week" = "星期四" ],
                //["date"="2021-04-02","week" = "星期五" ],
                //["date"="2021-04-03","week" = "星期六" ],
                //if(week ==星期四)

                //$preDateArr[4]["date"] = "2021-04-01";
                //$preDateArr[4]["week"] = "星期四";
                //]

                //$dayStr = $j - $firstDayWeek //第一天
                //$i ~ //其他天
                $dayStr = (($i-1)*7+$j) - $firstDayWeek;
                if($i == 1){ //判斷1st Row 處理第一天
                    if($dayStr>0){
                    //if(!is_null($dayStr)){
                        //日期為1號 以後 會顯示
                        echo "<td>$dayStr</td>";
                    }else{
                        //datStr 0以下 該格無資料
                        echo "<td></td>";
                    }
                }else{
                    // row 2 後的處理
                    if($dayStr <= $days){
                        echo "<td>$dayStr</td>";
                    }else{
                        if($j == 1){
                            break;
                        }
                        echo "<td></td>";
                    }
                   
                }
                
            }                    
            ?>
        </tr>
        <?php endfor;?>

        <tr>
            <td colspan="7" id="box1"><?= $strArr[$month - 1];?></td>
            <!-- <td colspan="7" id="box1">I didn't fail the test, I just found 100 ways to do it wrong.</td> -->
        </tr>
    </table>
</body>

</html>