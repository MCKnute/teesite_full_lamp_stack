<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="jumbotron">

			<h2 class="product-title">Orders</h2>

			<!-- search results -->
	        <form class="navbar-form" id="searchbar-orders" role="search" action="/Orders/search_admin_html" method="post">
	            <div class="form-group">
	              	<input type="text" class="form-control" name="keyword" placeholder="Search by customer name">
	            </div>
	            <button type="submit" class="btn btn-default">&#128269;</button>
	        </form>
	        
			<h4 class="search-center" id="searchingfor">
	            <? if (isset($searchterm)) {
	              echo "Search results for: <span style='font-weight: bold;'>$searchterm</span>";
	            } else {
	              echo "";
	            }
	            ?>
          	</h4>

			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Address</th>
					<th>Total</th>
					<th>Status</th>
				</thead>
				<tbody id="ajax-orders">

				</tbody>
			</table>

			<!-- special -->
			<!-- <nav>
			 	<ul class="pagination product_pagination">
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
			</nav> -->
	    </div>
    </div> 
<!-- End of Orders Container -->