<?php
    include("config.php");

    $prod_id = $_GET["prod_id"];
    $prodname = $_GET["prodname"];
    $prodprice = $_GET["prodprice"];
    $prodimage = $_GET["prodimage"];
    $Prod_Desc =$_GET["Prod_Desc"];
    $Prod_Category = $_GET["Prod_Category"];
    
    $query = "INSERT INTO `products` (`prod_id`,`prodname`,`prodprice`,`prodimage`,`prod_desc`,`prod_category`)
    VALUES ('$prod_id','$prodname','$prodprice','$prodimage','$Prod_Desc','$Prod_Category')";
    


 $result = mysqli_query($conn , $query); 
 
 if ($result) {
    echo "Record";
 }
 else{
    echo " error record";
 }

 ?>