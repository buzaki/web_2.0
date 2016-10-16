<?php
// setcookie($var, Value, EXPIRED_TIME)
setcookie("user",$_POST["email"],time()+30);



    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

        $link = mysqli_connect("localhost","admin","admin","admin");
        $error =  "";
        $success = "";
        $input_email = $_POST['email'];
        $input_password = $_POST['password'];
        $email = mysqli_real_escape_string($link,$input_email);
        $password = mysqli_real_escape_string($link,$input_password);


        if (mysqli_connect_error()) {

            die ("There was an error connecting to the database");

        }


        if ( $email == '' ) {

            $error .= "Email is Required";


        } else if ( $password == '') {

            $error .= "Password is Required";
        } else {

            $query = "SELECT `id` FROM `users` WHERE email = '$email'";

            $result = mysqli_query($link, $query);

            if (mysqli_num_rows($result) > 0) {

                $error .= "Email Is Already Registerd please Login";
            } else {

                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";

                if (mysqli_query($link, $query)) {

                    $_COOKIE['user'] = $email;
                    header("Location: cookie.php");

                } else {

                    echo "<p>There was a problem</p>";

                }

            }

        }


    }




?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style type="text/css">
        #container {
            margin: 0 auto;
            width: 80%;

        }
        #error_div {
            padding:5px;
        }

    </style>
    <title>signup form</title>
    <link rel="stylesheet" href="../php/bootstrap.min.css">
</head>
<body>
<div id="container">
    <h1>Please Register!</h1>

    <form class="form-inline" method="post">
        <div class="form-group">
            <label for="exampleInputName2">Email</label>
            <input type="email" class="form-control" id="exampleInputName2" name="email" placeholder="younrname@example.com">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Password</label>
            <input type="password" class="form-control" id="exampleInputEmail2" name="password" placeholder="anything">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <div id="error_div"><?php echo $error.$success; ?></div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="../php/jquery.min.js" ></script>
<script src="../php/tether.min.js" ></script>
<script src="../php/bootstrap.min.js" ></script>


</body>
</html>
