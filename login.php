<?php
include("header.php");
include("config.php");
  ?>
  <!-- ======= login Section ======= -->
  <form class="form w-50 mt-5 mx-auto p-3 bg-light rounded-2" action="logincheck.php" method="POST">
        <h1 class="text-center display-5">login form</h1>
        <input placeholder="name" class="form-control p-1 mt-2" type="email" name="user_email">
        <input placeholder="password" class="form-control p-1 mt-2" type="password" name="user_password">
        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
        
<p class="mt-5 text-center">new account create? <a href="signup.php">sign up</a></p>
 <?php
 include("footer.php");
?>
