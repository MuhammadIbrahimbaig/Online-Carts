<?php
    include("config.php");
    
    $id = $_POST["id"];
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_passwordd = $_POST["user_passwordd"];
    $user_adrress = $_POST["user_address"];
    $Phone = $_POST["Phone"];
    $role_id = $_POST["role_id"];

$query = "UPDATE `users` SET `user_name`='$user_name',`user_email`='$user_email',`user_password`='$user_password',`user_address`='$user_adrress',`Phone`='$Phone',`role_id`='$role_id' WHERE id = $id";

 $result = mysqli_query($conn , $query);
 echo "record";
 header("location:user.php ")
 ?>