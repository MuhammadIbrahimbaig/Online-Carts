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
<br>
<br>



<div class="row row-cols-1 row-cols-md-3 g-4 mt-3" style="padding: 20px;">
  <div class="col">
    <div class="card h-100 ">
      <img src="admin/<?php echo $opt['prodimage'] ?>" class="card-img-top h-50" alt="...">
      <div class="card-body">
          <br>
          <br>
        <h5 class="card-title"><?php echo $opt['prodname']?></h5>
          <p class="card-text"><?php echo $opt['Prod_Desc']?></p>
          
        </div>
      <!-- buttton bUy-->
      <div class="ibrahim">
        <nav class="navbar navbar-light">
          <form class="container-fluid justify-content-start text-uppercase ">
            <a href="#" class="btn btn-outline-danger me-4 col-12" type="button"><span style="font-weight: bolder ">Oder now</span>
              </a> </form></nav>
              </div>
     
    </div>
  </div>

<br>
                 <?php } ?>