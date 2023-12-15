<?php
include("config.php");
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];

$sql="SELECT * FROM users where user_email = '$user_email' AND user_password = '$user_password'";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num ==  1) {
    # code...
    echo "insert";    
    header("location: welcome.php");
}
else {
    # code...
    echo "not insert insert";

}

?>