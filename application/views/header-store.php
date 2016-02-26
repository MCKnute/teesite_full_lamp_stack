<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/assets/js/customs.js"></script>
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
          <a class="navbar-brand" href="/"><strong>KMK</strong> Tees</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- <ul class="nav navbar-nav">
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            <li><form class="navbar-form navbar-left" role="search">
                 <div class="form-group">
                   <input type="text" class="form-control" placeholder="Search">
                 </div>
                 <button type="submit" class="btn btn-default">&#128269;</button>
               </form>
            </li>
            
            <li><a href="/about_us" type="button" class="btn btn-default navbar-btn">About Us</a></li>


            <? if ($this->session->userdata('user_session')) { ?>
              <li><a href="/Users/logout" type="button" class="btn btn-default navbar-btn">Log Out</a></li>
              
            <? } else { ?>
              <li><a href="/signin_register" type="button" class="btn btn-default navbar-btn">Log In / Register</a></li>
            <? }; ?>


            <?php 
            if ($this->cart->total() == 0){
              $cartstatus = "btn-empty";
            }else{
              $cartstatus = "btn-success";
            };
            ?>

            <li><a href="/Carts" type="button" class="btn btn-lg navbar-btn <?=$cartstatus?>"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart (<?=$this->cart->total_items();?>)</a></li>
          </ul>
                <!-- </div> -->
        </div><!--/.navbar-collapse -->
      </div>
      
    </nav>