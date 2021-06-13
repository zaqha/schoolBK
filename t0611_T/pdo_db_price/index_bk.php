<?php 
    include "../common/commonFun.php";
    include "./db2.php";
    $sql = "SELECT * FROM stores";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    //both index and assoc array
    //$result = $stmt->fetchAll();
    //assoc array
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // dd($result);
    //index array
    //我要知道 剛剛跑sql的結果
    //我只要 assoc_arr
    //myFuntion($x)
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    dd($result);
    
    


    // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //     echo $v;
    // }

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