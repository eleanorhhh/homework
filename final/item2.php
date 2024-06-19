<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>舒芙蕾</title>
</head>
<body>
    
<form action="order.php" method="post" >
<?php
if(!isset($_SESSION['account']))
{
    
        header("Location:login.php");
    }
    else
    {


    }
?>
<div id="A">
        <p class="txt_white txt_size txt_location"> <b>ELEANOR'S </b><br><b>SHOP</b></p>
        <div class="C">
       <div class ="img3_container">
        
    </div>
</div>
<div class="D">
    <p class=" img_txt"> <b>soufflé</b><br><b>&nbsp&nbspNT$100</b></p>
    
    <p class="buy_location">
    <select size="1" name="item2" style="width: 200px; height: 50px; ">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select><br>
    <input type="image" name="submit" src="img/11.jpg"  alt="Submit" style="width: 200px; " >

</p>

     
</div> 
<div id="E">
     <a href=https://www.facebook.com/profile.php?id=100007997522872&locale=zh_TW>
    <div class ="img5_container">
        
        </div> </a>
       <a href=https://www.instagram.com/tinghong4223>
        <div class ="img6_container">
         
        </div></a>
    
        
</div>

    </form>

    
        
</div>

    
</body>
</html>