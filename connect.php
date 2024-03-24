<?php
$server="localhost";
$username="root";
$password="";
$database="pr1";

    try {
        $conn = new mysqli($server,$username,$password,$database);
    
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }
    } catch (Exception $e) {
        // Handle connection error
        echo "Error: " . $e->getMessage();
        exit();
    }
?>