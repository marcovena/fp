<?php

error_reporting(E_ALL);
require_once ('include.php');
include ('galleryCreator.class.php');

$gallery_id=0;
if(!empty($_GET)) {
    $gallery_id = $_GET['id'];
    
    }

$gallery = new GalleryCreator('');

$gallery_folders = Array("images/gallery/hpano", "images/gallery/vpano", "images/gallery/standard");
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

            <!-- This is the large size gallery holder to cycle thourgh -->
            <div id="gallery">
                <?php

                $gallery -> setSource($gallery_folders[$gallery_id]);
                $gallery -> getGallery();
                ?>
            </div>

        </div>
        
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/galleria/galleria-1.2.4.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    </body>
    

    <script>
        Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js');
        $("#gallery").galleria({
            width: 1000,
            height: 600,
            transition: 'fade',
            overlayOpacity: 0.8,
            thumbCrop: true,

        });
    </script>
</html>
