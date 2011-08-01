<?php require_once('include.php');?>
    


<!doctype html>
<?php get_html_tag(); ?>
    <head>
        <?php get_head('Foto');?>
    </head>
    <body id="photo-page">
        <div id="wrapper">
            <?php get_header_bar('photos');?>

            <!-- TEMP DISABLED	<div id="photo-content" > -->

            <div class="photo-content-image photo-content-image-1 shadow">
                <a href="gallery.php?id=0">
                <p>
                    Pano Orizzontali
                </p>
                </a>
            </div>

            <div class="photo-content-image photo-content-image-2 shadow">

                <a href="gallery.php?id=1">
                <p>
                     Pano Verticali
                </p>
                </a>
            </div>
            <div class="photo-content-image  photo-content-image-3 shadow">

                <a href="gallery.php?id=2">
                <p>
                    Antaniche
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
