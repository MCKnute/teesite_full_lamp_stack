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
});
