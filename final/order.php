<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>order</title>
</head>
<body>
   <?php
    include("db_connect.php");
    $database="C112151128"; 
    $db_select=mysqli_select_db($conn,$database) or die ("資料庫選擇錯誤");
    $account=$_SESSION['account'];
    $sql_str="select * from `item`";
    $res=mysqli_query($conn,$sql_str) or die ("SQL1語法錯誤");
    $item1=$_POST['item1'];
    $item2=$_POST['item2'];
    $item3=$_POST['item3'];
    $sql_str="insert into `item`(`account`,`BEEFCURRY`,`soufflé`,`MatchaLatte`) values ('$account','$item1','$item2','$item3')";
    if(mysqli_query($conn,$sql_str))
    {
        ?>
        <script>
        alert("購買成功");
        </script>
       <?php 
      
    }
    else{
        ?>
        <script>
        alert("購買失敗");
        </script>
       <?php 
    } 
    
    ?>
</body>
</html>