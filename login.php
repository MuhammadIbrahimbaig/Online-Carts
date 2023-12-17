<?php
include("header.php");
include("config.php");
  ?>
  <!-- ======= login Section ======= -->
  <br>
  <br>
  <form  action="logincheck.php" method="POST">
        <h1 class="text-center display-5">login form</h1>
        <input placeholder="name" class="form-control p-1 mt-2" type="email" name="user_email">
        <input placeholder="password" class="form-control p-1 mt-2" type="password" name="user_password">
        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
        
<p class="mt-5 text-center">new account create? <a href="signup.php">sign up</a></p>

          <!-- End login Form -->
 
  
 

 <?php
 include("footer.php");
?>

