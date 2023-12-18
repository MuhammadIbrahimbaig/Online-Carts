<?php
include("config.php");
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];

$sql="SELECT * FROM users where email = '$user_email' AND passwordd = '$user_password'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

 if ($num ==  1) {
    echo "<script>
    alert('User login Successfully'); 
    window.location.href = 'index.php';</script>";
    
 }
 else {
    echo "<script>
      alert('incorrect  email and password'); 
      window.location.href = 'login.php';</script>";
    
 }
    