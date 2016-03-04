<div class="container container-main">

<h1 class="logo-brand">Order History</h1>

	<!-- search results -->
    <!-- <form class="navbar-form" id="searchbar-orders" role="search" action="/Orders/search_admin_html" method="post">
        <div class="form-group">
          	<input type="text" class="form-control" name="keyword" placeholder="Search by customer name">
        </div>
        <button type="submit" class="btn btn-default">&#128269;</button>
    </form> -->
    
	<!-- <h4 class="search-center" id="searchingfor">
        <? if (isset($searchterm)) {
          echo "Search results for: <span style='font-weight: bold;'>$searchterm</span>";
        } else {
          echo "";
        }
        ?>
  	</h4> -->

  	<div class="row">
  		<div class="col-md-12">

			<table class="table table-hover orders-table">
				<thead>
					<th class="order-id-only">Tee</th>
					<th>Order Date</th>
					<th>Destination</th>
					<th>Total</th>
					<th>Status</th>
				</thead>
				<tbody id="ajax-orders">
				<? 
				$total=0;
				foreach ($orders as $order) 
				{
					// $total+=$order['price'] * $order['qty']; 
					?>
					<tr>
						<td><button class="btn btn-info" data-toggle="popover" data-trigger="focus" title="<?=$order['name']; ?> Order Info" data-content="Order ID: <?=$order['order_id']; ?>, Quantity: <?=$order['qty']; ?>"><img src="assets/img/products/<?=$order['product_id']; ?>-small.png"</button></td>
						<td><?=date('F jS, Y', strtotime($order['created_at']))?></td>
						<td><? echo $order['street'] ." ". $order['city'] ." ". $order['state'] ." ". $order['zipcode']; ?></td>
						<td>$<?=$order['price']; ?></td>
						<td>
							<? if($order['paid'])
								{
									echo "<div class='label label-success label-order'><span class='glyphicon glyphicon-ok-circle' aria-hidden='true'></span> Paid/Shipped</div>";
								} else {
									echo "<div class='label label-danger label-order'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Not Paid</div>";
								} ?>
						</td>
					</tr>
			<? } ?> 
				</tbody>
			</table>
		</div>
	</div>
</div>