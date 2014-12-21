(function($) {
      $(document).ready(function() {
      	// Style Alerts
      	$(".messages").addClass("alert mbn").removeClass("messages").css('border-radius', '0');
      	$(".messages--status").addClass("alert-success").removeClass("messages--status");
      	$(".messages--warning").addClass("alert-warning").removeClass("messages--warning");
      	$(".messages--error").addClass("alert-danger").removeClass("messages--error");
      	
      	// Search
      	$('.search-block-form #edit-search-block-form--2').attr('placeholder','e.g. Buying a website');
      	$('.search-block-form #edit-keys').attr('placeholder','e.g. Buying a website');
      	$('.search-form').addClass('search-block-form');
      	$('.search-advanced .form-submit').addClass('btn btn-primary');
      	
      	
      	// Style Mailchimp Form
	$("#edit-submit").addClass("btn btn-primary btn-block btn-lead mbs").css('width', '100%');
	$("#user-register-form #edit-submit").addClass("btn btn-success btn-block").removeClass("btn-primary").attr('value','Join Now & Go VIP');
	$(".mailchimp-signup-subscribe-form #edit-submit").addClass("btn btn-success btn-block mbs");
	$('.mailchimp-signup-subscribe-form').addClass('pure-form');
	$('.mailchimp-signup-subscribe-form input').addClass('pure-u-1-1');
	$('form').addClass("pure-form");
	$('.user-register-form').addClass("pure-form-aligned");
	$('#edit-field-first-name-und-0-value').attr('placeholder','First Name');
	$('#edit-name').attr('placeholder','Username');
	$('#edit-mail').attr('placeholder','Your Email Address');
	$('#edit-pass-pass1').attr('placeholder','Password');
	$('#edit-pass-pass2').attr('placeholder','Confirm Password');
	$(".block--formblock-user-register .block__title").addClass("hide");
	
	
	

	
	});    
})(jQuery);