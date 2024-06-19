<?php session_start(); 

    include("db_connect.php");
    $database="C112151128";
    
    $db_select=mysqli_select_db($conn,$database) or die ("資料庫選擇錯誤");
    $sql_str="select * from `member`";
    $res=mysqli_query($conn,$sql_str) or die ("SQL語法錯誤");
    $account=$_POST['account'];
    $password=$_POST['password'];
    $sql_account = "SELECT * FROM `member` WHERE `account` = '".$account."'AND `password` = '".$password."'";
    $res=mysqli_query($conn,$sql_account) or die ("SQL語法錯誤");
    $temp=1;
    if(!isset($res))
    {
        $temp=2;
    }
    if($temp==1)
    {
         $row_member =mysqli_fetch_assoc($res);
    
        $_SESSION['account']=$row_member['account'];
        
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
    }
    
       

   
 
   
    ?>
    