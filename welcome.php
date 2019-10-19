<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Welcome </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <?php
  require 'db_connection.php';
  $conn = OpenCon();
  $email =$_POST['email'];
  $password =$_POST['password'];
  $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'" ;

  $res=mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($res);
  $username=$row['username'];
  // $username = $_POST['username'];

  echo "<h1 class='display-3'>Welcome ".$row['username']."!</h1>" ;
  ?>
</body>

</html>
