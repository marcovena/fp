<?php require_once('include.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <?php get_head('Contatti');
    ?>
    <body>
        <div id="wrapper">
            <?php get_header_bar('Contatti');
            ?>
            <div id="contact-wrapper">

                <div class="contact-intro">
                    <p>
                        Per informazioni generali sulle stampe o per richiesta di
                        collaborazione è possibile contattare:
                    </p>
                    <p class="details">
                       <img src="images/fp-mail.png"  />
                        <br/>
                    
                        <a href="tel:+393471971764">(+39)3471971764</a>
                    </p>
                    <p>Oppure compilare il form seguente:</p>
                </div>

                <form class="form" accept-charset"utf-8" action="process.php" method="post">

                    <p class="name">
                        <input type="text" name="name" id="name" />
                        <label for="name">
                            Nome
                        </label>
                    </p>

                    <p class="email">
                        <input type="text" name="email" id="email"/>
                        <label for="email">
                            E-mail
                        </label>
                    </p>

                    <p class="web">
                        <input type="text" name="web" id="web" />
                        <label for="web">
                            Sito
                        </label>
                    </p>

                    <p class="text">
                        <?php echo '<textarea name="text"></textarea>'
                        ?>
                    </p>

                    <p class="submit">
                        <input type="submit" name="submit" value="Invia" />
                        <img class="spinner" src="images/animated_progress.gif" width="32" alt="animated_progress"/>
                    </p>

                </form>
                <p class="output">
                </p>

            </div>
            <!-- END WRAPPER -->
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
            <script type="text/javascript" src="js/jquery.form.js"></script>
            <script type="text/javascript" src="js/contact-form.js"></script>
        </div>
    </body>
</html>
