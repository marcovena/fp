/* Author: Marco Venanzi
 Includes all the site specific scripts
 */
$(document).ready(function() {

    //enable header animation
    if($('#header').length) {
        $('.sub-menu').delay(300).fadeIn(400);
    }

    //enable theme switcher
    var loc = window.location;
    var enableString = "toggle=1";
    if(loc.search.indexOf(enableString) != -1) {
        initStyleSwitcher();
    }

    //fade bio image in
    if($('body#bio').length) {
        $img = $('img.bio-image-content');

        $img.hide().delay(300).animate({
            opacity : 1,
            height : 'toggle'
        }, 1000, function() {
            // Animation complete.
        });
        
       
    }
    
     //init the form validation for sending emails
    if($('#contact-page').length) {
     InitFormValidation();
     }
    
});

//create a toggle switcher that will toggle the site theme from dark to white
function initStyleSwitcher() {
    var styleSwitcher = '<div id="style-switcher" class="not-selectable"><ul><li id="light-style-switch" class="shadow">Light</li><li id="dark-style-switch" class="shadow">Dark</li></ul></div>';

    $('body').append(styleSwitcher);

    $('#dark-style-switch').click(function() {

        $("link[rel=stylesheet]").attr({
            href : "css/all-black.css"
        });
        //$('a.home-logo').css('background-image', 'url(../images/logo-dark.png)');

    });
    $('#light-style-switch').click(function() {

        $("link[rel=stylesheet]").attr({
            href : "css/all.css"
        });

    });
}

/*
 * Initialize the contact form validation and submission
 */
function InitFormValidation() {
    var f = $(".form").validate({
        debug : true,
        rules : {
            name : "required",

            email : {
                required : true,
                email : true
            },
            text : {
                maxlength : 1000,
                minlength : 5
            }
        },
        messages : {
            name : "Per favore inserisci il tuo nome",
            email : {
                required : "Riempire campo e-mail",
                email : "Formato: nome@dominio.com"
            },
            text : {
                minlength : "Inserisci il messaggio",
                maxlength : "Limite massimo 1000 caratteri"
            }
        },
        submitHandler : function(form) {
            $(".form").ajaxSubmit({
                beforeSubmit : function() {
                    $('img.spinner').show();

                },
                // success identifies the function to invoke when the server response
                // has been received; here we apply a fade-in effect to the new content
                success : function() {
                    $('img.spinner').hide();
                    $('.output').text("Grazie per avermi contattato.").fadeIn('slow').delay(800).fadeOut('slow');
                    //TODO: metti il testo nel html
                },
            });

        } //end submit handler
    });
    //end validate
    return false;
} //end do-validate