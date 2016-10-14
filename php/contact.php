<?php

$error = "";
$done = "";
if ($_POST) {
    
    $error = "";
    
    if (!$_POST['email']) {
        
        $error .= "an email address is required<br>";
    }
    
    
    if (!$_POST['subject']) {
        
        $error .= "the subject is required<br>";
    }
    
    
    if (!$_POST['content']) {
        
        $error .= "the content is required";
    }
    
    if ( $_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {

       $error .= "an email address is invalid";
}
    
    if ($error != "" ) {
        
        $error = "<div class='alert alert-danger' role='alert'><strong><p>Faild is Missing :</strong><br>" . $error . "</p></div>";
    } else {
        
        $emailTo = "admin@id3m.net";
        
        $subject = $_POST['subject'];
        
        $content = $_POST['content'];
        
        $headers = "From: ".$_POST['email'];
        
       
        
        
        if (mail($emailTo, $subject, $content, $headers)) {
            
                 $done = "<div class='alert alert-success' role='alert'><p>You successfully drop us your message</p></div>";
            
        }else {
            
           $error = "<div class='alert alert-danger' role='alert'><p>your message can't be send right now :(</p></div>";
            
        }
        
  
    }

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<style type="text/css">
    #container {
        margin: 0 auto;
        width: 80%;
        
    }
      
      </style>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
      <div id="container">
    <h1>Get in touch!</h1>
<div id="error_div"><? echo $error.$done; ?></div>
    <form method="post">


      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>


      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" class="form-control" id="subject">
      </div>


      <div class="form-group">
        <label for="content">what you want ?</label>
        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


      </div>
      



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="jquery.min.js" ></script>
    <script src="tether.min.js" ></script>
    <script src="bootstrap.min.js" ></script>

<script type="text/javascript">

$("form").submit(function (e) {
    
    
    var error = "";
    
        if ( $("#email").val() == "" ) {
        
        error += "The Email Faild is Missing</br>"
        
    }
    
    if ( $("#subject").val() == "" ) {
        
        error += "The Subject Faild is Missing </br>"
         
    }
    
    if ( $("#content").val() == "" ) {
        
        error += "The Content Faild is Missing "

    }
    

    if (error != "") {
        
        $("#error_div").html('<div class="alert alert-danger" role="alert"><strong><p>Faild is Missing :</strong><br>' + error + '</p></div>');
        
        return false;
    } else {
        return true;
    }
        

});

</script>

  </body>
</html>
