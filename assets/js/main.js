(function($) {
	let offset = 4;
	$('.hat-posts__more-button').on('click', function(e) {
		e.preventDefault();
		
		$.ajax({
			url: HAT_DATA.ajax_url,
			type: 'POST',
			data: {action: 'hat_more_posts', offset: offset}
		})
		.then(res => {
			console.log(res);
			offset = offset + 4;
			
			if(res.success) {

				if(res.data.found) {
					$('.hat-posts__wrapper').append(res.data.html);
				}
				
				if(parseInt(HAT_DATA.total_hats.publish, 10) - offset < 0) {
					$(this).closest('.hat-posts__more').hide()
				}
			}
			
		})
		.fail(err => {
			console.log(err);
		})
	})

	//menu mobile

	$('.mobile-bar').on('click', function() {
	
		$('.menu-wrapper').toggleClass('shown');
	})
})(jQuery)