<?php
    session_start();
    unset($_SESSION['account']);
    header("index.php");
   
    if(isset($_GET["logout"]) AND $_GET["logout"]=="true") {
    session_unset();
    
    header("Location: index.php");
}

?>