
window.onload = function() {
	
	(function($) {
  
		'use strict';

		var $accountDelete = $('#delete-account'),
			$accountDeleteDialog = $('#confirm-delete'),
			transition;

		$accountDelete.on('click', function() {
			
			$accountDeleteDialog[0].showModal();
			
			transition = window.setTimeout(function() {
				$accountDeleteDialog.addClass('dialog-scale');
			}, 0.5);
			
		});

		$('#cancel').on('click', function() {
			
			$accountDeleteDialog[0].close();
			$accountDeleteDialog.removeClass('dialog-scale');
			clearTimeout(transition);
		});

	})(jQuery);
};

