<?php
                $con = mysqli_connect("localhost","root","", "online_carts");
                $prod_id= $_GET['id'];

                $query= "SELECT * FROM `products` where categories = $prod_id";

                $result= mysqli_query($con, $query);

                while($opt= mysqli_fetch_assoc($result)){
      
                 
                 ?> 
                 <?PHP 
                 echo $opt['prodname'];

?>
                 <?php } ?>