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
						<th>Product Size</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</thead>
					<tbody>
<?php 
					$total=0;
					foreach ($orders as $order) {
						$total+=$order['price'] * $order['qty'];
?>
						<tr>
							<td><?php echo $order['product_id']; ?></td>
							<td><?php echo $order['name']; ?></td>
							<td><?php echo $order['size']; ?></td>
							<td>$<?php echo $order['price']; ?></td>
							<td><?php echo $order['qty']; ?></td>
							<td class="dollars">$
								<?php echo (number_format( ($order['price'] * $order['qty']), 2, '.', " ")); ?>
							</td>
						<tr>					
<?php 
					 } 
?>						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>Total:</td>
							<td class="dollars">$
								<?php echo (number_format( ($total), 2, '.', " ")); ?>
							</td>
						<tr>	
					</tbody>
				</table>
			

			<div id="shipped_status">
				<p id="status">Status: <?php 
								if($order['paid'])
									{
										echo "<i style='color:white'>Shipped";
										}
									else
									{
										echo "<i style='color:darkred'>Not Shipped";
									} ?></i>
				
			</div>

			</div>
	    </div>
    </div> 
<!-- End of Orders ID -->