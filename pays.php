<?php
session_start();
include 'connect.php';

$crnum=$_POST['card_number'];
$cname=$_POST['name'];
$exp=$_POST['expiry'];
$cvv=$_POST['cvv'];
$uname=$_SESSION['username'];
$price=$_SESSION['total'];
$sql="INSERT INTO `card` (`user`, `ncard`, `cnum`, `exp`, `cvv`, `price`) VALUES ('$uname', '$cname', $crnum, '$exp', $cvv, $price)";
$result= mysqli_query($conn,$sql);
$_SESSION['cart']=array();
echo "<script>alert('Order Has been Placed you will receive a confirmation via email once confirmed');
            window.location.href='home.php';</script>";

?>
