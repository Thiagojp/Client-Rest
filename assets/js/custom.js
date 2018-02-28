(function($) {
	
	$('.more').click(function(){
		$(this).prev().find('.hide').removeClass('hide');
		
	});
	
})(jQuery);