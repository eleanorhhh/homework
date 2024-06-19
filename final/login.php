<?php session_start();?>
<!DOCTYPE html>

<html>
	<head>
        
		<meta charset="utf-8">
		<title>登入系統</title>
        <link href="style.css" rel="stylesheet">
	</head>
	<body>
    <div id="A">
        <p class="txt_white txt_size txt_location"> <b>ELEANOR'S </b><br><b>SHOP</b></p>
        
        
    </div>
			<center>
           
			<form action="member.php" method="post" >
				<table border="0" align="center" width="100%">
					
					<tr>
						<td>帳號</td>
						<td><input type="text" name="account" required="required"></td>
					</tr>
					<tr>
						<td>密碼</td>
						<td>
						<input type="text" name=" password" required="required">
						</td>
					</tr>
					
					
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="登入">
							<input type="reset"  value="重新填寫">
						</td>
					</tr>
				</table>
                <div id="G">
                    <center>
                <input type="button" onclick="javascript:location.href='index.php'" value="回到主畫面">
               <a href="login_add.php">
                <div class="img14_container">
</div>
</a>
</div></center>
<div id="E">
     <a href=https://www.facebook.com/profile.php?id=100007997522872&locale=zh_TW>
    <div class ="img5_container">
        
        </div> </a>
       <a href=https://www.instagram.com/tinghong4223>
        <div class ="img6_container">
         
        </div></a>


			</form>
	
	</body>
</html>

