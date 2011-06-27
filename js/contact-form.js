$(document).ready( function() {

    $('.form').ajaxForm({

        // target identifies the element(s) to update with the server response
        target: '.output',
        beforeSubmit: function () {
            $('img.spinner').show();

        },
        // success identifies the function to invoke when the server response
        // has been received; here we apply a fade-in effect to the new content
        success: function() {
            $('img.spinner').hide();
            $('.output').text("Grazie per avermi contattato.").fadeIn('slow');
        },
        timeout:    3000
        
    });
    
     $('#enquiry-form').validate(
         
     );
});