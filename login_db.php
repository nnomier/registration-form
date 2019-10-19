<?php

if(isset($_POST['email'], $_POST['password'])){
   require 'db_connection.php';
   $conn = OpenCon();

   $email =$_POST['email'];
   $password =$_POST['password'];


   $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'" ;

$res=mysqli_query($conn, $sql);
   if($res){
     $numrows = mysqli_num_rows($res);
     if($numrows > 0)
     {
      $_SESSION['email']=$email;
      echo "success";
     }
     else
     {
      echo "fail";
     }

   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }


 }
 ?>
