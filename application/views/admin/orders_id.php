<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Orders Page / ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/stylesheets/admin.css" rel="stylesheet">

  	<!--  AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
	        <div class="container">
				<div class=".navbar-collapse.collapse">
					<ul class="nav nav-pills">
						<li role="presentation"><h4 class="brand">KMK Shirts</h4></li>
						<li role="presentation" class="active"><a href="#">Orders</a></li>
						<li role="presentation"><a href="#">Products</a></li>
						<form class="navbar-form pull-right" action="" method="">
							<input class="span2" type="hidden" name="logout">
							<button type="submit" class="btn-danger">log off</button>
						</form>
					</ul>
				</div><!--/.nav-collapse -->
	        </div>
      	</div>
    </div>

    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	        
	        <div id="order-description">
	        	<h4>Order ID</h4>
	        	<p><?php echo "1"; ?></p>
	        	<br>
	        	<h4>Customer Shipping Info:</h4>
	        	<p>name: <?php echo"first_name";?></p>
	        	<p>address: <?php echo"street_name";?></p>
	        	<p>city: <?php echo"city";?></p>
	        	<p>state: <?php echo"state";?></p>
	        	<p>zipcode: <?php echo"zipcode";?></p>
	        	<br>

	        	<h4>Customer Billing Info:</h4>
	        	<p>name: <?php echo"first_name";?></p>
	        	<p>address: <?php echo"street_name";?></p>
	        	<p>city: <?php echo"city";?></p>
	        	<p>state: <?php echo"state";?></p>
	        	<p>zipcode: <?php echo"zipcode";?></p>
	        </div>
			
			<div id="orders_id_table">
				<table class="table table-striped">
					<thead>
						<th>Order_ID</th>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</thead>
					<tbody>
<?php 
					// foreach ($orders as $order) {
?>
						<tr>
							<td><?php echo "10"; ?></td>
							<td><?php echo "Cat Shirt"; ?></td>
							<td><?php echo "$30.99"; ?></td>
							<td><?php echo "10"; ?></td>
							<td><?php echo "$300.99"; ?></td>
						<tr>
						<!-- get rid of this once you implement php -->
						<tr>
							<td><?php echo "12"; ?></td>
							<td><?php echo "Dog Shirt"; ?></td>
							<td><?php echo "$30.00"; ?></td>
							<td><?php echo "5"; ?></td>
							<td><?php echo "$150.00"; ?></td>
						<tr>
						<tr>
							<td><?php echo "16"; ?></td>
							<td><?php echo "NdGT Shirt"; ?></td>
							<td><?php echo "$40.00"; ?></td>
							<td><?php echo "20"; ?></td>
							<td><?php echo "$800.00"; ?></td>
						<tr>
						<!-- get rid of this once you implement php -->
						
<?php 
					// } 
?>
					</tbody>
				</table>
			

			<div id="shipped_status">
				<p id="status">Status: <?php echo "shipped"; ?></p>
				<div id="totals">
					<p>Sub total: <?php echo "$1250.99"; ?></p>
					<p>Shipping/Handling: <?php echo "$50.00"; ?></p>
					<p>Sub total: <?php echo "$1300.99"; ?></p>
				</div>
			</div>

			</div>
	    </div>

	    <div>
			<!-- <div class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Action</a></li>
				  <li><a href="#">Another action</a></li>
				  <li><a href="#">Something else here</a></li>
				  <li class="divider"></li>
				  <li class="nav-header">Nav header</li>
				  <li><a href="#">Separated link</a></li>
				  <li><a href="#">One more separated link</a></li>
				</ul>
			</div> -->
	    </div>

	      <!-- Example row of columns -->
	    <hr>

	    <footer>
	        <p>&copy; KMK Shirts 2016</p>
	    </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>

  </body>
</html>
