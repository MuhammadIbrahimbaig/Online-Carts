<?php
    include("header.php");
    include("config.php");
    $query = "SELECT * FROM user_role";
    $result = mysqli_query($conn, $query);
?>
<main id="main">

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact ">
      <div class="container" data-aos="fade-up">

        <div class="section-header text-center fw-bolder ">
        <br>
        <br>
        <br>
        <br>
        <br>
          <h2 class="text-primary">Sign up!</h2>
          
          <p>Welcome to our Online Carts website!</p>

        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-6 mx-auto ">
            <form method="post" role="form" class="php-email-form1" enctype="multipart/form-data">
              <div class="row">
              <!-- <div class="col-md-12 form-group">
                  <input type="tel" name="name" class="form-control" id="id" placeholder="Your ID" required>
                </div>
<br> -->
<br>
                <div class="col-md-12 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Username" required>
                </div>
                <br>
                <br>
                 <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="email" placeholder="Enter Password" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="address"  placeholder="Enter your address" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone"  placeholder="Enter your Phone no" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone"  placeholder="Enter your Cell" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group">
                  <input type="text" name="dob" class="form-control" id="name" placeholder="Your Date of birth" required>
                </div>
                <br>
                <br>
                <!-- role dropdown -->
                <!-- <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="hidden" class="form-control" name="role_id" value="3" required>
                </div> -->
              </div>
              
              <div class="text-center mt-5"><button type="submit" class="btn btn-outline-warning " name="submit">Sign Up</button></div>
              <p class="mt-5 text-center">Already have an account? <a href="login.php">Login</a></p>
            </form>
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>
<?php
    include("footer.php");
?>



</body>

</html>

<!-- insert Working  -->
<?php
    if(isset($_POST["submit"])){
      $user_role = 5;
      // $user_id = 1;
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $cell = $_POST['cell'];
      $dob = $_POST['dob'];
    //   $status = $_POST['status'];
    //  $role_id = $_POST['role_id'];

      $query = "Insert into users ( name, email, password, address , phone , cell , dob)
       values ('$name','$email','$password','$address','$phone','$cell','$dob')";

      $result = mysqli_query($conn, $query);
      echo "<script>location.href = '/E project/Online-Carts/login.php';</script>";
    }
    ?>
<?php
include("footer.php")
?>

