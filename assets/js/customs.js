$(document).ready(function(){
	$('#prodthumb1').click(function(){
		var thisid = $(this).attr('prodid');
		var large = "/assets/img/products/" + thisid + "-large.png";
		// alert('The product id of this is ' + thisid +'!');
		$('#product-img-lrg').attr('src', large);
	});
	$('#prodthumb2').click(function(){
		var thisid = $(this).attr('prodid');
		var large2 = "/assets/img/products/" + thisid + "-large-2.png";
		// alert('The product id of this is ' + thisid +'!');
		$('#product-img-lrg').attr('src', large2);
	});
});
