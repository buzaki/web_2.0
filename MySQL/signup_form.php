<?php

          $link = mysqli_connect("localhost","admin","admin","admin");

        //echo print_r($_POST);

        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];

        echo $name ."<br />". $email . "<br />". $password;

        $insert = " INSERT INTO `users` (`name`, `email`, `password`) values('$name', '$email', '$password') ";
        mysqli_query($link, $insert);


//
?
<html>
<title>Sign up FORM</title>
</html>
<head>

  <link rel="stylesheet" href="../php/bootstrap.min.css">
<script src="../php/jquery.min.js" ></script>
<script>
    function checkPasswordMatch() {
      var password = $("#password2").val();
      var confirmPassword = $("#password2").val();

      if (password != confirmPassword)
          $("#checkpassword").html("Passwords do not match!");
      else
          $("#checkpassword").html("Passwords match.");
  }

  $(document).ready(function () {
     $("#password2, #password1").keyup(checkPasswordMatch);
  });
</script>

  <style>

#go {
margin:0 auto;
width: 300px;
}
      </style>

</head>
    <div class="container">
      <br />
<h2>Rregister Information</h2><br />
    <div id="signup">
      <form method="post">

        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Your Name">
          </div>
        </div>


        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control form-control-sm" id="smFormGroupInput" placeholder="you@example.com">
          </div>
        </div>


        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control form-control-sm" id="password1" placeholder="FuckMeIWet">
          </div>
        </div>


            <div class="form-group row">
              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control form-control-sm" id="password2" placeholder="FuckMeIWet">
              </div>
            </div>
              <div id="checkpassword">

              </div>

              <div class="form-group row" id="go">
                <div class="col-sm-10">
                  <input type="submit" class="form-control form-control-sm" name="go" value="register">
                </div>
              </div>


      </form>
    </div>
    </div>




<script src="../php/tether.min.js" ></script>
<script src="../php/bootstrap.min.js" ></script>

</head>
</html>
