<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    echo "<html><head></head><body><script>alert('Please login first');</script></body></html>";
    header("location: index.html");
    exit;
}
if (($key = array_search($_GET['pid'], $_SESSION['cart'])) !== false) {
    echo $key;
    unset($_SESSION['cart'][$key]);
}
foreach($_SESSION['cart'] as $value){
    echo $value . "<br>";}
echo "<script>window.history.back();</script>";
?>