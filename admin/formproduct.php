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
    
    <form class="form w-50 mt-5  mx-auto" action="addproduct.php" method="GET">
        <h1 class="text-centre display-5">Add Products</h1>
        <input class="form-control p-1 mt-2" placeholder="ProdId" type="text" name="prod_id" >
        <input class="form-control p-1 mt-2" placeholder="ProductName" type="text"  name="prodname">
        <input class="form-control p-1 mt-2" placeholder="ProductPrice" type="text"  name="prodprice">
        <input class="form-control p-1 mt-2" placeholder="Product IMage" type="text"  name="prodimage">
        <input class="form-control p-1 mt-2" placeholder="Product Description" type="text"  name="Prod_Desc">

        <input class="form-control p-1 mt-2" placeholder="Product category"  type="number"  name="Prod_Category">
      

        <!-- <select name="category" id="" class="form-control mt-2" > -->
        <?php
                // while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <!-- <option value="<?php echo $data["id"]?>"><?php echo $data["category"]?></option> -->
                    <?php
                // }
                ?>
                </select>
              
                <input class="btn btn-outline-warning text-dark w-100 mt-5 border-dark" type="submit" name="submit">
           

    </form>
</body>
</html>