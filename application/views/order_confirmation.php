<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="container container-main">
  	<h1>Thank you for your order!</h1>
  	<table>
  		<tr>
  			<td>Order Number:</td>
  			<td><?=$_SESSION['insert_id'];?></td>
  		</tr>
  		<tr>
  			<td>Amount Paid:</td>
  			<td><?=$_SESSION['amount']/100;?></td>
  		</tr>
  	</table>