<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$cart=$this->cart->contents();
require_once 'vendor/stripe_key.php';
?>

    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">

	    	<div class="row">
	    		<h1 class="text-center">Shopping Cart</h1>
	    		<h2 class="text-center"><a href="/" class="btn btn-default btn-lg">Back To Store</a></h2>
	    	</div>
			<table class="table table-striped cart-table">
				<thead>
					<th>Picture</th>
					<th>Name</th>
					<th>Size</th>
					<th>Quantity</th>
					<th>Action</th>
					<th>Price</th>
				</thead>
				<tbody>
<?php 
				$total=0;
				foreach ($cart as $product) {
					$total+=$product['price'] * $product['qty'];
?>
					<tr>
						<td><img src="assets/img/products/<?=$product['size']['ShirtID'];?>-small.png"></td>
						<td><?= $product['name']; ?></td>
						<td><?=$product['size']['Size'];?></td>
						<td><?= $product['qty']; ?></td>
						<td><a id="<?= $product['id']; ?>" class="remove btn text-danger" type="button" href="/Carts/remove_item/<?= $product['rowid']; ?>"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Remove From Cart</a></td>
						<td>$<?= $product['price']*$product['qty']; ?></td>
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
							<a type="button" class="remove btn btn-danger" href="/Carts/remove_items/all">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
								Empty Cart
							</a>
						</td>
						<td style="font-weight: bold; font-size: larger">$<?php 
						$total = 0;
						$itemcount=0;
						foreach($cart as $product){
								$itemcount+=$product['qty'];
								$total+=$product['price']*$product['qty'];
							}
							echo $total;
							$_SESSION['amount'] = $total*100;
							?></td>
					</tr>
				</tbody>
			</table>
			<div class="row text-center">
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
					    src="https://checkout.stripe.com/checkout.js" 
					    class="stripe-button"
					    data-key="<?=$stripe['public_key']?>"
					    data-amount="<?=$total*100?>"
					    data-name="KMK Tees"
					    data-billing-address="true"
					    data-shipping-address="true"
					    data-allow-remember-me="true"
					    data-label="Complete Purchase Now"
					    data-description="<?=$itemcount?> Shirts ($<?=$total?>)"
					    data-email="<?=($_SESSION['email']); ?>"
					    data-image="/assets/img/icons/kmk_icon.png"
					    data-locale="auto">
					  </script>
					</form>
				</div>
			</div>
		</div>
    </div>
<!-- End of Products Container -->