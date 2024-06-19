<!DOCTYPE html>
<?php
function generateNumericAccount($length) {
    $digits = '0123456789';
    $account = '';
    for ($i = 0; $i < $length; $i++) {
        $account .= $digits[rand(0, strlen($digits) - 1)];
    }
    
    return $account;
}

?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="A">
        <p class="txt_white txt_size txt_location"> <b>ELEANOR'S </b><br><b>SHOP</b></p>
       
      
        
    </div>
    <?php
        $account = generateNumericAccount(6);
        
        $name=$_POST['username'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        include("db_connect.php");
    $database="C112151128"; 
    $db_select=mysqli_select_db($conn,$database) or die ("資料庫選擇錯誤");
    //$sql_str="select * from `member`";
    //$res=mysqli_query($conn,$sql_str) or die ("SQL1語法錯誤");
    $sql_ins="INSERT INTO `member`(`username`, `phone`, `address`, `email`, `account`, `password`) VALUES  ('".$name."','".$phone."','".$address."','".$email."','".$account."','".$password."')";
    
    echo " <center> <div id='F'>";
    if(mysqli_query($conn,$sql_ins))
    {
        echo "註冊成功!<br>";
        echo "你的帳號是:".$account;
        echo "<br>你的密碼是:".$password;

      
    }
    else{
        ?>
        <script>
        alert("註冊失敗");
        </script>
       <?php 
    } 

    ?>
     <br><input type="button" onclick="javascript:location.href='index.php'" value="回到主畫面">
    </div>
</center>
    
</body>
</html>
<?php
?>
