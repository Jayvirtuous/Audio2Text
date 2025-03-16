<?php
$servername = "localhost:3307";
$username = "root"; 
$password = ""; 
$dbname = "audext"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $pass = $_POST['password'];
    
    $query =  "SELECT `name`, `pass` FROM `validate` WHERE `name`='$name' and `pass`='$pass'";
    $result = $conn->query($query); 
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    
    if($count >= 1) {
        $_SESSION['login_user'] = $name;
        header("location: AfterLogin.php");
     }
     else {
        echo "Your Login Name or Password is invalid";
     }
}
?> 