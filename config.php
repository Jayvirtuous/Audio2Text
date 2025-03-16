<?php
$servername = "localhost:3307";
$username = "root"; 
$password = ""; 
$dbname = "audext"; 
echo "1";
$conn = new mysqli($servername, $username, $password, $dbname);
echo "2";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include "signup.php";
?> 