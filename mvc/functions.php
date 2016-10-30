<?php
session_start();
$link = mysqli_connect("localhost","root","root","c9");
if (mysqli_connect_errno()) {
    echo "mysql connection error";
    exit();
}


// get user id by email address as fun argment
 function login($user_email) {
        global $link;
         $find_id = "SELECT * FROM users WHERE email ='$user_email'";
         $result = mysqli_query($link, $find_id);
         $row = mysqli_fetch_assoc($result);
         return $row['id'];
         // please pass email address as argment eg : login("email_address")
}
// function code end


if ($_GET['action'] == "logout"){
 session_unset();
}











function displayTweets($mode){
 
 global $link;
 
 if($mode == 'public'){
  
  $wherecase ="";
 }elseif ($mode == 'isFollowing'){


     $wherecase ="";

     $this_user = $_POST['userid'];
     $uid = $_SESSION['id'];
     $isFollowing = "select * from isfollowing where follower ='$uid'";
     $result = mysqli_query($link, $isFollowing);


         while ($row = mysqli_fetch_assoc($result)){

             $uidf = $row['isfollow'];
             if($wherecase == "") $wherecase = "WHERE";
             else $wherecase.= " OR";
             $wherecase.= " uid='$uidf'";
         }



 }elseif ($mode == 'meri'){


     $wherecase ="";

     $uid = $_SESSION['id'];

     $wherecase = "WHERE uid='$uid'";


 }elseif ($mode == 'active-users'){

$user_query = "SELECT * from users where rank > 1";
$result = mysqli_query($link,$user_query);

     if(mysqli_num_rows($result) == 0){

         echo " there's no users";



     }else {

         while ($row = mysqli_fetch_assoc($result)) {

             $user_email = $row['email'];
             echo '<div class="list-group"><a href="#" class="list-group-item list-group-item-action list-group-item-info">'. $user_email .'</a></div>';


         }
     }

     $wherecase = "WHERE id='0'";

}


 
 
 $query = "select * from tweets ".$wherecase."order  by `datetime` DESC LIMIT 10";
 $result = mysqli_query($link, $query);

 if(mysqli_num_rows($result) == 0){
  
        if($_GET['page'] != 'active-users'){
            echo " there's no tweets";
        }else {

        }




 }else {
  
  while ($row = mysqli_fetch_assoc($result)) {
   
   $uid = $row['uid'];
   
   $userQuery = "select * from users where id ='$uid' limit 1";
   $userQueryResult = mysqli_query($link, $userQuery);
   
   $user = mysqli_fetch_assoc($userQueryResult);
echo "<div id='tweets'><p>".$user['email']." "."<span class='time'>since ".time_since(time()
- strtotime($row['datetime'])). " ago</span>:</p>";
 
   echo "<p>".$row['tweet']."</p>";
   
   echo "<p><a class='toggleFollow btn btn-info' data-userid='".$uid."'>";


      $isFollowing_check = "select * from isfollowing where follower ='$uid'";
      $result_Following_check = mysqli_query($link, $isFollowing_check);

      if(mysqli_num_rows($result_Following_check) > 0 ){

          echo "UnFollow";
      }else {
          echo "Follow";
      }




      echo "</a></p></div>";
   
  }
 }
 
 
}


        function time_since($since) {
        $chunks = array(
            array(60 * 60 * 24 * 365 , 'year'),
            array(60 * 60 * 24 * 30 , 'month'),
            array(60 * 60 * 24 * 7, 'week'),
            array(60 * 60 * 24 , 'day'),
            array(60 * 60 , 'hour'),
            array(60 , 'min'),
            array(1 , 'sec')
        );

        for ($i = 0, $j = count($chunks); $i < $j; $i++) {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
            if (($count = floor($since / $seconds)) != 0) {
                break;
            }
        }

        $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
        return $print;
    }


function displaySearch() {

 echo '<div class="form-inline">
  <div class="form-group">
    <input type="hidden" name="page" value="search">
    <input type="text" class="form-control" name="q" id="SearchTweets" placeholder="Find Somthing">
  </div>
   <button type="submit" id="search" class="btn btn-primary">search!</button>
</div>';
 
}


function TweetBox() {
 
 if($_SESSION['id'] > 0){
  
  echo '<div class="form">
  <div class="form-group">
    <textarea class="form-control" id="tweetContent"></textarea>
  </div>
  <button type="submit" id="postTweet" class="btn btn-primary">Tweet</button>
</div>';
  
  
 }
 
}


function tweet_post(){
global $link;
$theTweet = $_POST['tweetData'];

if(!$theTweet){
    echo "you tweet is empty";
}else if (strlen($theTweet) > 140 ) {
    echo "your tweet is too long 'Ahmed Mouse ..is that you ?'";
}else {
    // post tweet

    $uid = $_SESSION['id'];
    $count_query ="select rank from users where id='$uid'";
    $count_result = mysqli_query($link,$count_query);
    $rows = mysqli_fetch_assoc($count_result);
    $post_count = $rows['rank'] + 1;
    $count_str = "UPDATE users SET rank='$post_count' WHERE id='$uid'";

    mysqli_query($link, $count_str);




    $sql = "INSERT INTO tweets (tweet, uid, datetime)VALUES ('$theTweet', '$uid', NOW())";




    if(mysqli_query($link, $sql)){
        echo "1";
    }else {
        // echo "error";
    }

    // end post tweet


}

}







function login_box(){


global $link;


    // check if user email is already exists

    $in_password = mysqli_real_escape_string($link, $_POST['password']);
    $email = mysqli_real_escape_string($link, $_POST['email']);


    if($_POST['loginActive'] == "0" ) {

        $query = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0 ) {

            echo "registerd";
            // code END

        }else {


            // hash new password and insert data to db and register user

            $salt =  bin2hex(openssl_random_pseudo_bytes(4));
            $hash =  hash(sha256, $in_password);
            $password_signup = hash('sha256', $salt . $hash);
            $uid = uniqid();
            $sql = "INSERT INTO users (id, email, password, passwd)
      VALUES ('$uid', '$email', '$password_signup', '$salt')";

            if(mysqli_query($link, $sql)){
                echo "1";
                $_SESSION['id'] = login($email);
            }else {
                $error = "can't register now please try again later";
            }




        }

    }
    // register code END

    else {

        // log user IN
        $sql = "SELECT `passwd`,`password` FROM users where `email`='$email'";

        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);


        $db_password = $row['password'];



        $salt =  $row['passwd'];


        $hash =  hash(sha256, $in_password);
        $password_login = hash('sha256', $salt . $hash);




        if ($password_login == $db_password){
            echo "1";

            $_SESSION['id'] = login($email);
        }else {
            echo "login_error";
        }
        // login in END
    }}


?>