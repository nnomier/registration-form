<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <form action="welcome.php" method="POST" class="form-signin">
      <h1 class="featurette-heading"> Sign up</h1>
      <div class="form-group ">
        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
      </div>
  <div class="form-group ">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <input  type='password' name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<div class="form-group">
  <label></label>

</div>

<div class="form-group">
  <button  type="button" name="register" class="btn btn-lg btn-secondary">Register</button>

</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  $("button").click(function(){


    var password = $('#exampleInputPassword1').val();
    var email =$('#exampleInputEmail1').val();
    var username=$('#username').val();
    if(!email || !password ||!username )
    {
      $("label").css("visibility", "visible").text("** Please Enter All Fields");
      return false;
    }
    else if(!validateEmail(email))
    {
      $("label").css("visibility", "visible").text("** Wrong email format");
      return false;
    }
    else{
      $("label").css("visibility", "hidden");
      $.ajax({
      type: "POST",
      url: "register_db.php",
      data: {username:username, email: email , password:password },
      cache: false,
      success: function(response) {
        console.log(response+'noha');
        if(response=='success'){
         window.location.assign("welcome.php");
         console.log("successfull");
        }
        else{
          $("label").css("visibility", "visible").text("** Invalid Credentials");
          return false;
        }
           }
      });
    }
 });
	</script>

  </body>
</html>
