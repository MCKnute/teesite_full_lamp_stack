<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container container-main">
    <div class="col-md-4">
		<h1>My Orders</h1>
    </div>
	<div class="dropdown col-md-2 col-md-offset-6">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Show All"; ?><b class="caret"></b></a>
		<ul class="dropdown-menu">
		  <li><?php echo "Shipped"; ?></li>
		  <li><?php echo "Cancelled"; ?></li>
		</ul>
	</div>
	<div class="table">
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