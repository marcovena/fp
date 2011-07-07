<?php
require_once 'include.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php get_head('Foto');?>
    </head>
    <body>
        <div id="wrapper">
            <?php get_header_bar('photos');?>

            <!-- TEMP DISABLED	<div id="photo-content" > -->

            <div class="photo-content-image photo-content-image-1 shadow">
                <a href="gallery.php">
                <p>
                    Limited Edition
                </p>
                </a>
            </div>

            <div class="photo-content-image photo-content-image-2 shadow">

                <p>
                    Landscapes
                </p>
            </div>
            <div class="photo-content-image  photo-content-image-3 shadow">

                <p>
                    Various
                </p>
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
