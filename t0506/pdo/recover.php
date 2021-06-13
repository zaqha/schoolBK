<?php
include 'C:\xampp\htdocs\effie\PHP\common\dd.php';
include 'C:\xampp\htdocs\effie\PHP\common\db.php';

    $sql = "TRUNCATE TABLE `stores`;

    

INSERT INTO `stores` (`id`, `name`, `location`, `price`, `people`) VALUES 
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '台中', '中區', 1000000, 1000000),
(NULL, '高雄', '南區', 10000000, 10000),
(NULL, '顆顆', '中區', '50', '50');


    ";


    $recoverData = $conn->prepare($sql); 
    $recoverData->execute();
    $url = "./index.php?msg=recover_ok";
    header("Location: $url");





?>