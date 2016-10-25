<?php
/**
 * Created by PhpStorm.
 * User: vksood
 * Date: 10/16/16
 * Time: 5:05 PM
 */

//save password in DB using md5 on some levels


$db_password = md5(password); // easy to crack "well-known"
echo $db_password. "<br>";

// level 2
$salt = "FuckMeIWet";
$db_password = md5($salt.password);
echo $db_password. "<br>";
// levele 3 uniq salt for each user

$row[id] = 1920;

$db_password = md5($row[id].password);
echo $db_password. "<br>";