<?php
require_once ('include.php');
?>
<!doctype html> <?php get_html_tag();?>
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
                    Per comprendere meglio il livello di dettaglio e la qualità raggiungibili in fase di stampa, è possibile visualizzare un'anteprima ad alta risoluzione passando il mouse all'interno del riquadro nero.
                </p>
                <p>
                    Per una resa più fedele dei colori si consiglia la visualizzazione su monitor calibrati.
                </p>
                <div class="epson-logo"></div>
            </div><!-- END info-text -->
            <div class="bio-divider"></div>
            <div class="info-image">
                <div class="image-dropback">
                    <a href="images/zoom-sample.jpg" class="cloud-zoom" rel="position: 'left' , zoomWidth: 260, zoomHeight: 323, adjustX: -30, adjustY: -40">
                    <img src="images/zoom-sample-block.jpg" alt="image sample" width="96"/>
                    
                    </img></a>
                </div>
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