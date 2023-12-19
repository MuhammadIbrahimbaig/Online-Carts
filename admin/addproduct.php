<?php
    include("config.php");

   //  $prod_id = $_POST["prod_id"];
    $prodname = $_POST["prodname"];
    $prodprice = $_POST["prodprice"];
   //  $prodimage = $_POST["prodimage"];
    $Prod_Desc =$_POST["Prod_Desc"];
    $Prod_Category = $_POST["cat"];
    $img= $_FILES["prodimage"];
// print_r($img);


$imgname= $img['name'];
$temppath = $img['tmp_name'];
$mypath= "img/".$imgname;

move_uploaded_file($temppath,$mypath);

    $query = "INSERT INTO `products` (`prodname`,`prodprice`, `prodimage`,`prod_desc`,`prod_category`)
    VALUES ('$prodname','$prodprice', '$mypath','$Prod_Desc','$Prod_Category')";
    


 $result = mysqli_query($conn , $query); 
 
 if ($result) {
    echo "Record";
 }
 else{
    echo " error record";
 }

 ?>