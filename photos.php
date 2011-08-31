<?php require_once('include.php');?>
    

<!doctype html>
<?php get_html_tag(); ?>
    <head>
        <?php get_head('Foto');?>
    </head>
    <body id="photo-page">
        <div id="wrapper">
            <?php get_header_bar('photos');?>
           
            <div class="photo-content-image photo-content-image-1 shadow">
                <a href="gallery.php?id=0">
                <p>
                    Panoramiche Orizzontali
                </p>
                </a>
            </div>

            <div class="photo-content-image photo-content-image-2 shadow">

                <a href="gallery.php?id=1">
                <p>
                     Panoramiche Verticali
                </p>
                </a>
            </div>
            <div class="photo-content-image  photo-content-image-3 shadow">

                <a href="gallery.php?id=2">
                <p>
                    Sceneries
                </p>
                </a>
            </div>
            <!--	</div> FOTO CONTENT-->
            <div id="footer">
                &copy; All rights reserved - Francesco Paoli 2011 
            </div>
        </div><!-- END WRAPPER -->
         <?php get_scripts_tag() ?>
    </body>
</html>
