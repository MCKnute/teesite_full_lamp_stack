<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// var_dump($orders); die();
?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	        
	        <div id="order-description">
	        	<h4>Customer</h4>
	        	<p>Name: <?php echo $orders[0]['first_name'] . " " . $orders[0]['last_name'];?></p>
	        	<p>Shipping Address: <?php echo $orders[0]['street'];?></p>
	        	<p>City: <?php echo $orders[0]['city'];?></p>
	        	<p>State: <?php echo $orders[0]['state'];?></p>
	        	<p>Zipcode: <?php echo $orders[0]['zipcode'];?></p>
	        	<br>
	        </div>
			
			<div id="orders_id_table">
				<table class="table table-striped">
					<thead>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</thead>
					<tbody>
<?php 
					foreach ($orders as $order) {
?>
						<tr>
							<td><?php echo $order['product_id']; ?></td>
							<td><?php echo $order['name']; ?></td>
							<td>$<?php echo $order['price']; ?></td>
							<td><?php echo $order['qty']; ?></td>
							<td class="dollars">$
								<?php echo (number_format( ($order['price'] * $order['qty']), 2, '.', " ")); ?>
							</td>
						<tr>					
<?php 
					 } 
?>
					</tbody>
				</table>
			

			<div id="shipped_status">
				<p>fake data below:</p>
				<p id="status">Status: <?php echo "shipped"; ?></p>
				<div id="totals">
					<p>Sub total: <?php echo "$1250.99"; ?></p>
					<p>Shipping/Handling: <?php echo "$0"; ?></p>
					<p>Sub total: <?php echo "$1300.99"; ?></p>
				</div>
			</div>

			</div>
	    </div>
    </div> 
<!-- End of Orders ID -->