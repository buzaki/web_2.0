<?php
print_r($_GET);




?>

<p>please enter your name ?</p>

<form>
  <input type="text" name="name" >
    <input type="submit" value="go">



</form>


<?php

print_r($_POST);

?>
<p>please enter your name ?</p>

<form method="post">
  <input type="text" name="name" >
    <input type="submit" value="go">


</form>
