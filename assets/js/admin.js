$(document).ready(function(){
	$.get('products/get_all_products_admin_html', function(res) {
	    $('#ajaxproducts').html(res);
	});

	$('#searchbar').submit(function(){
		$.post('/Products/search_admin_html', $(this).serialize(), function(res) {
	        $('#ajaxproducts').html(res);
	      });

		var searchingfor = $('#searchbar').val();
		$('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
});