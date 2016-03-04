<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	    	<h2 class="product-title">Products</h2>

			<!-- search results -->
			<form class="navbar-form" id="searchbar-products" role="search" action="/Products/search_admin_html" method="post">
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
						    <!-- Error check -->
							<div class="has-error">
<?php 						if($this->session->flashdata('success_message'))
							{	?>
								<div class="alert alert-success">
									<?php echo $this->session->flashdata('success_message');?>
								</div>	
<?php 						}  ?>
						    </div>
						    <div>
<?php 						if($this->session->flashdata('error_message'))
							{	?>
								<div class="alert alert-danger">
									<?php echo $this->session->flashdata('error_message');?>
								</div>	
<?php 						}  ?>
						    </div>
						    <!-- Add Product Form -->
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

			<!-- error checks -->
			<div class="has-error">
<?php 		if($this->session->flashdata('success_message'))
			{	?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('success_message');?>
				</div>	
<?php 		}  ?>
		    </div>
		    <div>
<?php 		if($this->session->flashdata('error_message'))
			{	?>
				<div class="alert alert-danger">
					<?php echo $this->session->flashdata('error_message');?>
				</div>	
<?php 		}  ?>

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
				<tbody id="ajax-products">

				</tbody>
			</table>
		</div>
    </div>
<!-- End of Products Container -->