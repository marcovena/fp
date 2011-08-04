<?php
require_once ('include.php');
?>
<!DOCTYPE html>
<?php
get_html_tag();
?>
<head>
    <?php get_head('bio');?>
</head>
<body id="bio">
    <div id="wrapper">
        <?php get_header_bar('bio');?>
        <div id="bio-wrapper">
            <div class="bio-text-content">
                <p>
                    Nato nel 1980 a Roma, inizia gli studi presso la Scuola Romana di Fotografia dove approfondisce le propria tecnica attraverso un intenso utilizzo di attrezzatura a pellicola, sviluppando e stampando in autonomia le proprie foto.
                </p>
                <p>
                    Pur realizzando tra gli altri lavori anche reportage geografici e di viaggio, si specializza ben presto nella fotografia paesaggistica, dove concentra la maggior parte del proprio impegno.
                </p>
                <p>
                    Utilizza attrezzatura digitale, ma predilige per gli scatti di paesaggio l’uso di una macchina panoramica grande formato, scansionando le immagini con scanner a tamburo ad alta risoluzione e curando personalmente l’intero processo che va dalla postproduzione alla stampa della sua intera collezione di opere fotografiche,
                </p>
                <p>
                    Nel 2011 ottiene il riconoscimento Bronze Award al concorso Epson international pano award per tre delle fotografie presentate.
                </p>
            </div>
            <div class="bio-divider"></div>
            <img class="bio-image-content" src="images/bio-image-content.png" alt="bio image content" title="Epson Awarded Photo" width="300"/>
            <div class="clearfix"></div>
        </div><!-- END BIO-WRAPPER -->
        <div id="footer">
            &copy; All rights reserved - Francesco Paoli 2011 
        </div>
    </div><!-- END BIO-WRAPPER -->
    <?php get_scripts_tag();?>
</body>
</html> 