<?php
$home = array("Zaki", "Toty", "Koky", "iten");




// classic while loop

$a = 1;

while ($a <= 10) {
  echo $a;
  $a = $a + 1;
}


// while array

$i = 0;

while ($i < sizeof($home)) {
  echo $i . "<br />";
  $i++;
}

echo "<br />";

$x = 0;

while ($x < sizeof($home)) {

  echo $home[$x]. "<br />";
  $x++;
}

?>
