<?php require_once('include.php')
?>


<!doctype html>
<?php get_html_tag(); ?>
    <head>
        <?php get_head('Home');?>
    </head>
    <body>
        <div id="wrapper">
            <?php get_header_bar('home');?>

            <div id="gallery-holder" class="shadow" >
                <img src="images/ponte-della-musica.jpg" title="Ponte della Musica" alt="slideshow 1" width="690" height="495" />
            </div>
            <!-- END GALLERY HOLDER -->
            <?php get_footer()
            ?>
        </div><!-- END WRAPPER -->
        <?php get_scripts_tag()
    ?>
    </body>
    
</html>
