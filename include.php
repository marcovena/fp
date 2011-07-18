<?php

/* get the head for the html */

function get_head($suff) {
    $toAdd = isSet($suff) ? ' - ' .$suff : '';

    echo '<title>Francesco Paoli Fine Art Photography', $toAdd, ' </title>
          <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
          <meta content="web photography portfolio francesco paoli" />
          <meta name="viewport" content="width=320" />
          
          <link rel="shortcut icon" href="images/fp-fav.ico">

          <link rel="stylesheet" type="text/css" href="css/all.css" media="screen" />
          <link rel="stylesheet" type="text/css" href="css/mobile.css" media="only screen and (min-width:200px) and (max-width:480px)"/>';


}

/* get the header for all the pages */
function get_header_bar($forPage) {

    echo '<div id="header">
                <a class="home-logo" href="index2.php" title="index2"> <div id="header-brand">
                    <h2>FRANCESCO PAOLI</h2>
                    <div id="header-divider">
                    </div>
                    <h4>fine art photography</h4>
                </div></a>               
    
                <ul class="nav-menu">
                    <li>
                        <a href="photos.php" ',    addActive($forPage, 'photos'), ' >Foto</a>';

    if($forPage == 'photos' || $forPage == 'gallery') {
        echo '<ul class="sub-menu">

                            <li>
                                <a class="active" href="gallery.php?id=0">Pano Orizzontali</a>
                            </li>
                            <li>
                                <a href="gallery.php?id=1">Pano Verticali</a>
                            </li>
                            <li>
                                <a href="gallery.php?id=2">Sblinde</a>
                            </li>
                        </ul>';
    }

    echo '</li>
                    <li>
                        <a href="info.php" ',    addActive($forPage, 'info'), ' >Info</a>
                    </li>
                    <li>
                        <a href="contact.php" ',    addActive($forPage, 'contact'), ' >Contatti</a>
                    </li>
                </ul>
            </div> ';

}

/* get the footer for the pages */

function get_footer() {
    echo '<div id="footer" >&copy; All rights reserved - Francesco Paoli 2011</div>';

}

function addActive($forPage, $placeholder) {

    if($forPage == $placeholder) {
        echo 'class="active"';

    }
}
?>