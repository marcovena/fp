<<<<<<< HEAD
<?php require_once('include.php');?>

<!doctype html>
<?php get_html_tag(); ?>
   <head>
        <?php get_head('Info');
        ?>
        <link href="js/cloud-zoom/cloud-zoom.css" rel="stylesheet" type="text/css" />
    </head>
    <body id="info">
        <div id="wrapper">
            <?php get_header_bar('info');?>
            <div id="info-wrapper">
                <div class="info-text">
                    <p>
                        Tutte le opere sono disponibili in edizione limitata e in diversi formati di stampa e riprodotte con stampanti e inchiostri professionali di altissima qualità e corredate di certificazione Digigraphie® di Epson.
                    </p>
                    <p>
                        Passando il mouse nel riquadro in alto a sinistra dell’immagine è possibile visualizzare l’immagine alla massima risoluzione, apprezzandone il livello di dettaglio ed avendo un’idea più precisa del risultato in stampa.
                    </p>
                    <div class="epson-logo"></div>
                </div><!-- END info-text -->
                <div class="bio-divider"></div>
                <div class="info-image">
                    <a href="images/ponte-della-musica.jpg" class="cloud-zoom" rel="zoomWidth:100,zoomHeight: 100 ,adjustX: 10, adjustY:">
                    <img src="images/zoom-image.jpg" alt="image sample" width="260">
                    </a>
                </div>
                <div class="clearfix"/></div>
            </div><!-- END info-wrapper -->
            <div id="footer">
                &copy; All rights reserved - Francesco Paoli 2011 
            </div>
            <?php get_scripts_tag() ?>
    <script type="text/javascript" src="js/cloud-zoom/cloud-zoom.1.0.2.min.js"></script>
    </body>
     
</html>
