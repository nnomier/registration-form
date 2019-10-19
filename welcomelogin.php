<?php

  if(isset($_POST['email'], $_POST['password'])){
    require 'db_connection.php';
    $email =$_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT *
            FROM user
            WHERE email='$email' and password = '$password'" ;
    $result=$conn->query($sql);
    if($res->num_rows > 0){
      // session_start();
      // $_SESSION['name']=$uname;
      echo"success";
    }else{
      echo"Invalid username or password";
    }
  }

  CloseCon($conn);

?>
