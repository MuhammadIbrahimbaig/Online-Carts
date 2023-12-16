   <!-- miss -->
   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          

<ul class="dropdown-menu">
            <?php
              //  include("config.php");
                
                $query= "SELECT * FROM `categories`";

                $result= mysqli_query($con, $query);

                while($opt= mysqli_fetch_assoc($result)){
            
?>
    <li><a class="dropdown-item" href="category.php?id=<?php echo $opt['Cat_Id'] ?> "><?php echo $opt['category'] ?></a>
</li>

<?php 
}
 ?>   
<!-- end miss -->