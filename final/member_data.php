<?php session_start(); 
$file_name = $_SERVER['PHP_SELF'];
include("db_connect.php");

	$database = "C112151128";
	$db_select = mysqli_select_db($conn, $database);
    $account=$_SESSION['account'];
    $sql_str = "SELECT * FROM `member` WHERE `account` = '$account'";
	$res = mysqli_query($conn, $sql_str) or die("SQL語法錯誤");
	$row_array = mysqli_fetch_assoc($res);

	$username = $row_array['username'];
	$phone = $row_array['phone'];
	$address = $row_array['address'];
    $email = $row_array['email'];
    $account=$row_array['account'];
    $password=$row_array['password'];



?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>會員中心</title>
</head>
<body>
    
<div id="A">
        <p class="txt_white txt_size txt_location"> <b>ELEANOR'S </b><br><b>SHOP</b></p>
</div>
  <center> 
     
    <p class="txt_black txt_size ">
    <table border="0" align="center" width="100%">
     <tr>
        <td>會員:</td>
        <td> <?php echo $username;?> </td>
</tr>
<tr>
        <td>電話:</td>
        <td> <?php echo $phone;?> </td>
</tr>
<tr>
        <td>地址:</td>
        <td> <?php echo $address;?> </td>
</tr>
<tr>
        <td>email:</td>
        <td> <?php echo $email;?> </td>
</tr>
<tr>
        <td>帳號:</td>
        <td> <?php echo $account;?> </td>
</tr>
<tr>
        <td>密碼:</td>
        <td> <?php echo $password;?> </td>
</tr>
    </p>
</table>


<input type="button" onclick="javascript:location.href='index.php'" value="回到主畫面">
<br>
<a href='logout.php?logout=true'>登出系統</a>

</center>

<div id="E">
     <a href=https://www.facebook.com/profile.php?id=100007997522872&locale=zh_TW>
    <div class ="img5_container">
        
        </div> </a>
       <a href=https://www.instagram.com/tinghong4223>
        <div class ="img6_container">
         
        </div></a>
    
        
</div>

</body>
</html>