<?php require_once('include.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <?php get_head() ?>
    <body>
        <div id="wrapper">
            <?php get_header_bar() ?>
            <div id="contact-wrapper">
                <fieldset class="shadow-blur">
                    <legend>
                        Invia un messaggio a Francesco
                    </legend>

                    <form action="process-email-form.php" method="post" id="enquiry-form">
                        <!-- NOME COGNOME -->
                        <label for="form-name">
                            Nome Cognome
                        </label>
                        <input required="required" type="text" name="form-name" placeholder="Il tuo nome" maxlength="40" autofocus="autofocus">

                        <!-- E-MAIL -->
                        <label for="email">
                            E-mail
                        </label>
                        <input required="required" type="email" name="email" placeholder="@" value="@">

                        <!-- TELEFONO-->
                        <label for="phone">
                            Telefono
                        </label>
                        <input type="tel" name="phone" placeholder="(optional)">

                        <!-- SITO -->
                        <label for="website">
                            Sito
                        </label>
                        <input type="url" name="form-url" placeholder="http://">

                        <!-- MESSAGE -->
                        <label for="form-body">
                            Messaggio
                        </label>
                        <textarea required="required" id="form-body" name="form-body" rows="5"/>

                            <input type="submit" id="form-submit" value="Invia"/>
                    </form>
                </fieldset>
            </div>
        </div> <!-- END WRAPPER -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="jquery.form.js"></script>
        <script src="js/modernizr-min.js"></script>
        <script>
            if (!Modernizr.input.placeholder) {
                $('input[placeholder], textarea[placeholder]').placeholder();
            }
        </script>

        </div>
    </body>
</html>
