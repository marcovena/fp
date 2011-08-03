<?php
require_once ('include.php');
?>

<?php get_html_tag();?>
    <head>
        <?php get_head('Info');?>
        <title></title>
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
                    <a href="images/zoom-sample.jpg" class="cloud-zoom" rel="position: 'left' , adjustX: -30, adjustY:-2"><img src="images/zoom-sample-small.jpg" alt="image sample" width="260" height="323"/> </a>
                
                </div>
                <div class="clearfix"></div>
            </div>
            
        <div id="footer">
            © All rights reserved - Francesco Paoli 2011&nbsp;
        </div>
        </div><!-- END info-wrapper -->
        <?php get_scripts_tag();?>
       
    </body>
</html>
