$(document).ready(function(){

	$('#prodthumb1').click(function(){
		var thisid = $(this).attr('prodid');
		var large = "/assets/img/products/" + thisid + "-large.png";
		$('#product-img-lrg').attr('src', large);
	});
	$('#prodthumb2').click(function(){
		var thisid = $(this).attr('prodid');
		var large2 = "/assets/img/products/" + thisid + "-large-2.png";
		$('#product-img-lrg').attr('src', large2);
	});
	$('#prodthumb3').click(function(){
		var thisid = $(this).attr('prodid');
		var large3 = "/assets/img/products/" + thisid + "-large-3.png";
		$('#product-img-lrg').attr('src', large3);
	});
	$('#prodthumb4').click(function(){
		var thisid = $(this).attr('prodid');
		var large4 = "/assets/img/products/" + thisid + "-large-4.png";
		$('#product-img-lrg').attr('src', large4);
	});

	var getbasepartial = "/application/views/partials/";

	// console.log(getbasepartial);

	$.get('welcome/get_all_products_html', function(res) {
	    $('#ajaxproducts').html(res);
	});


	$('#searchbar').submit(function(){
		$.post('/welcome/search_html', $(this).serialize(), function(res) {
	        $('#ajaxproducts').html(res);
	      });

		$('#hero-img').attr('src','/assets/img/heroes/search.png').attr('id','small-hero-img');
		$('#small-hero-img').attr('src','/assets/img/heroes/search.png');
		var searchingfor = $('#searchingfor').val();
		$('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});

	$('#teamshirts').click(function(){

		var searchingfor = 'team';

		$.ajax({
		  type: "POST",
		  url:"/welcome/search_html",
		  data: {keyword: searchingfor},
		  success: function(res) {
		    $('#ajaxproducts').html(res);
		    }
		});

		$('#hero-img').attr('src','/assets/img/heroes/search.png').attr('id','small-hero-img');
		$('#small-hero-img').attr('src','/assets/img/heroes/search.png');
		$('#filterheadliner').html('Searching for '+searchingfor);
		return false;
	});
	// var searchterm ="";
	// function postSearch(searchterm){
	// 	$.post('/welcome/search_html', {keyword: searchterm}.serialize(), function(res) {
	//         $('#ajaxproducts').html(res);
	//       });

	// 	$('#hero-img').attr('src','/assets/img/heroes/search.png').attr('id','small-hero-img');
	// 	var searchingfor = $('#searchingfor').val();
	// 	$('#filterheadliner').html('Searching for '+searchingfor);
	// 	return false;
	// }

	// 

	// $('#gameboy-option').click(function(){
	// 	$('#gameboyfile').attr('rel','stylesheet');
	// });
	// $('#nes-option').click(function(){
	// 	$('#gameboyfile').attr('rel','nofollow');
	// });
});

$(function () {
  $('[data-toggle="popover"]').popover()
});



// $(document).on('click', '#gameboy-option', function(){
// 	 	alert('you did teh change!'); 
// 	}   
// 	return false;
//  );

// $('input:radio[name="cssoptions"]').click(function(){
// 	if ($('#gameboy-option').is(':checked')) {
// 	 	alert('you did the thing!');
// 	    $('#gameboyfile').attr('rel','stylesheet');
// 	 });



$(document).on('click', "a.ajax-list", function() {
    var categorysend = $(this).attr('id');
    // alert('My category is '+categorysend); 
	$.get('/welcome/categories_html/'+categorysend, $(this).serialize(), function(res) {
	    $('#ajaxproducts').html(res);
      });
	$('#hero-img').attr('src','/assets/img/heroes/'+categorysend+'designs.png').attr('id','small-hero-img');
	$('#small-hero-img').attr('src','/assets/img/heroes/'+categorysend+'designs.png');
	var description = "";
	if(categorysend == "cheapest") {
		description = "value. You're gonna get a deal!";
	}
	if(categorysend == "featured") {
		description = "featured. You're gonna get our best tees!";
	}
	if(categorysend == "mostpopular") {
		description = "popularity. You're gonna be popular!";
	}
	if(categorysend == "newest") {
		description = "newest. You're gonna be a trendsetter!";
	}
	if(categorysend == "fanciest") {
		description = "fanciness. You're gonna get our pricey tees!";
	}
	if(categorysend == "alphabetical") {
		description = "name, alphabetically from A to Z.";
	}
	$('#filterheadliner').html('Sorting by: '+description);
    return false;      

});

// $(document).on('click', "a.static-list", function() {
//     var categorysend = $(this).attr('id');
    // alert('My category is '+categorysend); 
    // $(document).attr('href','/#'+categorysend);
    // alert('/#'+categorysend);
	// $.get('/welcome/categories_html/'+categorysend, $(this).serialize(), function(res) {
	//     $('#ajaxproducts').html(res);
 //      });
 	// return false;   
// });
