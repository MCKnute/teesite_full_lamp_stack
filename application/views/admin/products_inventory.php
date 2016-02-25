<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inventory Page / ADMIN</title>
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
						<li role="presentation"><a href="#">Orders</a></li>
						<li role="presentation" class="active"><a href="#">Products</a></li>
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
	        <div id="topofthehead">
		        <!-- search bar -->
				<form id="search" action=""  method="post"> 
					<input type="text" name="order_id" placeholder='search'>
				</form>

				<!-- add new product button will be using MODAL.js from bootstrap-->
				<form class="btn pull-right" action="" method="post">
				  	<input type="hidden" name="add_new">
				  	<button type="submit" class="btn-success">Add New Product</button>
				</form>
			</div>

			<table class="table table-striped">
				<thead>
					<th>Picture</th>
					<th>ID</th>
					<th>Product</th>
					<th>Inventory Count</th>
					<th>Quantity Sold</th>
					<th>Action</th>
				</thead>
				<tbody>
<?php 
				// foreach ($orders as $order) {
?>
					<tr>
						<td><img href="<php ; ?>"></td>
						<td><?php echo "11"; ?></td>
						<td><?php echo "Cat Image"; ?></td>
						<td><?php echo "250"; ?></td>
						<td><?php echo "300"; ?></td>
						<td>
							<ul class="nav">
							  	<li><a href="#">inventory</a></li>
							  	<li><a href="#">edit</a></li>
							  	<li><a href="#">delete</a></li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><img href="<php ; ?>"></td>
						<td><?php echo "12"; ?></td>
						<td><?php echo "Dog Image"; ?></td>
						<td><?php echo "200"; ?></td>
						<td><?php echo "400"; ?></td>
						<td>
							<ul class="nav">
							  	<li><a href="#">inventory</a></li>
							  	<li><a href="#">edit</a></li>
							  	<li><a href="#">delete</a></li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><img href="<php ; ?>"></td>
						<td><?php echo "12"; ?></td>
						<td><?php echo "NdGT Image"; ?></td>
						<td><?php echo "400"; ?></td>
						<td><?php echo "600"; ?></td>
						<td>
							<ul class="nav">
							  	<li><a href="#">inventory</a></li>
							  	<li><a href="#">edit</a></li>
							  	<li><a href="#">delete</a></li>
							</ul>
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
    <script src="/assets/js/bootstrap-transition.js"></script>
    <script src="/assets/js/bootstrap-alert.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
    <script src="/assets/js/bootstrap-dropdown.js"></script>
    <script src="/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/js/bootstrap-tab.js"></script>
    <script src="/assets/js/bootstrap-tooltip.js"></script>
    <script src="/assets/js/bootstrap-popover.js"></script>
    <script src="/assets/js/bootstrap-button.js"></script>
    <script src="/assets/js/bootstrap-collapse.js"></script>
    <script src="/assets/js/bootstrap-carousel.js"></script>
    <script src="/assets/js/bootstrap-typeahead.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>

  </body>
</html>
