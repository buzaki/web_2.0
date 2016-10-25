<?php
$con = mysqli_connect("localhost","admin","admin","admin");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {

    echo " MySQL Server Connected :)";
}

echo "<br />";
$query = "SELECT * FROM users";

if ( $result = mysqli_query($con,$query)) {

  echo "query is done";
} else {
  echo " no connection ya mintak";
}


echo "<br />";

$row = mysqli_fetch_array($result);

echo "<br />";


for ($i = 0; $i <= sizeof($row); $i++) {

  echo $row[$i] . "<br />";
}

echo "<br /> your email is : " . $row['email'];
echo "<br />  your passd is : " . $row['password'];

?>
