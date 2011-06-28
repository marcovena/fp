<?php
require_once ('include.php');
?>
<!DOCTYPE html>
<html>

    <?php get_head();?>
    <body>
        <div id="wrapper">
            <?php get_header_bar('gallery');?>
            <div id="gallery-header">
            </div>
            <div id="gallery">
                <a href="images/gallery/image1.jpg">
                <img src="images/gallery/thumb1.jpg" alt="" />
                </a>
                <a href="images/gallery/image2.jpg">
                <img src="images/gallery/thumb2.jpg" alt="" />
                </a>
                <a href="images/gallery/image3.jpg">
                <img src="images/gallery/thumb3.jpg" alt="" />
                </a>
                <a href="images/gallery/image4.jpg">
                <img src="images/gallery/thumb4.jpg" alt="" />
                </a>
                <a href="images/gallery/image5.jpg">
                <img src="images/gallery/thumb5.jpg" alt="" />
                </a>
                <a href="images/gallery/image1.jpg">
                <img src="images/gallery/thumb1.jpg" alt="" />
                </a>
                <a href="images/gallery/image2.jpg">
                <img src="images/gallery/thumb2.jpg" alt="" />
                </a>
                <a href="images/gallery/image3.jpg">
                <img src="images/gallery/thumb3.jpg" alt="" />
                </a>
                <a href="images/gallery/image4.jpg">
                <img src="images/gallery/thumb4.jpg" alt="" />
                </a>
                <a href="images/gallery/image5.jpg">
                <img src="images/gallery/thumb5.jpg" alt="" />
                </a>

                <a href="images/gallery/image1.jpg">
                <img src="images/gallery/thumb1.jpg" alt="" />
                </a>
                <a href="images/gallery/image2.jpg">
                <img src="images/gallery/thumb2.jpg" alt="" />
                </a>
                <a href="images/gallery/image3.jpg">
                <img src="images/gallery/thumb3.jpg" alt="" />
                </a>
                <a href="images/gallery/image4.jpg">
                <img src="images/gallery/thumb4.jpg" alt="" />
                </a>
                <a href="images/gallery/image5.jpg">
                <img src="images/gallery/thumb5.jpg" alt="" />
                </a>
                <a href="images/gallery/image1.jpg">
                <img src="images/gallery/thumb1.jpg" alt="" />
                </a>
                <a href="images/gallery/image2.jpg">
                <img src="images/gallery/thumb2.jpg" alt="" />
                </a>
                <a href="images/gallery/image3.jpg">
                <img src="images/gallery/thumb3.jpg" alt="" />
                </a>
                <a href="images/gallery/image4.jpg">
                <img src="images/gallery/thumb4.jpg" alt="" />
                </a>
                <a href="images/gallery/image5.jpg">
                <img src="images/gallery/thumb5.jpg" alt="" />
                </a>
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
