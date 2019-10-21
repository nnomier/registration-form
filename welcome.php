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
  session_start();
  echo "<h1 class='display-1'>Welcome ".$_SESSION['username'] ."!</h1>" ;
  //  // remove all session variables
  // session_unset();
  //
  // // destroy the session
  // session_destroy();
  ?>
</body>

</html>
