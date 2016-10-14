<?php

$city_name = str_replace(' ', '', $_GET['city']);

$saved = 'cities/'.$city_name;

if (file_exists($saved)) {
    
    
    $city_saved = file_get_contents($saved);
    
    $city_found = '<div class="alert alert-success" role="alert"><strong>'. ucfirst($_GET['city']) .'</strong><br>' .$city_saved.'</div>';

    
    
    
    
} 






        else {
    
 
    function url_exists($url) {
    if (!$fp = curl_init($url)) return false;
    return true;}
    
    

    $city_url = 'http://www.weather-forecast.com/locations/' . $city_name . '/forecasts/latest';
            
            
            
            
            
            
            
// new if
            
    if((url_exists($city_url))) {
        
        
        $full_page = file_get_contents($city_url);

        $top_page = explode('<span class="read-more-small"><span class="read-more-content"> <span class="phrase">',$full_page );

        $my_string= explode('</span></span></span>', $top_page[1]);
        
        $weather = $my_string[0];
        
        $file = 'cities/'.$city_name;

        file_put_contents($file, $weather); 
        
        $city_found = '<div class="alert alert-success" role="alert"><strong>'. ucfirst($_GET['city']) .'</strong><br>' .$weather.'</div>';

        
    } else  {
        
                            $no_city = '<div class="alert alert-danger" role="alert">Your City doesn\'t exist</div>';   
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
              
              echo $city_found;
              
              echo $no_city;
              ?>
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
