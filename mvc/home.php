<div class="container maincontainer">
    <div class="row">
        <div class="col-md-8">
         <h1>Recent Tweets</h1>
         <?php
         displayTweets('public');
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