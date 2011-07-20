<?php require_once('include.php')
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php get_head('Home');
        ?>
    </head>
    <body>
        <div id="wrapper">
            <?php get_header_bar('home');
            ?>

            <div id="gallery-holder" class="shadow" >
                <ul>
                    <li>
                        <img src="images/ponte-della-musica.jpg" title="Ponte della Musica" alt="slideshow 1" width="800" height="534" />
                    </li>

                </ul> <!-- END SLIDESHOW -->
            </div> <!-- END GALLERY HOLDER -->
            <?php get_footer()
            ?>
        </div><!-- END WRAPPER -->
    </body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</html>
