
<?php
    include("header.php");
    include("config.php");
    
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
                <div class="col-md-12 form-group">
                  <input type="text" name="user_name" class="form-control" id="name" placeholder="Enter Username" required>
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
                    <input type="text" class="form-control" name="address"  placeholder=" Address" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone"  placeholder=" Phone " required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="file" class="form-control" name="image" required>
                </div>
                <br>
                <br>
             
                <!-- role dropdown -->
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="hidden" class="form-control" name="user_role" value="2" required>
                </div>
              </div>
              
              <div class="text-center mt-3"><button type="submit" class="btn btn-secondary w-50" name="submit">Sign Up</button></div>
              <p class="mt-5 text-center">Already have an account? <a href="login.php">Login</a></p>
            </form>
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>
<?php


    if(isset($_POST["submit"])){
      $user_name = $_POST['user_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $role_id = $_POST['user_role'];
      $img = $_FILES["image"];
      $imgname= $img['name'];
      $temppath = $img['tmp_name'];
      $mypath= "../addmin/assets/images/".$imgname;
      
      move_uploaded_file($temppath,$mypath);
      $query = "INSERT INTO `users`(`user_name`, `email`, `passwordd`, `address`, `Phone`, `role`,`user_image`)
       values ('$user_name','$email','$password','$address','$phone','2', '$mypath')";

      $result = mysqli_query($conn, $query);
      echo "<script>
      alert('User Added Successfully'); 
      window.location.href = 'login.php';</script>";
    }

?>



</body>

</html>

<!-- insert Working  -->
<?php
    if(isset($_POST["submit"])){
      $user_role = 5;
      $user_id = 1;
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
   

      $query = "Insert into users ( name, email, password, address , phone )
       values ('$name','$email','$password','$address','$phone')";

      $result = mysqli_query($conn, $query);
      echo "<script>location.href = '/E project/Online-Carts/login.php';</script>";
    }
    ?>
<?php
include("footer.php")
?>

