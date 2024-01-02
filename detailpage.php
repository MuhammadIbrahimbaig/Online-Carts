<?php
include ("config.php");
include ("header.php");
?>
<br><br><br>
 <div class="container" id="detailpic">
        <div class="row gx-5 gy-5">
            <div class="col-md-6 col-xxl-6 col-lg-6 col-12 ">
                <img src="" alt="" id="img" class="img-fluid">
            </div>

            <div class="col-md-6 col-xxl-6 col-lg-6 col-12 ">
            <h5 class="card-title"><?php echo $opt["prodname"]?></h5>
            <!-- <h1 class="card-title mt-5" id="title"></h1> -->
            <p class="card-text mt-5 text-primary" id="description"></p>
            <p class="card-text mt-5 text-primary" id="detail_description"></p>
            <i class="fa fa-star text-warning " aria-hidden="true"></i>
            <i class="fa fa-star text-warning" aria-hidden="true"></i>
            <i class="fa fa-star text-warning" aria-hidden="true"></i>
            <i class="fa fa-star text-warning" aria-hidden="true"></i>
            <i class="fa fa-star text-warning" aria-hidden="true"></i><br>
    <h2 class="card-text text-danger " id="price"></h2>
    <p class="card-text text-success " id="stock"></p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary  text-white w-25" >BUY NOW</button>  
