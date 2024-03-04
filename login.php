<?php

$server="localhost";
$username="root";
$password="";
$database="pr1";
$submit = $_POST['submit'];

if(isset($submit)){
    $conn= mysqli_connect($server,$username,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    $sql="select * from userdata where uname='$uname' and pass='$pass'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num==1){
            $login=true;
            session_start();
            $_SESSION["loggedin"]=true;
            $_SESSION["username"]=$uname;

            header("location: home.php");
        }

        else{
            $showError="Invalid Credentials";
        }
}




?>