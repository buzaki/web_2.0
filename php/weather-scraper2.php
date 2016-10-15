<?php

    $weather = "";
    $error = "";

    if ($_GET['city']) {

        $city = str_replace(' ', '', $_GET['city']);

        if(any zeft){


        }

        $file_headers = @get_headers("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {

            $error = "That city could not be found.";

        } else {

        $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

        $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
            
        if (sizeof($pageArray) > 1) {

                $secondPageArray = explode('</span></span></span>', $pageArray[1]);

                if (sizeof($secondPageArray) > 1) {

                    $weather = $secondPageArray[0];

                } else {

                    $error = "That city could not be found.";

                }

            } else {

                $error = "That city could not be found.";

            }

        }

    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Weather Scraper</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
          <link rel="stylesheet" href="bootstrap.min.css">

<style type="text/css">

    html {

  background: url(bg.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



    body {

        background: none;
        color: aliceblue;
    }

    input {

        margin: 20px 0;
    }
    .container {

        text-align: center;
        margin-top: 200px;
        width: 450px;
    }

    #weather {

        padding: 10px;
    }
      </style>
  </head>
  <body>
      <div class="container">
                    <div id="ww">

      <h1>What's the Weather?</h1>
          </div>


          <form>
  <div class="form-group">
    <label for="city"></label>
    <input type="text" class="form-control" id="city" aria-describedby="ctiy help" name="city" placeholder="Enter City Name Eg. New Delhi, London" >
  </div>
  <button type="submit" class="btn btn-primary">Search :) </button>
</form>


          <div id="weather"><?php

              if ($weather) {

                  echo '<div class="alert alert-success" role="alert">
  '.$weather.'
</div>';

              } else if ($error) {

                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';

              }

              ?></div>
      </div>

          <div id="error_div"></div>








      </div>
    <script src="jquery.min.js" ></script>
    <script src="tether.min.js" ></script>
    <script src="bootstrap.min.js" ></script>


      <script type="text/javascript">


          $("form").submit(function (e) {


        var error = "";

        if ( $("#city").val() == "" ) {

        error += "City Faild cannot be empty !</br>"

    }

    if (error != "") {

        $("#error_div").html('<div class="alert alert-danger" role="alert"><strong><p>Faild is Missing :</strong><br>' + error + '</p></div>');

        return false;

    } else {


        return true;

    }


});

      </script>


  </body>
</html>
