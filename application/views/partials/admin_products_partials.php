<!-- HTML Partial Start -->

<?php 
	foreach ($products as $product) {
?>
		<tr>
			<td><img src='/assets/img/products/<?php echo $product['id']; ?>-small.png' height=75 width=75></td>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td>
				<ul class="nav nav-pills">
				  	<li>
				  		<a href="/Products/delete_product/<?=$product['id']?>" class="btn btn-danger">Delete</a>
				  	</li>
				</ul>
			</td>
		</tr>
<?php 
	} 
?>