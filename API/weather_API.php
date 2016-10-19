<?php
$weather = "";
$error = "";

if($_GET['city']) {

    function weather($x)
    {
        $api_key = "abc717f9a5bd5c77e29fe4f21f338a15";
        $call = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . urlencode($x) . "&appid=" . $api_key . "");
        $array = json_decode("$call", true);
        return $array;

    }

    $array = weather($_GET['city']);

    if ($array['cod'] == '200') {

        $wind_speed_1 = $array['wind']['speed'];
        $wind_speed_2 = intval($wind_speed_1);
        $wind_speed = intval($wind_speed_2 * 3600 / 1000);
        $weather .= $wind_speed;
        $sky = $array[weather][0][description];


    } else {
        $error .= "That city could not be found";
    }
}   else {


}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title>Weather Scraper</title>
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../php/bootstrap.min.css">

      <style type="text/css">
      
      html { 
          background: url(bg.jpg) no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          }
        
          body {
              color: #f6f6f6;

              background: none;
              
          }
          
          .container {
              
              text-align: center;
              margin-top: 100px;
              width: 450px;
              
          }
          
          input {
              
              margin: 20px 0;
              
          }
          
          #weather {
              
              margin-top:15px;
              
          }
         
      </style>
      
  </head>
  <body>
    
      <div class="container">
      
          <h1>What's The Weather?</h1>
          
          
          
          <form>
  <fieldset class="form-group">
    <label for="city">Enter the name of a city.</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Tokyo" value = "<?php echo $_GET['city']; ?>">
  </fieldset>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      
          <div id="weather"><?php 
              
              if ($weather != "") {
                  
                  echo '<div class="alert alert-success" role="alert"><strong>City : </strong>'.$_GET['city'].' <br>Wind Speed is '.$wind_speed.' km/hr<br> and '.$sky.'</div>';
              //    print_r($array);
                  
              } else if ($error != "") {
                  
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
                  
              } else {

                  echo '<div class="alert alert-info" role="alert">Please submit City Name Eg: Cairo , New Delhi</div>';

              }
              
              ?></div>
      </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="../php/jquery.min.js"></script>
    <script src="../php/bootstrap.min.js"></script>
  </body>
</html>