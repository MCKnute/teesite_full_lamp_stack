<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	    	<h2 class="product-title">Users</h2>

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
				<button class="add-user btn btn-primary pull-right" data-toggle="modal" data-target="#addModal" type="button">Add New User
				</button>
				<!-- Modal for "Add New User" -->
				<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Add New User</h4>
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
					    	<form action="/Users/add_new" method="post" enctype="multipart/form-data">
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">First Name</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="first_name"/>
				                    </div>
					    		</div>	
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Last Name</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="last_name"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Email</label>
						    		<div class="col-sm-8">
				                        <input type="text" class="form-control" name="email"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Password</label>
						    		<div class="col-sm-8">
				                        <input type="password" class="form-control" name="password"/>
				                    </div>
					    		</div>
					    		<div class="form-group">
					    			<label class="col-sm-3 control-label">Confirm Password</label>
						    		<div class="col-sm-8">
				                        <input type="password" class="form-control" name="confirmpw"/>
				                    </div>
					    		</div>			
								<div class="modal-footer">
							    	<button type="submit" class="btn btn-success center-block">Add New User</button>
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

			<!-- Users results -->
			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Created At</th>
					<th>Action</th>
				</thead>
				<tbody id="ajax-admin-users">

				</tbody>
			</table>
		</div>
    </div>
<!-- End of Users Container -->