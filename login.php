<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <form action="config.php" method="POST" class="form-signin">
      <h1 class="featurette-heading"> Sign in</h1>
  <div class="form-group ">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button href="www.google.com" type="submit" class="btn btn-lg btn-secondary">Submit</button>
  <button href="www.google.com"  name="button"></button>
</form>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<!-- <script type="text/javascript">
  $("button").click(function(){
    if(!$('#exampleInputPassword1').val()){
      alert("please enter password pls pls ps");
      window.location.replace("http://stackoverflow.com");
    }
 });
	</script> -->

  </body>
</html>
