<?php
$conn = mysqli_connect("localhost","root" ,"","hospitaldb");
   if($conn){
    //   echo "Data base connect";
   }
   else{
      echo  "not connected";
   }
   ?>