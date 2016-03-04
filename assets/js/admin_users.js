$(document).ready(function(){
// users search bar
	$.get('/Users/get_all_users_admin_html', function(res) {
	    $('#ajax-admin-users').html(res);
	});

	$('#searchbar-users').submit(function(){
		$.post('/users/search_admin_html', $(this).serialize(), function(res) {
	        $('#ajax-admin-users').html(res);
	      });

		var searchingfor = $('#searchingfor').val();
		// $('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
});