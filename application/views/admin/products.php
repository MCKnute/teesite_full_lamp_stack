<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	    	<h2 class="product-title">Products</h2>

			<!-- search results -->
			<form class="navbar-form" id="searchbar" role="search" action="/Products/search" method="post">
	            <div class="form-group">
	              	<input type="text" class="form-control" name="keyword" placeholder="Search for name">
	            </div>
	            <button type="submit" class="btn btn-default">&#128269;</button>
	        </form>

			<h4 class="search-center" id="searchingfor">
	            <? if (isset($searchterm)) {
	              	echo "Search results for: <span style='font-weight: bold;'>$searchterm</span>";
	            } else {
	              	echo "";
	            }
	            ?>
          	</h4>

	        <div id="topofthehead">
				<!-- add new product button via MODAL.js from bootstrap-->
				<button class="addNewproduct btn btn-primary pull-right" data-toggle="modal" data-target="#addModal" type="button">Add New Product
				</button>
				<!-- Modal for "Add New Product" -->
				<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
						    </div>
					    	<form action="/Products/add_new_product" method="post" enctype="multipart/form-data">	
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Name</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="name"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Price</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="price"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Description</label>
						    		<div class="col-sm-8">
				                        <textarea type="text" class="form-control" name="description"></textarea>
				                    </div>
					    		</div>

					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Upload Image</label>
						    		<div class="col-sm-8">
				                        <input type="file" class="form-control" name="image"/>
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
								<div class="modal-footer">
							    	<button type="submit" class="btn btn-success center-block">Add New Product</button>
							    </div>
						    </form>
						</div>
				    </div>
				</div>
			</div> <!-- end of Modal -->

			<!-- Product results -->
			<table class="table table-striped">
				<thead>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Action</th>
				</thead>
				<tbody id="ajaxproducts">
<?php 
				foreach ($products as $product) {
?>
					<tr>
						<td><img src='/assets/img/products/<?php echo $product['id']; ?>-small.png' height=75 width=75></td>
						<td><?php echo $product['id']; ?></td>
						<td><?php echo $product['name']; ?></td>
						<td><?php echo $product['price']; ?></td>
						<td><?php echo $product['description']; ?></td>
						<td>
							<ul class="nav-action nav nav-pills">
							<!-- Special -->
							  	<!-- <li><a href="#">inventory</a></li> -->
							  	<li>
							  		<button class="edit-product btn-xs btn-success" data-toggle="modal" data-target="#EditModal" type="button">Edit
				</button>
				<!-- Modal for "EDITING Product" -->
				<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Edit <?php echo $product['name']; ?></h4>
						    </div>
<?php
					        if ($this->session->flashdata("edit_error")) 
					        {
					          echo "<p> " . $this->session->flashdata("edit_error") . "</p>";
					        }
?>
					    	<form action="/Products/edit_product" method="post" enctype="multipart/form-data">
					    		
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Name</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="name"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Price</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="price"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Description</label>
						    		<div class="col-sm-8">
				                        <textarea type="text" class="form-control" name="description"></textarea>
				                    </div>
					    		</div>

					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Upload Image</label>
						    		<div class="col-sm-8">
				                        <input type="file" class="form-control" name="image" />
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
								<div class="modal-footer">
							    	<button type="submit" class="btn btn-success center-block">Submit</button>
							    </div>
						    </form>
						</div>
				    </div>
				</div><!-- end of Edit Modal -->
								</li>
							  	<li>
							  		<button href="/Products/delete_product/<?=$product['id']?>" class="btn-delete btn-xs btn-danger">Delete</button>
							  	</li>
							</ul>
						</td>
					</tr>
<?php 
				} 
?>
				</tbody>
			</table>
		</div>
    </div>
<!-- End of Products Container -->