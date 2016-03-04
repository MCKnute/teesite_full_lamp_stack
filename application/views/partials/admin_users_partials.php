<?php 
				foreach ($users as $user) {
?>
					<tr>
						<td><?php echo $user['id']; ?></td>
						<td><?php echo $user['first_name']. " " . $user['last_name']; ?></td>
						<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['created_at']; ?></td>
						<td>
							<ul class="nav-action nav nav-pills">
							<!-- Special -->
<?php 							if($user['user_level']=="admin") 
					 			{?>
								<li>
									<span class="label label-danger">
										<?php echo "admin"; ?>
									</span>
						 		</li>
<?php 							}
					 			else 
					 			{ ?>
								<li>
									<span class="label label-default">
										<?php echo "customer"; ?>
									</span>
								</li>
<?php   						} ?>
								<li>
							  		<button class="edit-user btn-xs btn-success" data-toggle="modal" data-target="#EditModal<?=$user['id'];?>" type="button">edit
				</button>
				<!-- Modal for "EDITING user" -->
				<div class="modal fade" id="EditModal<?=$user['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Edit <?php echo $user['name']; ?></h4>
						    </div>
							<!-- Error check -->
							<div>
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
						    <!-- Edit user Form -->
					    	<form action="/Users/add_new" method="post" enctype="multipart/form-data">
					    		<input type="hidden" class="form-control" name="id" value="<?=$user['id'];?>"/>
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
				</div> <!-- end of Edit Modal -->
								</li>
							  	<li>
							  		<form action="/users/delete_user/<?=$user['id']?>" method="post">
							  			<button class="btn-delete btn-xs btn-danger" type="submit">delete</button>
							  		</form>
							  	</li>
							</ul>
						</td>
					</tr>
<?php 
				}
?>