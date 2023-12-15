<?php
    include("config.php");

    $prod_id = $_GET["prod_id"];
    $prodname = $_GET["prodname"];
    $prodprice = $_GET["prodprice"];
    $prodimage = $_GET["prodimage"];
    $prod_Desc =$_GET["prod_Desc"];
    $Prod_Category = $_GET["prod_Category"];
    
    $query = "INSERT INTO `products` (`prod_id`,`prodname`,`prodprice`,`prodimage`,`prod_desc`,`prod_category`)
    VALUES ('$prod_id','$prodname','$prodprice','$prodimage','$prod_desc','$prod_category')";
    


 $result = mysqli_query($conn , $query); 
 
 if ($result) {
    echo "Record";
 }
 else{
    echo " error record";
 }

 ?>