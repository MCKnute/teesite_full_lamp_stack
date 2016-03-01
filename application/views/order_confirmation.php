<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="container container-main">
  	<h1>Thank you for your order!</h1>
  	<table class="">
  		<tr>
  			<td><h3>Order Number# </h3></td>
  			<td><h3><?=$_SESSION['insert_id'];?></h3></td>
  		</tr>
  		<tr>
  			<td><h3>Amount Paid:</h3></td>
  			<td><h3><?=$_SESSION['amount']/100;?></h3></td>
  		</tr>
  	</table>
    <a class="btn btn-success" href="/">Continue Shopping!</a>
    <br><br>