<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($user_data['is_admin'] != 1) 
{
  $data['redirect_url'] = base_url('/');
}
?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	        <div id="topofthehead">
		        <!-- search bar -->
				<form class="navbar-form navbar-left" role="search">
	                <div class="form-group">
	                   <input type="text" class="form-control" placeholder="Search">
	                </div>
	                <button type="submit" class="btn btn-default">&#128269;</button>
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
	</div>
<!-- End of Products Inventory Container -->