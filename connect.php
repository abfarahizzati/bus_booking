<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
global $conn;
?>