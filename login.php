<?php
include("header.php");
include("config.php");
<<<<<<< HEAD
=======


if(isset($_POST['submit'])){
  $user_email = $_POST['user_email'];
  $user_password = $_POST ['user_password'];

  $query = "SELECT * from users where user_email = '$user_email' AND user_password = '$user_password'";

  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($result);
  if(mysqli_num_rows($result) > 0){
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['user_name'] = $data['user_name'];
    echo "<script>window.location.href = 'index.php';</script>";
  }
  else{
    echo "<div class='alert alert-danger w-75 mt-5 mx-auto' role='alert'>
    Username or password is incorrect
  </div>";
  }
}
if(isset($_SESSION['user_id'])){
  echo "<script>window.location.href = 'index.php';</script>";
}
else{

>>>>>>> af978abc093e2f4bf1cf69c5393b32c18a1ef6c5
  ?>
  <!-- ======= login Section ======= -->
  <form class="form w-50 mt-5 mx-auto p-3 bg-light rounded-2" action="logincheck.php" method="POST">
        <h1 class="text-center display-5">login form</h1>
        <input placeholder="name" class="form-control p-1 mt-2" type="email" name="user_email">
        <input placeholder="password" class="form-control p-1 mt-2" type="password" name="user_password">
        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
        
<p class="mt-5 text-center">new account create? <a href="signup.php">sign up</a></p>

          <!-- End login Form -->
 
  <?php
}?>
 

 <?php
 include("footer.php");
?>





<<<<<<< HEAD

<!-- links -->
    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
=======
</body>

</html>



>>>>>>> af978abc093e2f4bf1cf69c5393b32c18a1ef6c5
