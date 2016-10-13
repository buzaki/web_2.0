<?php

if ($_POST['name']) {

  $user_list = array("admin", "root", "system", "nobody");

  $admin = false;
    
      foreach ($user_list as $value) {

    if ( $value == $_POST['name']) {

      $admin =true;
    }
  }

    if ($admin){
        echo "zeft admin";
    } else {
        
        echo " not kosom admin";
    }
    
} else {
    
    echo " put deen om user_zeft";
}

  ?>

  <p>Are you system Admin?</p>

  <form method="post">
    <input type="text" name="name" placeholder="User Name">
    <input type="submit" value=check >
  </form>
