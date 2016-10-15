<?php

// MySQL handle
// connect to DB
// run the query
$link = mysqli_connect("localhost","admin","admin","admin");

if ($dbc = mysqli_connect ('icasesit_db<200e>', 'icasesit_me<200e>', '20172017'))

// connection check :)
if (mysqli_connect_error()) {
  die("there was an error");
} else { echo "connected". "<br />";}


// *********** insert query ***********
// $insert = "INSERT INTO `users` (`email`, `password`) values('toti@id3m.net', '12345678')";
// mysqli_query($link, $insert);

// ***********  SELECT query  ***********
// $query = "SELECT * FROM users";
//// $query = "SELECT * FROM users WHERE id = #";
//// $query = "SELECT * FROM users WHERE email LIKE 'email_id'";
// % = * in SQL
//$query = "SELECT * FROM users WHERE email LIKE '%id3m%'";
//$query = "SELECT `email` FROM users WHERE email LIKE '%id3m%'";


$test_q = mysqli_query($link, $query);

while ($data = mysqli_fetch_array($test_q)) {
  echo "<h4>Block ID = $data[id]</h4>";
  print_r($data);

}



// mysqli_query($link, $query);



// *********** update query ***********
//$update = "UPDATE `users` SET email='admin2@id3m.net' WHERE id= 1 LIMIT 1";
//mysqli_query($link, $update);
// query = "UPDATE `users` SET password='totybadr' WHERE password='password' ";
// fetch statment
//$update_name = "UPDATE `users` SET name='$name' WHERE name='me' ";

$name = "zaki's";
$username = mysqli_real_escape_string($link, $name);
echo $username;
$update = "UPDATE users SET name='$username' WHERE ID= 2 ";
mysqli_query($link, $update);


// while  loop query

$grep_q = "SELECT *  FROM users";
$q_r = mysqli_query($link, $grep_q);
while ($data = mysqli_fetch_array($q_r)) {
//  print_r($data);
//  echo "<br />";


}
?>
