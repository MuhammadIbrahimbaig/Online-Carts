<?php
include("config.php");
include("header.php");
?>
<br>
<br>
<br>
<!-- contact_us -->
<div class="container mt-5 ">
        <div class="row gx-5 gy-5">
            <div class="col-md-6 col-xxl-6 col-lg-6 col-12 ">
                <h1 class="mt-5 contact_us_heading text-primary fs-bold" >Contact <span class="text-dark">us</span></h1>
                <h1 class="mt-5 contact_us_heading text-primary">Contact us</h1>
                <p class="lh-3 contact_us_paragraph">Contact Us is the primary means of communication with staff for a website visitor. Questions, comments and suggestions voluntarily submitted to the CAMPO website through electronic mail may be treated as non Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae molestias adipisci impedit cum exercitationem. Incidunt. .</p>
                <p class="lh-3 contact_us_paragraph"><b>Address:</b> Aptech North Nazimabad Center
                  Address: SD1, Block A, Near Metric Board Office, North Nazimabad, Karachi.
                  info-nn@aptech-education.com.pk
                  </p>
                  <p class="lh-3 contact_us_paragraph"><b>contact:</b> 021-36630102-3</p>
                  
            </div>
            <!-- form layout -->
            <div class="col-md-6 col-xxl-6 col-lg-6 col-12 ">
                
                  <form id="contactus">
                  <label ><b>First name</b></label> 
                      <input type="text" name="username" class="mt-5 form-control " placeholder="First name" aria-label="First name"  required>
                      <br>
                    <label ><b>Last name</b></label>
                      <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name"  required>
                      <br>
                    <label><b>Email</b></label>
                    <input type="email" name="email" class="form-control " placeholder="Email Address" aria-label="email"  required>
                    <br>
                    <label><b>password</b></label>
                    <input type="password"  name="password" class="form-control " placeholder="Enter password" aria-label="password"  required>
                    <!-- <button type="submit" class="btn btn-primary  mt-4">submit</button> -->
                  <br>
                  <!-- < a href="" -->
                  <div class="contactbtn ">
                  <button  type="submit" class="btn border-dark 
                   w-25  mt-2" id="submitbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="submit">Submit</button>
                   </div>
               <!-- </a> </form> -->
        </div>
        </div>
    </div>
    <div id="confirmation" style="display: none;">
      <p>Thank you for contacting us. We'll get back to you soon!</p>
  </div>
<br>
<br>
                      <input type="text" name="username" class="form-control " placeholder="First name" aria-label="First name ">
                      <br>
                    <label ><b>Last name</b></label>
                      <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
                      <br>
                    <label><b>Email</b></label>
                    <input type="email" name="email" class="form-control " placeholder="Email Address" aria-label="email">
                    <br>
                    <label><b>password</b></label>
                    <input type="password"  name="password" class="form-control " placeholder="Enter password" aria-label="password">
                    <!-- <button type="submit" class="btn btn-primary  mt-4">submit</button> -->
                  <br>
                  <button type="submit" class="btn btn-secondary w-50  mt-2" id="submitbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="submit">Submit</button>
                </form>
        </div>
        </div>
    </div>










<?php
include("footer.php");
?>




