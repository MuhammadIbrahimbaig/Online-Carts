<?php 
include("header.php");
?>


//Removing
if (isset($_POST['remove'])){
  foreach($_SESSION["shopping_cart"] as &$value){
    
    if($value['id'] === $_POST["id"]){
    $key=$value['name'];
    unset($_SESSION["shopping_cart"][$key]);
    echo "<script>alert('Item Removed')</script>";
    if(!isset($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
    break; // Stop the loop after we've found the product

    }		
  }
}


//Plus
if (isset($_POST['add_quantity'])){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['id'] === $_POST["id"]){
        $value['quantity'] +=1;
        break; // Stop the loop after we've found the product
    }
  }
}

//Minus
if (isset($_POST['sub_quantity'])){
 
    foreach($_SESSION["shopping_cart"] as &$value){
      if($value['quantity']>1){
          if($value['id'] === $_POST["id"]){
          $value['quantity'] -=1;
          break; // Stop the loop after we've found the product
          }
      }

      if($value['quantity']==1){
          if($value['id'] === $_POST["id"]){
          $key=$value['name'];
          unset($_SESSION["shopping_cart"][$key]);
          echo "<script>alert('Item Removed')</script>";
          if(empty($_SESSION["shopping_cart"])){
              unset($_SESSION["shopping_cart"]);
          break;} // Stop the loop after we've found the product
          }
      }		
    }
}
      
?>

<br><h2 class='text-center'>Your Cart</h2>
<hr style="width: 100%; height: 0.5rem; background-color: black;"> 

<?php
if(isset($_SESSION["shopping_cart"])){
    $total = 0;
?>	
<table class="table">
    <tbody>
        <tr style="text-transform: bold;">
            <td>ITEM</td> <td>ITEM NAME</td> <td>QUANTITY</td> <td>QUANTITY</td> <td>UNIT PRICE</td> <td>ITEMS TOTAL</td>
        </tr>
        <?php foreach ($_SESSION["shopping_cart"] as $product){ ?>
        <tr>
            <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
            <td><?php echo $product["name"]; ?><br />

            <!-- Removing -->
            <form method='post' action=''>
            <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
            <button type='submit' name="remove">Remove Item</button>
            </form>
            <!-- Removing -->

            </td>
            <td>
                
            <form method='post' action=''>
            <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
            <button type='submit' name="add_quantity">+</button>
            <button type='submit' name="sub_quantity">-</button>

            </form>
            </td>
            <td><?php echo $product["quantity"]; ?></td>
            <td><?php echo "Pkr".$product["price"]; ?></td>
            <td><?php echo "Pkr".$product["price"]*$product["quantity"]; ?></td>
        </tr>
        <tr>
            <td>
                <?php
                $total = $total+ ($product["price"]*$product["quantity"]);
                } //Loop Ended
                ?>
                <strong>TOTAL: <?php echo "$". $total; ?></strong>
                <br><hr  style="width: 100%; height: 0.5rem; background-color: black;">
                <?php if (ISSET($_SESSION["user_name"])) { ?>
                    <div class="btn-box"><a href="checkout.php?price=<?php echo $total?>"><h3 style="color: palevioletred;">checkout</h3></a></div>
                <?php } else { ?>
                    <h3><a href="login.php" style="color: palevioletred;">Login</a> to checkout</h3>
                <?php } ?>
            </td>
        </tr>
    </tbody>
</table>		
  <?php
}
else{
	echo "<br><br><h4 class='text-center'>Your cart is empty!</h4> <br><br><br>";
	}
?>



<?php 
include("footer.php");
?>