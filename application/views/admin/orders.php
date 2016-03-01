<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">

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
					<th>Order_ID</th>
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
						<td><?php echo $order['street'] ." ". $order['city'] ." ". $order['state'] ." ". $order['zipcode']; ?></td>
						<!-- Get payment info from STRIPE API -->
						<td><?php echo "$200.99"; ?></td>
						<td>
							<div class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Paid"; ?><b class="caret"></b></a>
								<ul class="dropdown-menu">
								  <li><?php echo "Paid"; ?></li>
								  <li><?php echo "Not Paid"; ?></li>
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