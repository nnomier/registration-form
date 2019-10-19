<?php
include 'db_connection.php';


 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password = password_hash($password, PASSWORD_DEFAULT);

if(isset($_POST['username'], $_POST['email'],$_POST['password'])){
  $conn = OpenCon();

  $sql = "SELECT * FROM `user` WHERE `email` = '$email'" ;

  $res=mysqli_query($conn, $sql);
  if($res){
    $numrows = mysqli_num_rows($res);
    if($numrows > 0)
    {
      echo "fail";
    }
    else{
      $sql = "INSERT INTO `user` ( `email`, `password`,
      `username`) VALUES ('$email',
      '$password','$username')
      ";
      mysqli_query($conn, $sql);

      session_start();
      $_SESSION['username']=$username;
      echo "success";
    }
}




   CloseCon($conn);
}
 ?>
