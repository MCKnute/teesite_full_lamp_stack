<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$cart=$this->cart->contents();
// var_dump($cart);
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
				</thead>
				<tbody>
<?php 
				foreach ($cart as $product) {
?>
					<tr id="<?= $product['id']; ?>">
						<td><img href="<?= 'nothing.jpg' ?>"></td>
						<td><?= $product['id']; ?></td>
						<td><?= $product['name']; ?></td>
						<td><?= $product['qty']; ?></td>
						<td>
							<ul class="nav nav-pills">
							  	<li><a id="<?= $product['id']; ?>" class="remove" href="/Carts/remove_item/<?= $product['rowid']; ?>">Remove From Cart</a></li>
							</ul>
						</td>
					</tr>
<?php 
				} 
?>
				</tbody>
			</table>
			<div id="checkoutmodal">
				<!-- add new product button will be using MODAL.js from bootstrap-->
				<form class="btn pull-right" action="" method="post">
				  	<input type="hidden" name="checkout">
				  	<button type="submit" class="btn-success">Checkout</button>
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