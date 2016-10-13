<?php

class SMTPClient
{

function SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body)
{

$this->SmtpServer = $SmtpServer;
$this->SmtpUser = base64_encode ($SmtpUser);
$this->SmtpPass = base64_encode ($SmtpPass);
$this->from = $from;
$this->to = $to;
$this->subject = $subject;
$this->body = $body;

if ($SmtpPort == "") 
{
$this->PortSMTP = 25;
}
else
{
$this->PortSMTP = $SmtpPort;
}
}

function SendMail ()
{
if ($SMTPIN = fsockopen ($this->SmtpServer, $this->PortSMTP)) 
{
fputs ($SMTPIN, "EHLO ".$HTTP_HOST."\r\n"); 
$talk["hello"] = fgets ( $SMTPIN, 1024 ); 
fputs($SMTPIN, "auth login\r\n");
$talk["res"]=fgets($SMTPIN,1024);
fputs($SMTPIN, $this->SmtpUser."\r\n");
$talk["user"]=fgets($SMTPIN,1024);
fputs($SMTPIN, $this->SmtpPass."\r\n");
$talk["pass"]=fgets($SMTPIN,256);
fputs ($SMTPIN, "MAIL FROM: <".$this->from.">\r\n"); 
$talk["From"] = fgets ( $SMTPIN, 1024 ); 
fputs ($SMTPIN, "RCPT TO: <".$this->to.">\r\n"); 
$talk["To"] = fgets ($SMTPIN, 1024); 
fputs($SMTPIN, "DATA\r\n");
$talk["data"]=fgets( $SMTPIN,1024 );
fputs($SMTPIN, "To: <".$this->to.">\r\nFrom: <".$this->from.">\r\nSubject:".$this->subject."\r\n\r\n\r\n".$this->body."\r\n.\r\n");
$talk["send"]=fgets($SMTPIN,256);
//CLOSE CONNECTION AND EXIT ... 
fputs ($SMTPIN, "QUIT\r\n"); 
fclose($SMTPIN); 
//
} 
return $talk;
} 
}


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
        
        
        
    }
        
        $emailTo = "admin@id3m.net";
        
        $subject = $_POST['subject'];
        
        $content = $_POST['content'];
        
        $headers = "From: ".$_POST['email'];
        
       
        //Server Address
$SmtpServer="smtp.sendgrid.net";
$SmtpPort="25"; //default
$SmtpUser="apikey";
$SmtpPass="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";

        
        if($_SERVER["REQUEST_METHOD"] == "POST")
            {
$to = $_POST['toemail'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['content'];
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
            };

        
            
                 $done = "<div class='alert alert-success' role='alert'><p>You successfully drop us your message via SMTP </p></div>";
            
        }else {
            
           $error = "<div class='alert alert-danger' role='alert'><p>your message can't be send right now :(</p></div>";
            
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
        <label for="email">From Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        
          
             <label for="toemail">To Email address</label>
        <input type="email" name="toemail" class="form-control" id="toemail" aria-describedby="emailHelp" placeholder="Enter email">
          
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
    
      e.preventDefault()
    
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
    } else {
        
               $("form").unbind('submit').submit();
        
    }
        

});

</script>

  </body>
</html>
