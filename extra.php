



<?php include "header.php";
    include("config.php");

 ?>

<br><br><br>
<form action="insert.php" method="post" enctype="multipart/form-data">
   <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <!-- <img src="#" alt="register picture"> -->
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box"> <br>
              <div class="heading_container"> 
                <h2>Register</h2>
              </div> <br>
                  <input type="text" name="name" required placeholder="  Enter Username" class="box"> <br><br>
                  <input type="email" name="email" required placeholder="  Enter Email" class="box"> <br><br>
                  <input type="password" name="password" required placeholder="  Enter Password" class="box"> <br><br>
                  <input type="text" name="address" required placeholder="  Enter Address" class="box"> <br><br>
                  <input type="tel" name="phone" required placeholder="  Enter Phone no." class="box"> <br><br>
                  <input type="tel" name="cell" required placeholder="  Enter Cell no." class="box"> <br><br>
                  <input type="text" name="dob" placeholder="  Enter Date Of Birth" class="box"> <br>
              <div class="btn-box">
                  <input type="submit" name="submit" class="btn1" value="     Register Now     ">
              </div> <br>
                  <p>Already have an account? <a href="login.php"><span style="color: var(--primary);">Login Now</span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>




