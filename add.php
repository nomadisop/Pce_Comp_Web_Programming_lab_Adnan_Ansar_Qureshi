<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    echo "<html><head></head><body><script>alert('Please login first');</script></body></html>";
    header("location: index.html");
    exit;
}
/*array_push($_SESSION['cart'],$_POST['id']);*/
if (($key = array_search(1, $_SESSION['cart'])) !== false) {
    echo $key;
    unset($_SESSION['cart'][$key]);
}
foreach($_SESSION['cart'] as $value){
    echo $value;
}
echo "<script>alert('Item added to cart');
            window.location.href='view_page.php';</script>";
?>