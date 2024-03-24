<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="pr1";
$conn= mysqli_connect($server,$username,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

$crnum=$_POST['card_number'];
$cname=$_POST['name'];
$exp=$_POST['expiry'];
$cvv=$_POST['cvv'];
$uname=$_SESSION['username'];
$sql="INSERT INTO `card` (`user`, `ncard`, `cnum`, `exp`, `cvv`) VALUES ('$uname', '$cname', $crnum, '$exp', $cvv)";
$result= mysqli_query($conn,$sql);
$_SESSION['cart']=array();
echo "<script>alert('Order Has been Placed you will receive a confirmation via email once confirmed');
            window.location.href='home.php';</script>";

?>