<?php session_start();?>
<!DOCTYPE html>

<html>
	  
<meta charset="utf-8">
		<title>登入系統</title>
        <link href="style.css" rel="stylesheet">
	</head>
	<body>
    <div id="A">
        <p class="txt_white txt_size txt_location"> <b>ELEANOR'S </b><br><b>SHOP</b></p>
        
        
    </div>
		<center>
		
			
			<form action="register.php" method="post" >
				<table border="0" align="center" width="100%">
					
					<tr>
						<td>姓名</td>
						<td><input type="text" name="username" required="required"></td>
					</tr>
					<tr>
						<td>電話</td>
						<td>
						<input type="number" name="phone" required="required">
						</td>
					</tr>
					<tr>
						<td>地址</td>
						<td>
						<input type="text" name="address" required="required">
						</td>
					</tr>
					<tr>
						<td>電子郵件</td>
						<td><input type="text" name="email" required="required"></td>
					</tr>
                    <tr>
						<td>密碼</td>
						<td><input type="text" name="password" required="required" ></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
                        <input type="image" src="img/14.jpg" alt="Submit" width="200" height="50">
							
						</td>
					</tr>
				</table>
                <input type="button" onclick="javascript:location.href='index.php'" value="回到主畫面">
			</form>
		</center>
        <div id="E">
     <a href=https://www.facebook.com/profile.php?id=100007997522872&locale=zh_TW>
    <div class ="img5_container">
        
        </div> </a>
       <a href=https://www.instagram.com/tinghong4223>
        <div class ="img6_container">
         
        </div></a>
	</body>
</html>

