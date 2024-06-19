<?php
    header ("Content-Type:text/html; charset=utf-8");
    $db_host="203.64.95.42";
    $db_account="C112151128";
    $db_password="STUC112151128!@#";

    $conn=@mysqli_connect($db_host,$db_account,$db_password) or die("連線錯誤");
    mysqli_query($conn,"SET NAMES SET 'utf-8'");
    mysqli_query($conn,"SET NAMES 'utf-8'"); 

?>