<?php
$server="localhost";
$username="root";
$password="";
$database="pr1";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn= mysqli_connect($server,$username,$password,$database);
    $uname=$_POST["uname"];
    $lname=$_POST["lname"];
    $gen=$_POST["gender"];
    $phone=$_POST["phn"];
    $emm=$_POST["emm"];
    $usname=$_POST["uun"];
    $pass=$_POST["pp"];
    $cp=$_POST["cpp"];
    if ($pass == $cp) {
        $sql = "INSERT INTO `userdata` (`fname`, `lname`, `gender`, `contact`, `email`, `uname`, `pass`) VALUES ('$uname', '$lname', '$gen', $phone, '$emm', '$usname', '$pass')";
        $result = mysqli_query($conn, $sql);
    
        
        } else {
            echo "Insertion failed!";
        }
    }
    
?>

