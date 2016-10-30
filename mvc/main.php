<?php
include("functions.php");
include("header.php");

if($_GET['page'] == "timeline"){

    include("timeline.php");

}else if ($_GET['page'] == "meri") {

    include("meri.php");

    }else
    {
        include("home.php");
    }



include("footer.php");
