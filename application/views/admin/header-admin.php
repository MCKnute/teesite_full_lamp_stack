<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ($this->session->userdata('is_admin') == 0) 
{
  redirect('/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="Mollie Knute, David Macias, and Pete Kang">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/customs.css" />
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/admin.css" />
    
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><strong>KMK</strong> <span style="color:blue;">admin</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- <ul class="nav navbar-nav">
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <form class="navbar-form navbar-left" id="searchbar" role="search" action="search" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="keyword" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">&#128269;</button>
              </form>
            </li>
            <li role="presentation"><a href="/Orders/index">Orders</a></li>
            <li role="presentation"><a href="/Products/index">Products</a></li>
            <li><a href="/Users/logout" type="button" class="btn btn-default">Log out</a></li> 

          </ul>
                <!-- </div> -->
        </div><!--/.navbar-collapse -->
      </div>
      
    </nav>