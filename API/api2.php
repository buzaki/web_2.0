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
         $posts = $statuses->html;
        echo "<br>";
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Postcode Finder</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../php/bootstrap.min.css">

    <style type="text/css">


        body {
            color:black;

            background: none;

        }

        .container {

            text-align: center;
            margin-top: 50px;
            width: 450px;

        }

        input {

            margin: 20px 0;

        }
        h1 {
            text-shadow: 0 1px 0 #ccc,
            0 2px 0 #c9c9c9,
            0 3px 0 #bbb,
            0 4px 0 #b9b9b9,
            0 5px 0 #aaa,
            0 6px 1px rgba(0,0,0,.1),
            0 0 5px rgba(0,0,0,.1),
            0 1px 3px rgba(0,0,0,.3),
            0 3px 5px rgba(0,0,0,.2),
            0 5px 10px rgba(0,0,0,.25),
            0 10px 10px rgba(0,0,0,.2),
            0 20px 20px rgba(0,0,0,.15);
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Twitter API</h1>
    <div id="msg">
        <?php

        echo $posts;


        ?>



    </div>


</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="../php/jquery.min.js"></script>
<script src="../php/bootstrap.min.js"></script>
<script src="../php/tether.min.js.1"></script>


</body>
</html>
