<?php
include 'db_connection.php';


 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
if(isset($_POST['username'], $_POST['email'],$_POST['password'])){
  $conn = OpenCon();
  // $sql = "INSERT INTO `user` ( `email`, `password`,
  // `username`) VALUES ('$email',
  // ' $password','$username')
  // ";
  $sql = "INSERT INTO `user` ( `email`, `password`,
  `username`) VALUES ('$email',
  '$password','$username')
  ";

  if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully.";
      echo "<h1 class='display-3'>Welcome ".$username."!</h1>" ;

  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

   CloseCon($conn);
}
 ?>
