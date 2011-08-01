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

<?php require_once('include.php');?>

<!doctype html>
<?php get_html_tag(); ?>
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
        
     <?php get_scripts_tag() ?>
     
     
    <script type="text/javascript" src="js/galleria/galleria-1.2.4.min.js"></script> 
    
    <script type="text/javascript" src="js/main.js"></script>  
    

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
    </body>
</html>
