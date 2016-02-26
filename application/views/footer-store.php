<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	</div>
  <footer>
    <p>© 2016 Mollie Knute, David Macias, and Pete Kang</p>
    <hr>
    <h5>debug sandbox:</h5>
    <p><b>$_SESSION</b> data:</p>
    	<? var_dump($_SESSION) ;?>
    	<hr>
    <p><b>"$this->session->userdata()"</b> data:</p>	
    	<? var_dump($this->session->userdata()) ;?>
    	<hr>
    <p>cart data:</p>
    <p>Number of items in cart: <?=$this->cart->total()?></p>
    <p>Products in cart: <br><?php var_dump($this->cart->contents()); ?></p>

    <!-- <a href="/Users/logout">Log Out</a> -->
    <a href="/Carts/remove_items/all">Empty Cart</a>
  </footer>
</body>
</html>