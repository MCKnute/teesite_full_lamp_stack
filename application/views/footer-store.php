<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	</div>
  <footer>
    <p>© 2016 Mollie Knute, David Macias, and Peter Kang</p>

    
        <button class="btn btn-info" id="nes-option">NES</button>
        <button class="btn btn-info" id="gameboy-option">Gameboy</button>
    <hr>
    <h5>debug sandbox:</h5>
    <p><strong>$_POST</strong> data:</p>
        <? var_dump($_POST) ;?>
        <hr />
    <p><strong>"$this->session->userdata()"</strong> data:</p>	
    	<? var_dump($this->session->userdata()) ;?>
    	<hr />
    <p>cart data:</p>
    <p>Number of items in cart: <?=$this->cart->total()?></p>
    <p>Products in cart: <br /><?php var_dump($this->cart->contents()); ?></p>

    <!-- <a href="/Users/logout">Log Out</a> -->
    <!-- <a href="/Carts/remove_items/all">Empty Cart</a> -->
  </footer>
</body>
</html>