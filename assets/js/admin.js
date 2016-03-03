$(document).ready(function(){
	$.get('/products/get_all_products_admin_html', function(res) {
	    $('#ajax-products').html(res);
	});

	$('#searchbar-products').submit(function(){
		$.post('/Products/search_admin_html', $(this).serialize(), function(res) {
	        $('#ajax-products').html(res);
	      });

		var searchingfor = $('#searchbar-products').val();
		$('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});

	// orders search bar
	$('#searchbar-orders').submit(function(){
		$.post('/Orders/search_admin_html', $(this).serialize(), function(res) {
	        $('#ajax-orders').html(res);
	      });

		var searchingfor = $('#searchbar-orders').val();
		$('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
});