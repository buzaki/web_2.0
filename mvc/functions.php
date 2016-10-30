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
     echo " meri dewii";

     $wherecase ="";

     $uid = $_SESSION['id'];

     $wherecase = "WHERE uid='$uid'";


 }


 
 
 $query = "select * from tweets ".$wherecase."order  by `datetime` DESC LIMIT 10";
 $result = mysqli_query($link, $query);
 
 
 if(mysqli_num_rows($result) == 0){
  
  echo " there's no tweets";



 }else {
  
  while ($row = mysqli_fetch_assoc($result)) {
   
   $uid = $row['uid'];
   
   $userQuery = "select * from users where id ='$uid' limit 1";
   $userQueryResult = mysqli_query($link, $userQuery);
   
   $user = mysqli_fetch_assoc($userQueryResult);
echo "<div id='tweets'><p>".$user['email']." "."<span class='time'>since ".time_since(time()
- strtotime($row['datetime'])). " ago</span>:</p>";
 
   echo "<p>".$row['tweet']."</p>";
   
   echo "<p><a class='toggleFollow btn btn-info' data-userid='".$uid."'>Follow</a></p></div>";
   
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
    <input type="text" class="form-control" id="SearchTweets" placeholder="Find Somthing">
  </div>
  
  <button  class="btn btn-primary">Search Tweets</button>
</div>
';
 
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



?>