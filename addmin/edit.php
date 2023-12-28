<?php
    include("header.php");
    include("config.php");
    $id = $_GET["id"];
    $edit_query = "SELECT * FROM users where user_id = '$id'";
    $edit_result = mysqli_query($conn,$edit_query);
    $row = mysqli_fetch_assoc($edit_result);

    
?>
     
     <br><br>
     <div class="container mt-5 text-center ">
      <h1 class="text-primary">Edit your data</h1>
     </div>

     <form class="row g-3" method="post" action="editwork.php">
  <div class="col-md-6">
  <input type="hidden" value ="<?php echo $row["user_id"] ?>" name="id">
    <label for="inputEmail4" class="form-label">name</label>
    <input type="text" value ="<?php echo $row["user_id"] ?>" class="form-control" id="inputEmail4" name="user_name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control w-100" id="inputCity">
  </div>
 
 
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
     