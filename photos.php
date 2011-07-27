<?php
require_once 'include.php';


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html>
