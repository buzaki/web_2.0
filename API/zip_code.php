<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Postcode Finder</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../php/bootstrap.min.css">
      <style>
           .container {
      
            text-align: center;
            width: 50%;
      }
        
          }
      </style>
  </head>
  <body>
      <div class="container">
    <h1>Postcode Finder</h1>
      <p>enter the partial address to get the postcode</p>
      <div id="msg"></div>
     <form>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter partial address">
    
           
  <button class="btn btn-primary" id="find_zip">Find</button>
         </fieldset>
</form>
          
      </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../php/jquery.min.js"></script>
     <script src="../php/bootstrap.min.js"></script>
    <script src="../php/tether.min.js.1"></script>
      
            <script type="text/javascript">
                
                
               $("#find_zip").click( function(e) {
                   
                   e.preventDefault();
                    var address = encodeURI($("#address").val())
          $.ajax({

              url: "https://maps.googleapis.com/maps/api/geocode/json?address="+ address +"&key=AIzaSyCl23A81kpaEyXYo1SiOLoTZrZUcSOdovc",
              type: "GET",
              success : function(data){
                  
                  if(data['status']  != "OK"){
                      
                  $("#msg").html('<div class="alert alert-warning" role="alert"> <strong>Postcode Not Found!<br></strong></div>');

                      
                  } else {
                  
                  $.each(data['results']['0']['address_components'], function(key ,value) {
                                                                               
                        if(value['types']['0'] == "postal_code"){
                            
                    $("#msg").html('<div class="alert alert-success" role="alert"> <strong>Postcode Found!<br></strong>PostCode For Your Address is: ' + value['long_name']+ '</div>');
                      
                    //  alert(value['long_name']);
                  }                                                       
                                                                               })
                  
                  }
              }
          }
                 )
                 })
          
          </script>

  </body>
</html>



