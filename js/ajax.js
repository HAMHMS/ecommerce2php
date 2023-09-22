

$('.leave-comment').submit(function(event){

	event.preventDefault();

	let data = {
		name : $('.name').val(),
		phone : $('.phone').val(),
		email : $('.email').val(),
		message : $('.message').val(),
	}

	// ajax request
	let url = 'functions/insert_message.php' ;

	$.post(url , data , function(res){

		$('.view').html(res);

		$('.leave-comment').trigger('reset');
		//$('.test').trigger('click');

	});
});

$(document).ready(function() {
    $('.addCart').click(function() {
    	var userId = $(this).data('user_id');
        var productId = $(this).data('product_id');
        var productName = $(this).data('name');
        var price = $(this).data('price');
        $.ajax({
            url: 'functions/addToCart.php',
            type: 'POST',
            data: { userId: userId, productId: productId, productName: productName, price: price },
            success: function(response) {
                alert('Item added to cart successfully!');
            },
            error: function() {
                alert('Error adding item to cart.');
            }
        });
    });
});

