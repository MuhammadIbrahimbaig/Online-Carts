<?php
    include("config.php");
    $query = "SELECT * FROM products p join categories c on prod_id = cat_id";
    $result = mysqli_query($conn, $query);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
    <form class="form w-50 mt-5  mx-auto" action="addproduct.php" method="POST" enctype="multipart/form-data">
        <h1 class="text-centre display-5">Add Products</h1>
        <input class="form-control p-1 mt-2" placeholder="ProductName" type="text"  name="prodname" required>
        <input class="form-control p-1 mt-2" placeholder="ProductPrice" type="text"  name="prodprice" required>
        <input class="form-control p-1 mt-2" placeholder="Product Image" type="file"  name="prodimage" required>
        <input class="form-control p-1 mt-2" placeholder="Product Description" type="text"  name="Prod_Desc" required>
        <br>
        
            <!-- Category Drop DOwn -->
        <select name="cat" id="" class=" form-control">
            <?php
                $qry= "select * from categories";
                $res= mysqli_query($conn, $qry);
                while($data=mysqli_fetch_assoc($res)){
             
            ?>
  
      
                <option value="<?php echo $data['Cat_Id'] ?>"><?php echo $data['Category'] ?></option>
                <?php }?>
            </select>
              
                <input class="btn btn-outline-warning text-dark w-100 mt-5 border-dark" type="submit" name="submit">
           

    </form>
    
    <!-- // image work =======///////-->
    <?php

require("config.php");

if(isset($_GET['submit'])){


$img= $_FILES["prodimage"];
print_r($img);


$imgname= $img['prodname'];
$temppath = $img['tmp_name'];
$mypath= "images/".$imgname;

move_uploaded_file($temppath,$mypath);

$qry="INSERT INTO `products`(`prodimage`) VALUES ('$mypath')";
mysqli_query($conn,$qry);
}
?>
    
</body>
</html>