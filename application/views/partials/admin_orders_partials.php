<!-- HTML Partial Start -->

<?php 
	$total=0;
	foreach ($orders as $order) 
	{
		$total+=$order['price'] * $order['qty'];
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
			<td>$<?php echo $order['price']; ?></td>
			<td>
				<div class="dropdown">
<?php 
					if($order['paid'])
					{
						echo "<p style='color:darkgreen'>Paid/Shipped";
					}
					else
					{
						echo "<p style='color:darkred'>Not Paid";
					} 
?>
					</p>

				</div>
			</td>
		</tr>
<?php 
	} 
?>