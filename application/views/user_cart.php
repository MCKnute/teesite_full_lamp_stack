<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$cart=$this->cart->contents();
require_once 'vendor/stripe_key.php';
?>

    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">
			<table class="table table-striped">
				<thead>
					<th>Picture</th>
					<th>ID</th>
					<th>Product</th>
					<th>Quantity</th>
					<th>Action</th>
					<th>Price</th>
				</thead>
				<tbody>
<?php 
				foreach ($cart as $product) {
?>
					<tr>
						<td><img href="<?= 'nothing.jpg' ?>"></td>
						<td><?= $product['id']; ?></td>
						<td><?= $product['name']; ?></td>
						<td><?= $product['qty']; ?></td>
						<td>
							<ul class="nav nav-pills">
							  	<li><a id="<?= $product['id']; ?>" class="remove" href="/Carts/remove_item/<?= $product['rowid']; ?>">Remove From Cart</a></li>
							</ul>
						</td>
						<td><?= $product['price']; ?></td>
					</tr>
<?php 
				} 
?>
				<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<ul class="nav nav-pills">
							  	<li><a href="/Carts/remove_items/all">Remove All From Cart</a></li>
							</ul>
						</td>
						<td><?php 
						$total = 0;
						$itemcount=0;
						foreach($cart as $product){
								$itemcount+=$product['qty'];
								$total+=$product['price'];
							}
							echo $total;
							$_SESSION['amount'] = $total*100;
							?></td>
					</tr>
				</tbody>
			</table>
			<div id="checkoutmodal" style="display:<?php if($total==0){
					echo 'none';
				}
				else
					{
						echo 'inline-block';
					} ?>">
				<!-- add new product button will be using MODAL.js from bootstrap-->
				<form action="/Carts/process" method="POST">
				  <script
				    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				    data-key="<?=$stripe['public_key']?>"
				    data-amount="<?=$total*100?>"
				    data-name="KMK Tees"
				    data-billing-address="true"
				    data-shipping-address="true"
				    data-allow-remember-me="true"
				    data-label="Buy Now"
				    data-description="<?=$itemcount?> Shirts ($<?=$total?>)"
				    data-email="<?=($_SESSION['email']); ?>"
				    data-image="/assets/img/white.png"
				    data-locale="auto">
				  </script>
				</form>
			</div>
			<nav class="center-block">
			 	<ul class="pagination">
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
			</nav>
		</div>
    </div>
<!-- End of Products Container -->