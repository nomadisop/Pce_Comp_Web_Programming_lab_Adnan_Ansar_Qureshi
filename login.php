<?php

$server="localhost";
$username="root";
$password="";
$database="pr1";
$submit = $_POST['submit'];
$flag=0;

if(isset($submit)){
    $conn= mysqli_connect($server,$username,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    $sql="select * from userdata where uname='$uname'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        $arr=mysqli_fetch_array($result);
        if(password_verify($pass,$arr['pass'])){
            $login=true;
            session_start();
            $_SESSION["loggedin"]=true;
            $_SESSION["username"]=$uname;
            $_SESSION['cart']=array();
            header("location: home.php");
        }

        else{
            echo "<script>alert('Invalid Credentials');
            window.history.back();</script>";
        }
}




?>