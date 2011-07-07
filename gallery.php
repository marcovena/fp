<?php
require_once ('include.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php get_head('Gallery');?>
    
    </head>
    <body>
        <div id="wrapper">
            <?php get_header_bar('gallery');?>
            <div id="gallery-header">
            </div>
            <div id="gallery">
                <?php
                include ('galleryCreator.class.php');
                $gallery = new GalleryCreator('images/gallery');
                $gallery -> getGallery();
                ?>
            </div>

        </div>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/galleria/galleria-1.2.4.min.js"></script>

    <script>
        Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js');
        $("#gallery").galleria({
        width: 1000,
        height: 600,
        transition: 'fade',
        overlayOpacity: 0.8,

        });

        
    </script>
</html>
