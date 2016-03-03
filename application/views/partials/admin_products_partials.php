<!-- HTML Partial Start -->

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
							  		<form action="/Products/delete_product/<?=$product['id']?>" method="post">
							  			<button class="btn-delete btn-xs btn-danger" type="submit">delete</button>
							  		</form>
							  	</li>
							</ul>
						</td>
					</tr>
<?php 
				} 
?>