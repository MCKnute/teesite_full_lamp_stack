$(document).ready(function(){
// products search bar
	$.get('/products/get_all_products_admin_html', function(res) {
	    $('#ajax-products').html(res);
	});

	$('#searchbar-products').submit(function(){
		$.post('/Products/search_admin_html', $(this).serialize(), function(res) {
	        $('#ajax-products').html(res);
	      });

		var searchingfor = $('#searchingfor').val();
		// $('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
});