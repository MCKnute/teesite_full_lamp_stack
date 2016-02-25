<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
	        
	        <div id="order-description">
	        	<h4>Order ID</h4>
	        	<p><?php echo "1"; ?></p>
	        	<br>
	        	<h4>Customer Shipping Info:</h4>
	        	<p>name: <?php echo"first_name";?></p>
	        	<p>address: <?php echo"street_name";?></p>
	        	<p>city: <?php echo"city";?></p>
	        	<p>state: <?php echo"state";?></p>
	        	<p>zipcode: <?php echo"zipcode";?></p>
	        	<br>

	        	<h4>Customer Billing Info:</h4>
	        	<p>name: <?php echo"first_name";?></p>
	        	<p>address: <?php echo"street_name";?></p>
	        	<p>city: <?php echo"city";?></p>
	        	<p>state: <?php echo"state";?></p>
	        	<p>zipcode: <?php echo"zipcode";?></p>
	        </div>
			
			<div id="orders_id_table">
				<table class="table table-striped">
					<thead>
						<th>Order_ID</th>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</thead>
					<tbody>
<?php 
					// foreach ($orders as $order) {
?>
						<tr>
							<td><?php echo "10"; ?></td>
							<td><?php echo "Cat Shirt"; ?></td>
							<td><?php echo "$30.99"; ?></td>
							<td><?php echo "10"; ?></td>
							<td><?php echo "$300.99"; ?></td>
						<tr>
						<!-- get rid of this once you implement php -->
						<tr>
							<td><?php echo "12"; ?></td>
							<td><?php echo "Dog Shirt"; ?></td>
							<td><?php echo "$30.00"; ?></td>
							<td><?php echo "5"; ?></td>
							<td><?php echo "$150.00"; ?></td>
						<tr>
						<tr>
							<td><?php echo "16"; ?></td>
							<td><?php echo "NdGT Shirt"; ?></td>
							<td><?php echo "$40.00"; ?></td>
							<td><?php echo "20"; ?></td>
							<td><?php echo "$800.00"; ?></td>
						<tr>
						<!-- get rid of this once you implement php -->
						
<?php 
					// } 
?>
					</tbody>
				</table>
			

			<div id="shipped_status">
				<p id="status">Status: <?php echo "shipped"; ?></p>
				<div id="totals">
					<p>Sub total: <?php echo "$1250.99"; ?></p>
					<p>Shipping/Handling: <?php echo "$50.00"; ?></p>
					<p>Sub total: <?php echo "$1300.99"; ?></p>
				</div>
			</div>

			</div>
	    </div>
    </div> 
<!-- End of Orders ID -->