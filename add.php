<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    echo "<html><head></head><body><script>alert('Please login first');</script></body></html>";
    header("location: index.html");
    exit;
}
array_push($_SESSION['cart'],$_POST['id']);

foreach($_SESSION['cart'] as $value){
    echo $value;
}
echo "<script>alert('Item added to cart');
        window.history.back();</script>";   //go back to previous window
?>