<div class="container maincontainer">
    <div class="row">
        <div class="col-md-8">
         <h1>Tweets For You.</h1>
         <?php
         displayTweets('isFollowing');
         ?>

        </div>
        <div class="col-md-4">
        <?php
        displaySearch();
        echo "<hr>";
        TweetBox();


        ?>
        </div>

    </div>


</div>
