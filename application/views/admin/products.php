<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	        <div id="topofthehead">
		        <!-- search bar -->
				<form id="search" action=""  method="post"> 
					<input type="text" name="order_id" placeholder='search'>
				</form>

				<!-- add new product button via MODAL.js from bootstrap-->
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New Product
				</button>

				<!-- Modal for "Add New Product" -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
						    </div>
						    <div class="modal-body">
						    	<form action="" method="post">
								  	<input type="hidden" name="add_new">
								  	
								</form>
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Don't Add</button>
						    </div>
					    </div>
					</div>
				</div> 
				<!-- end of Modal -->
				
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
							<ul class="nav nav-pills">
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

			<nav class="center-block">
			 	<ul class="pagination">
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
    </div>
<!-- End of Products Container -->