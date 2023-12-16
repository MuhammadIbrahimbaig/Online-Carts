<?php
include("config.php");
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];

$sql="SELECT * FROM users where email = '$user_email' AND passwordd = '$user_password'";

$result = mysqli_query($conn,$sql);




    # code...
    echo "insert";    
    header("location: index.php");
<<<<<<< HEAD
}
else {
    # code...
    echo "not insert insert";
=======
>>>>>>> 4670688bd893a22777de6c84937e9b61253af9b5


?>