<?php
include ('auth.php');
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;


$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$content = $connection->get("account/verify_credentials");

//print_r($content);

// grep tweets
$tweets = $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

//$kos = $_POST['tweet'];
//$statues = $connection->post("statuses/update", ["status" => $kos]);




foreach ($tweets as $tweet) {


    if ($tweet->favorite_count >= '2'){
        $statuss = $connection->get("statuses/oembed", ["id" =>  $tweet->id]);
        //print_r($statuss);
         $statuses->html;
        echo "<br>";
    }


}


?>
