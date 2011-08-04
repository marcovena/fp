<?php
require_once ('include.php');
?>

<!doctype html>
<?php get_html_tag();?>
<head>
    <?php get_head('Contatti');?>
</head>
<body id="contact-page">
    <div id="wrapper">
        <?php get_header_bar('contact');?>
        <div id="contact-wrapper">
            <div class="contact-intro">
                <p>
                    Per informazioni generali sulle stampe o per richiesta di
                    collaborazione è possibile contattare:
                </p>
                <p class="details">
                    <img src="images/fp-mail.png"  />
                    <br/>
                    <a href="tel:+393471971764"> (+39)347-1971764</a>
                </p>
                <p class="follow-button">
                    <a href="http://twitter.com/paolifrancesco" class="twitter-follow-button" data-show-count="true" data-lang="it" data-align="right">Follow @paolifrancesco</a>
                </p>
                <p>
                    Oppure compilare il form seguente:
                </p>
            </div>
            <div class="bio-divider"></div>
            <form class="form" accept-charset"utf-8" action="process.php" method="post">
                <p class="name">
                    <input type="text" name="name" id="name" />
                    <label for="name">
                        Nome <span class=required>*</span>
                    </label>
                </p>
                <p class="email">
                    <input type="text" name="email" id="email"/>
                    <label for="email">
                        E-mail <span class=required>*</span>
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
                <p class="output"></p>
            </form>
            <div class="clearfix"></div>
        </div>
        <!-- END WRAPPER -->
    </div>
    <?php get_scripts_tag()
    ?>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
    <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
</body>
</html> 