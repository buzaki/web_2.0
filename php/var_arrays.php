<?php


# set var

$name = "Zaki";
echo "<p>$name</p>";


$dad = "Hassan";

# concanate vars
echo "<p>$name.' '.$dad</p>";

# define array
$myarray = array("Zaki", "Fatma", "koky", "iten");

# print array
print_r($myarray);

echo "</br>";

# site of array
echo sizeof($myarray);

# delete item from array
// delete item from array
unset($myarray[0]);

print_r($myarray);

?>
