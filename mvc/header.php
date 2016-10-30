<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="more.css" type="text/css" />
    <style type="text/css">
        
    </style>
  </head>
  <body>
          <!-- navbar -->
      
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="?">Twitter</a>
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="?page=timeline">My Timeline <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=meri">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=active-users">Active-Users</a>
    </li>
  </ul>
  <div class="form-inline float-xs-right">
    <?php
     if($_SESSION['id']) {
     echo  '<a href="?action=logout" class="btn btn-danger">logout</a>';
     }else {
      echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Login/Signup</button>';
     }
    ?>
  </div>
</nav>