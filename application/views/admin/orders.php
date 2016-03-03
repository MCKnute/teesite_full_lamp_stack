<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">

			<h2 class="product-title">Orders</h2>

			<!-- search results -->
	        <form class="navbar-form" id="searchbar" role="search" action="/Orders/search" method="post">
	            <div class="form-group">
	              	<input type="text" class="form-control" name="keyword" placeholder="Search for name">
	            </div>
	            <button type="submit" class="btn btn-default">&#128269;</button>
	        </form>
	        
			<h4 class="search-center">
	            <? if (isset($searchterm)) {
	              echo "Search results for: <span style='font-weight: bold;'>$searchterm</span>";
	            } else {
	              echo "";
	            }
	            ?>
          	</h4>

			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Address</th>
					<th>Total</th>
					<th>Status</th>
				</thead>
				<tbody>
<?php 
				foreach ($orders as $order) 
				{
?>
					<tr>
						<td>

							<form action="/Orders/get_products_from_order/<?php echo $order['id']; ?>" method="post">
								<input type="hidden" name="<?php echo $order['id']; ?>">
								<input type="submit" value="<?php echo $order['id']; ?>">
							</form>
						<!-- 	<a href="/Orders/get_products_from_order/<?=$order['id']?>"><?php echo $order['id']; ?></a> -->
						</td>
						<td><?php echo $order['first_name'] ." ". $order['last_name']; ?></td>
						<td><?php echo $order['created_at']; ?></td>
						<td><?php echo 'FROM STRIPE API'; ?></td>
						<!-- <td><?php echo $order['street'] ." ". $order['city'] ." ". $order['state'] ." ". $order['zipcode']; ?></td> -->
						<!-- Get payment info from STRIPE API -->
						<td><?php echo "$200.99"; ?></td>
						<td>
							<div class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php 
									if ($order['paid']==1) {
										echo "Paid";
									}
									else
									{
										echo "Not Paid";
									}
?>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
								  	<li>
								  		<a href="#">
										<?php $order['paid'] = 1; echo "Paid"; ?>
										</a>
								  	</li>
								  	<li role="separator" class="divider"></li>
								  	<li>
										<a href="#">
										<?php $order['paid'] = 0; echo "Not Paid"; ?>
										</a>
								  	</li>
								</ul>
							</div>
						</td>
						<!-- STRIPE API -->
					</tr>
<?php 
				} 
?>
				</tbody>
			</table>

			<!-- special -->
			<!-- <nav>
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
			</nav> -->
	    </div>
    </div> 
<!-- End of Orders Container -->