<?php
include("header.php");
?>



<!-- <style>
    .card img{
        width:200px;
        height:200px;
    }
</style> -->
</head>
<body>
    <div class="container   ">
        <div class="row ">
            <?php
        require("config.php");
        $qry="select * from products";
        $result= mysqli_query($conn,$qry);
        
        while($row= mysqli_fetch_assoc($result)){
            ?>
            <!-- cards -->
            <div class="card mt-5" style="width: 18rem;">
  <img src="<?php echo $row["prodimage"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["prodname"]?></h5>
    <p class="card-text"><?php echo $row["prodprice"]?></p>
    <a href="#" class="btn btn-primary">Add Cart</a>
  </div>
</div>

            <!-- end cars -->




<?php
        }
include("footer.php");

            ?>
        </div>
    </div>
</body>
</html>