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
    </footer>
      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
  </body>
</html>