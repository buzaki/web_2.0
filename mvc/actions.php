<?php
include("functions.php");

if($_GET['action'] == "loginSignup") {
    
    $error = "";
    if (!$_POST['email']) {
        
        $error = "email is required";
    }
    
    if (!$_POST['password']){
        
        $error = "Password is required";
    }
    
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        
        $error = "please enter a valid email address";
    }
    
    if ($error != "")echo $error;
    if($_POST['loginActive'] == "0") {
        
        echo " sign user up";
        
    }else{
        
        echo "login ya kosomk";
        
    }
    
//    print_r($_GET);
}

?>