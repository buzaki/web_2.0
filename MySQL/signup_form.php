<?php
include('form_sign.html');

          $link = mysqli_connect("localhost","admin","admin","admin");


        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];

    if($name == ''){
        echo "<p>name is required</p>";
    }elseif ($email = ''){
        echo "<p>the email is required</p>";
    }elseif ($password = ''){
        echo "<p>the password is required</p>";
    }

        echo $name ."<br />". $email . "<br />". $password;

        $insert = " INSERT INTO `users` (`name`, `email`, `password`) values('$name', '$email', '$password') ";




?>
