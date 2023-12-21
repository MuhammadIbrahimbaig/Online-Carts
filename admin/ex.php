

<?php
    include("header.php");

    include("config.php");
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conn, $query);
?>
<main id="main">

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5 text-center fw-bolder">
          <h2 class="text-primary">Sign up!</h2>
          <p>Welcome to our Hospitals website!</p>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-6 mx-auto">
            <form method="post" role="form" class="php-email-form1">
              <div class="row">
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
                    <input class="form-control" name="address"  placeholder="Enter your address" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="hidden" class="form-control" name="role_id" value="3" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                <select name="hospital_id" id="">
    <option disabled selected>Select Hospital</option>

    <?php

    // Fetch hospital names from the database
    $sql = "SELECT * FROM hospital";
    $result = $conn->query($sql);

    // Display hospital names in the dropdown
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["id"] . '">' . $row["Hospital_Name"] . '</option>';
    }

    ?>
</select>
                </div>
              </div>
              
              <div class="text-center mt-5"><button type="submit" class="btn btn-outline-primary " name="submit">Sign Up</button></div>
              <p class="mt-5 text-center">Already have an account? <a href="login.php">Login</a></p>
            </form>
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>

<?php
    if(isset($_POST["submit"])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $address = $_POST['address'];
      $role_id = $_POST['role_id'];
      $hospital_id = $_POST['hospital_id'];

      $query = "Insert into users (user_name, user_email, user_password, user_address, role_id,hospital_id)
       values ('$name','$email','$password','$address','$role_id','$hospital_id')";

      $result = mysqli_query($conn, $query);
      echo "<script>location.href = '/TEMP/login.php';</script>";

    }
    include("footer.php");
    
?>




<!-- form product -->
       <!-- <select name="category" id="" class="form-control mt-2" > -->
       <?php
                // while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <!-- <option value="<?php echo $data["id"]?>"><?php echo $data["category"]?></option> -->
                    <?php
                // }
                ?>
                