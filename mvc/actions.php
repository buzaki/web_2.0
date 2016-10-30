<?php
include("functions.php");

if($_GET['action'] == "loginSignup") {
    login_box();
}



  if($_GET['action'] == "postTweet") {
    tweet_post();
  }



  if($_GET['action'] == "toggleFollow" ){

      $this_user = $_POST['userid'];
      $uid = $_SESSION['id'];

      // check if the user is already following the clicked user btn

      $unfollow_query = "select * from isfollowing where follower ='$uid' and isfollow = '$this_user' limit 1";
      $result = mysqli_query($link, $unfollow_query);

    if(mysqli_num_rows($result) > 0 ){
      // mean he's follower and we will remove following recored

      $row = mysqli_fetch_assoc($result);

      mysqli_query($link, "delete from isfollowing where id = ". mysqli_real_escape_string($link, $row['id'])." LIMIT 1");

      echo "1";

    }else {

      // he's not following and will insert following string into db for him

      $following_query = "INSERT INTO isfollowing (follower, isfollow) VALUES ('$uid', '$this_user')";
      mysqli_query($link,$following_query);
      echo 2;

    }


  }
  ?>
