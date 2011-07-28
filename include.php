<?php

/* get the head for the html */

function get_head($suff) {
    $toAdd = isSet($suff) ? ' - ' . $suff : '';

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

    /*echo '<div id="header" class="not-selectable">
     <a class="home-logo " href="index2.php" title="index2">
     <div id="header-brand">
     <h2>FRANCESCO PAOLI</h2>
     <div id="header-divider">
     </div>
     <h4>fine art photography</h4>
     </div></a> */
    
    $gallery_id=0;
    if(isset($_GET) && (!empty($_GET))) {
    $gallery_id = $_GET['id'];
    
    }
    
    
    echo '<div id="header" class="not-selectable">
                <a class="home-logo" href="index2.php" title="index2"> 
                
                </a><div id="header-divider"></div>
                <ul class="nav-menu">
                    <li>
                        <a href="photos.php" ',     addActive($forPage, 'photos'), ' >Foto</a>';

    if($forPage == 'photos' || $forPage == 'gallery') {
        echo '<ul class="sub-menu">

                            <li>
                                <a ' . ($gallery_id==0 ? 'class="active"' : null) . ' href="gallery.php?id=0">Pano Orizzontali</a>
                            </li>
                            <li>
                                <a ' . ($gallery_id==1 ? 'class="active"' : null) . ' href="gallery.php?id=1">Pano Verticali</a>
                            </li>
                            <li>
                                <a ' . ($gallery_id==2 ? 'class="active"' : null) . ' href="gallery.php?id=2">Sblinde</a>
                            </li>
                        </ul>';
    }

    echo '</li>
                    <li>
                        <a href="info.php" ', addActive($forPage, 'info'), ' >Info</a>
                    </li>
                    <li>
                        <a href="bio.php" ', addActive($forPage, 'bio'), ' >Bio</a>
                    </li>
                    <li>
                        <a href="contact.php" ', addActive($forPage, 'contact'), ' >Contatti</a>
                    </li>
                </ul>
            </div> ';

}

/* get the footer for the pages */

function get_footer() {
    echo '<div id="footer" >&copy; All rights reserved - Francesco Paoli 2011</div>';

}

function addActive($forPage, $placeholder) {

    if($forPage == $placeholder || ($forPage == "gallery" && $placeholder == 'photos')) {
        
        echo 'class="active"';

    }
        
}
?>