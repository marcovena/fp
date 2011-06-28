$(document).ready( function() {

    doValidate();

    //validate and submit ajax form
    function doValidate() {
        var f = $(".form").validate({
            rules: {
                name: "required",

                email: {
                    required: true,
                    email: true
                },
                comment: {
                    maxlength: 200
                }
            },
            submitHandler: function(form) {
                $(".form").ajaxSubmit({
                    beforeSubmit: function () {
                        $('img.spinner').show();

                    },
                    // success identifies the function to invoke when the server response
                    // has been received; here we apply a fade-in effect to the new content
                    success: function() {
                        $('img.spinner').hide();
                        $('.output').text("Grazie per avermi contattato.").fadeIn('slow');
                    },
                });
               
            } //end submit handler
        }); //end validate
         return false;
    } //end do-validate

});