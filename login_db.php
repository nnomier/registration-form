<?php


if(isset($_POST['email'], $_POST['password'])){
   require 'db_connection.php';
   $conn = OpenCon();

   $email =$_POST['email'];
   $password = password_verify($_POST['password'], $existingHashFromDb);

   $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'" ;

$res=mysqli_query($conn, $sql);
   if($res){
     $numrows = mysqli_num_rows($res);
     if($numrows > 0)
     {  session_start();
       $res=mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($res);
      $username=$row['username'];
      $_SESSION['email']=$email;
      $_SESSION['username']=$username;
      echo "success";
     }
     else
     {
      echo "fail";
     }

   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }

   CloseCon($conn);
 }
 ?>
