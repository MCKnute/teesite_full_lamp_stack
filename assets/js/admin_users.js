$(document).ready(function(){
// users search bar
	$.get('/User/get_all_users', function(res) {
	    $('#ajax-admin-users').html(res);
	});

	$('#searchbar-users').submit(function(){
		$.post('/Users/search_admin', $(this).serialize(), function(res) {
			console.log(res);
	        $('#ajax-admin-users').html(res);
	      });

		var searchingfor = $('#searchingfor').val();
		// $('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
});