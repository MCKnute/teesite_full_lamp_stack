<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	</div>
  <footer>
    <p>© 2016 Mollie Knute, David Macias, and Pete Kang</p>
    <h5>debug sandbox:</h5>
    <p>session data:</p>
    	<? var_dump($_SESSION) ;?>
    <p>cart data:</p>
    <p>items in cart: <?=$this->cart->total()?></p>
  </footer>
</body>
</html>