<?php     
    session_start();
    unset($_SESSION['loginUser']);
    $url = "../login.php";
    header("Location: $url");

?>