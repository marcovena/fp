$(document).ready( function() {
	//SLIDER GALLERY
	/*	$('.slideshow').cycle({
	fx: 'fade',
	next: '#gallery-holder .navigation a.next',
	prev: '#gallery-holder .navigation a.prev'
	});
	*/
	//fade in of the main menu

	$('.sub-menu').hide().delay(1000).slideDown('slow');

	//$("#enquiry-form").validate();

	$('#enquiry-form').validate({
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				url: 'process.php',
				success: function() {
					//$('#contact').hide();
					$('enquiry-form').append("<p class='thanks'>Grazie! Il tuo messaggio e' stato inviato.</p>")
				}
			});
		}
	});
});
