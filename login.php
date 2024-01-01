<?php
include("header.php");
include("config.php");


// backend Login

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


  ?>
  <!-- End  -->
  
  <!-- Front end -->
  <section id="contact" class="contact ">
      <div class="container" data-aos="fade-up">
        <div class="section-header text-center fw-bolder ">
        <br>
        <br>
        <br>
        <br>
        <br>
          <h2 class="text-primary">Login!</h2>
          <p>Login  website!</p>

        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-6 mx-auto ">
            <form method="post" action="logincheck.php">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="email" name="user_email" class="form-control" placeholder="Enter your email" required>
                </div>
                <br>
                <br>
                 <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="user_password"  placeholder="Enter your password" required>
                </div>
                <br>
                <br>
               
              <div class="text-center mt-3"><button type="submit" class="btn btn-secondary w-50" name="submit">Login</button></div>
              <p class="mt-5 text-center">new account create? <a href="signup.php">signup</a></p>
            </form>
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section>
 <?php
 include("footer.php");
?>

