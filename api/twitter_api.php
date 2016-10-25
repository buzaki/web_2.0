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
      
                    <style type="text/css">


              body {
                color:black;

                background: none;

              }

              .container {
                
                text-align: center;
                margin-top: 50px;
                width: 450px;

              }

              input {

                margin: 20px 0;

              }
                        h1 {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
                        
      </style>
  </head>
  <body>
      <div class="container">
    <h1>Postcode Finder</h1>
      <div id="msg"></div>

     <form action="api.php" method="post">
  <fieldset class="form-group">
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter the partial address to get the postcode">
  <button class="btn btn-primary" id="find_zip">Find</button>
         </fieldset>
</form>
          
      </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../php/jquery.min.js"></script>
     <script src="../php/bootstrap.min.js"></script>
    <script src="../php/tether.min.js.1"></script>
      

  </body>
</html>



