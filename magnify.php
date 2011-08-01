<?php

error_reporting(E_ALL);
require_once ('include.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <?php get_head('Gallery');?>
        <link href="js/cloud-zoom/cloud-zoom.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            <?php get_header_bar('gallery');?>
            <div id="magnify-content">

                <h1>DEMO - IMAGE ZOOM SCRIPT</h1>
                <a href="http://upload.wikimedia.org/wikipedia/commons/c/cb/Heliophanus_white_background.jpg" class='cloud-zoom'
                rel="zoomWidth:200,zoomHeight: 200 ,adjustX: 10, adjustY:-4" width="520">
                <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Heliophanus_white_background.jpg/800px-Heliophanus_white_background.jpg" alt='Alternate image' title="Sapevatelo" />
                </a>
                
            </div>
        </div>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/cloud-zoom/cloud-zoom.1.0.2.min.js"></script>
</html>
