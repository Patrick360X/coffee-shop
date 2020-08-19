<?php

   if(isset($_POST['submit']))
   {

     echo "IT WORKS"
     $to = "pns862000@gmail.com";
     $email = $_POST['email'];
     $preparation = $_POST['preparations'];
     $headers = "From: " .$email . "\r\n" .
     "CC: pradyumnas_T18030@isquareit.edu.in";

     mail($to,$subject,$txt,$headers);

     header("Location: survey.html")
   }



 ?>
