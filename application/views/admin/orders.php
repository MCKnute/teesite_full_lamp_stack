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
	        <h3>Admin</h3>
			<form class="navbar-search" action=""  method="post"> 
				<input  type="text" name="order_id" placeholder="search">
			</form>
			<table class="table table-striped">
				<thead>
					<th>Order_ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Address</th>
					<th>Total</th>
					<th>Status</th>
				</thead>
				<tbody>
<?php 
				// foreach ($orders as $order) {
?>
					<tr>
						<td><a href="#"><?php echo "10"; ?></a></td>
						<td><?php echo "Joe Shmoe"; ?></td>
						<td><?php echo "2016/10/20 13:23:44"; ?></td>
						<td><?php echo "123 Dojo Way Seattle, WA, 98005"; ?></td>
						<td><?php echo "$200.99"; ?></td>
						<td>
							<div class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Shipped"; ?><b class="caret"></b></a>
								<ul class="dropdown-menu">
								  <li><?php echo "Shipped"; ?></li>
								  <li><?php echo "Cancelled"; ?></li>
								</ul>
							</div>
						</td>
					</tr>
<?php 
				// } 
?>
				</tbody>
			</table>

			<nav>
			 	<ul class="pagination product_pagination">
				    <li>
				      	<a href="#" aria-label="Previous">
				        	<span aria-hidden="true">&laquo;</span>
				      	</a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      	<a href="#" aria-label="Next">
				        	<span aria-hidden="true">&raquo;</span>
				      	</a>
				    </li>
			  	</ul>
			</nav>
	    </div>

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
