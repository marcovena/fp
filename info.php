<?php
require_once ('include.php');
?>
<!doctype html>
<?php get_html_tag();?>
    <head>
        <?php get_head('Info');?>
    </head>
    <body id="info">
        <div id="wrapper">
            <?php get_header_bar('info');?>
            <div id="info-wrapper">
                <div class="info-text">
                    <p>
                        Tutte le opere sono disponibili per la stampa in edizione limitata e in diversi formati, riprodotte con stampanti e inchiostri professionali di altissima qualità e corredate di certificazione Digigraphie® di Epson.
                    </p>
                    <p>
                        Per comprendere meglio il livello di dettaglio e la qualità raggiungibili in fase di stampa, è possibile passare il mouse sull'immagine alla destra e visualizzare un'anteprima ad alta risoluzione di una parte dell'immagine.
</p>
                    <p>Per una resa più fedele dei colori si consiglia la visualizzazione su monitor calibrati.
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
            &copy; All rights reserved - Francesco Paoli 2011&nbsp;
        </div>
        </div><!-- END info-wrapper -->
        <?php get_scripts_tag();?>
       
    </body>
</html>
