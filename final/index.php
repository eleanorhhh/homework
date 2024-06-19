<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
  
    <title>ELEANOR'S SHOP</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>


    <div id="A">
        <p class="txt_white txt_size txt_location"> <b>ELEANOR'S </b><br><b>SHOP</b></p>
        <?php
        if(!isset($_SESSION['account']))
        {
             echo "<a href='login.php'>";
         echo " <div class='img8_container'>";
     
        echo "</div>"; 
    echo "</a>";

        }
        else{
           //unset($_SESSION['username']);
            echo "
            <a href='member_data.php'>
                <div class='img12_container'>
                </div>
                </a>
            ";
        }
       
?>
    </div>

    <div class="B">
    <div class="img_1">
        <h2>New Arrival</h2>
</div>
</div>
    <div class="C">
       <div class ="img2_container">
        
    </div>
</div>
<div class="D">
    <p class=" img_txt"> <b>BEEF CURRY</b></p>
    <a href="item1.php">
    <div class ="img9_container">
        
    </div>
</a>

</div>
<div class="C">
       <div class ="img3_container">
        
    </div>
</div>
<div class="D">
    <p class=" img_txt"> <b>soufflé</b></p>
    <a href="item2.php">
    <div class ="img9_container">
        
    </div>
</a>
</div>
<div class="C">
       <div class ="img4_container">
        
    </div>
</div>
<div class="D">
    <p class=" img_txt"> <b>Matcha Latte</b></p>
    <a href="item3.php">
    <div class ="img9_container">
        
    </div>
</a>
</div>

   
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