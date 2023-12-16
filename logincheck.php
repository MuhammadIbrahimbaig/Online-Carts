<?php
include("config.php");
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];

$sql="SELECT * FROM users where email = '$user_email' AND passwordd = '$user_password'";

$result = mysqli_query($conn,$sql);




    # code...
    echo "insert";    
    header("location: index.php");


?>