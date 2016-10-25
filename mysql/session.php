<?php
/**
 * Created by PhpStorm.
 * User: vksood
 * Date: 10/16/16
 * Time: 4:06 PM
 */

session_start();
if($_SESSION['email']) {
    echo " you are logged in";
}else {
    echo "please register";
}