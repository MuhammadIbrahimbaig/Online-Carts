<?php
include 'header.php';
?>

<br><br> <br><br><br> 
<div class="container">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
                $con = mysqli_connect("localhost","root","", "online_carts");
                $prod_id= $_GET['id'];

                $query= "SELECT * FROM `products` where prod_Category = $prod_id";

                $result= mysqli_query($con, $query);

                while($opt= mysqli_fetch_assoc($result)){
      
                 
                 ?> 
<br>
                 <!-- cards -->
              
                    <div class="col-lg-3">
                 <div class="card">
  <img src="addmin/<?php echo $opt["prodimage"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $opt["prodname"]?></h5>
    <p class="card-text text-primary "><?php echo $opt["Prod_Desc"] ?></p>
    <p class="card-text text-dark "><?php echo $opt["prodprice"] ?></p>
    <a href="detailpage.php?id=<?php echo $opt["prod_id"] ?>" class="btn btn-primary w-100"><i class="fa fa-shopping-cart" aria-hidden="true"></i>     Add to Cart</a>
  </div> 
</div>
</div>

<!-- card ending -->
<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>