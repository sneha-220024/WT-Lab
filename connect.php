<?php
$servername = "localhost";
$username = "root";
$password = "";   // Keep empty for XAMPP
$database = "user";
$conn=mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Connection failed:");
}
echo "Connected successfully";
?>
