<?php
include("functions.php");
include("header.php");

if($_GET['page'] == "timeline"){

    include("timeline.php");

}else if ($_GET['page'] == "meri") {

    include("meri.php");

    }else if($_GET['page'] == "active-users"){

    include("active-users.php");

}else if ($_GET['page'] == "search"){

    include("search.php");

}else
    {
        include("home.php");
    }



include("footer.php");
