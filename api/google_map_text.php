<html>
<script src="../php/jquery.min.js" ></script>


  <script type="text/javascript">
  var position = {};

      $.ajax({

          url: "https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=AIzaSyCl23A81kpaEyXYo1SiOLoTZrZUcSOdovc",
          type: "GET",
          success : function(data){

              $.each(data['results']['0']['address_components'], function(key, value){


                if(value['types']['0'] == "neighborhood"){
                  alert(value['long_name'])
                }
              })

        }

        })
      </script>

</html>
