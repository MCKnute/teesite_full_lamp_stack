<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	        <div id="topofthehead">
				<!-- add new product button via MODAL.js from bootstrap-->
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New Product
				</button>

				<!-- Modal for "Add New Product" -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Product</h4>
						    </div>
					    	<form class="form-horizontal" action="/Products/add_new_product" method="post">
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Name</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="name" />
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Price</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="price" />
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Description</label>
						    		<div class="col-sm-8">
				                        <textarea type="text" class="form-control" name="description"></textarea>
				                    </div>
					    		</div>
					    		
					    	<!-- STRECH GOALS -->
					    		<!-- <div class="form-group">
					    			<label  class="col-sm-3 control-label">Categories</label>
						    		<div class="dropdown col-sm-3">
										<select name="categories" class="form-control">
											<option name="cat">Cat</option>
											<option name="dog">Dog</option>
											<option name="ndgt">Neil deGrasse Tyson</option>
										</select>
									</div>
					    		</div> -->

					    	<!-- STRECH GOALS -->
								<!-- <br>
								<label>add new category </label><input type="text" name="category"/>
								<br>
								<label>images</label><button type="submit" class="btn btn-default">upload image</button>
								<br> -->				
								<div class="modal-footer">
							    	<button type="submit" class="btn btn-success center-block">Add New Product</button>
							    	<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Don't Add</button> -->
							    </div>
						    </form>
						</div>
				    </div>
				</div>
			</div> <!-- end of Modal -->

			<!-- search results -->
			<h4>
	            <? if (isset($searchterm)) {
	              echo "Search results for: <span style='font-weight: bold;'>$searchterm</span>";
	            } else {
	              echo "";
	            }
	            ?>
          	</h4>

			<table class="table table-striped">
				<thead>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
				<!-- Special -->
					<!-- <th>Inventory Count</th> -->
					<!-- <th>Quantity Sold</th> -->
					<th>Action</th>
				</thead>
				<tbody>
<?php 
				foreach ($products as $product) {
?>
					<tr>
						<td><img src='/assets/img/products/<?php echo $product['id']; ?>-small.png' height=75 width=75></td>
						<td><?php echo $product['id']; ?></td>
						<td><?php echo $product['name']; ?></td>
						<td><?php echo $product['price']; ?></td>
					<!-- Special -->
						<!-- <td><?php echo $product['total_qty']; ?></td> -->
						<!-- <td><?php echo "300"; ?></td> -->
						<td><?php echo $product['description']; ?></td>
						<td>
							<ul class="nav nav-pills">
							<!-- Special -->
							  	<!-- <li><a href="#">inventory</a></li> -->
							  	<!-- <li>
							  		<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Edit Product</button>
							  	</li> -->
							  		<!-- <a href="#">edit</a></li> -->
							  	<li>
							  		<!-- <form action='/Products/delete_product?id="<?php $product['id']; ?>"' method="post">
							  			<button type="submit" class="btn btn-danger">delete</button>
							  		</form> -->
							  		<a href="/Products/delete_product/<?=$product['id']?>" class="btn btn-danger">Delete</a>
							  	</li>
							</ul>
						</td>
					</tr>
<?php 
				} 
?>
				</tbody>
			</table>

		<!-- Special -->
			<!-- <nav class="center-block">
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
			</nav> -->
		</div>
    </div>
<!-- End of Products Container -->