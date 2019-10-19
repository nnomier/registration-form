<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <form action="welcome.php" method="POST" class="form-signin">
      <h1 class="featurette-heading"> Sign in</h1>
  <div class="form-group ">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<div class="form-group">
  <label id='error' ></label>

</div>

<div class="form-group">
  <button   type="button" class="btn btn-lg btn-secondary">Login</button>

</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $("button").click(function(){
    var password = $('#exampleInputPassword1').val();
    var email =$('#exampleInputEmail1').val();
    if(!email && !password)
    {
      $("label").css("visibility", "visible").text("** Please Enter Email and Password");
      return false;
    }
    else if(!password){
      $("label").css("visibility", "visible").text("** Please Enter Password");
      return false;
    }
    else if(!email){
      $("label").css("visibility", "visible").text("** Please Enter Email");
      return false;
    }
    else{
      $("label").css("visibility", "hidden");

      $.ajax(
				{
					url: "login_db.php",
					type: "POST",
					data: {email: email , password: password },
					success: function(data){
						if(data=='success'){
						window.location.assign("welcome.php");
						}else{
              $("label").css("visibility", "visible").text("** Invalid Credentials");
              return false;
						}
					}
				}
			);
    }
 });
	</script>

  </body>
</html>
