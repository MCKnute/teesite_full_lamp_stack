$(document).ready(function(){
	// orders search bar
	$.get('/orders/get_all_orders_admin_html', function(res) {
	    $('#ajax-orders').html(res);
	});

	$('#searchbar-orders').submit(function(){
		$.post('/Orders/search_admin_html', $(this).serialize(), function(res) {
	        $('#ajax-orders').html(res);
	      });

		var searchingfor = $('#searchingfor').val();
		// $('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
});