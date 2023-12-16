<?php
include("config.php");
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];

$sql="SELECT * FROM users where email = '$user_email' AND passwordd = '$user_password'";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num ==  1) {
    # code...
    echo "insert";    
    header("location: index.php");
}
else {
    # code...
    echo "not insert insert";

}

?>