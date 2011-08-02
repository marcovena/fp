/*$(document).ready( function() {

    InitFormValidation();

    //validate and submit ajax form
    
});

function InitFormValidation() {
        var f = $(".form").validate({
            rules: {
                name: "required",

                email: {
                    required: true,
                    email: true
                },
                text: {
                    maxlength: 1000, minlength:5
                }
            },
            messages: {
                name: "Per favore inserisci il tuo nome",
                email: {
                    required: "Riempire campo e-mail",
                    email: "Formato: nome@dominio.com"
                },
                text: {minlength:"Inserisci il messaggio"}
            }
            ,
            submitHandler: function(form) {
                $(".form").ajaxSubmit({
                    beforeSubmit: function () {
                        $('img.spinner').show();

                    },
                    // success identifies the function to invoke when the server response
                    // has been received; here we apply a fade-in effect to the new content
                    success: function() {
                        $('img.spinner').hide();
                        $('.output').text("Grazie per avermi contattato").fadeIn('slow').delay(5000).fadeOut('slow');
                    },
                });

            } //end submit handler
        }); //end validate
        return false;
    } //end do-validate
*/