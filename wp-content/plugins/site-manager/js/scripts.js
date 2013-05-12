jQuery(document).ready(function($) {

	$("input[name='lm_email_add']").blur(function() {
		$.ajax({ 
			type: 'POST',
			data: 'lm_email_add=' + $(this).attr('value') + '&action=listing_manager_email_check',
			url: ajaxurl,
			beforeSend: function() {
				$('#email_info').html('Checking email...');
			},
			success: function(data) {
				if(data == "valid") {
					$('#email_info').html("email is okay!");
				} else {
					$('#email_info').html("You have entered an invalid email address.");
				}
			}

		});
	});
});