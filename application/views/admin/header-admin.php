<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ($this->session->userdata('is_admin') == 0) 
// if ($_SESSION['is_admin'] != 1) 
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/"><strong>KMK</strong> <span style="color:blue;">admin</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li role="presentation"><a href="/Orders/index" id="admin-navbar">Orders</a></li>
            <li role="presentation"><a href="/Products/index" id="admin-navbar">Products</a></li>
            <li><a href="/Users/logout" type="button" class="btn btn-default">Log out</a></li>
          </ul>
                <!-- </div> -->
        </div><!--/.navbar-collapse -->
      </div>
      
    </nav>