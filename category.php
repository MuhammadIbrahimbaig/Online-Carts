<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>
<?php
                $con = mysqli_connect("localhost","root","", "online_carts");
                $prod_id= $_GET['id'];

                $query= "SELECT * FROM `products` where prod_Category = $prod_id";

                $result= mysqli_query($con, $query);

                while($opt= mysqli_fetch_assoc($result)){
      
                 
                 ?> 
<br>

<div class="container row-cols-1 row-cols-md-3 g-4 mt-3">
  <div class="col">
<div class="card h-100 " style="width: 18rem; ">
  <img src="admin/<?php echo $opt['prodimage'] ?>" class="card-img-top h-50" alt="...">
  <div class="card-body ">
    <h5 class="card-title"><?php echo $opt['prodname'] ?></h5>
    <p class="card-text"><?php echo $opt['Prod_Desc'] ?></p>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>
</div>
</div>
<br>
                 <?php } ?>