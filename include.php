<?php

/* get the head for the html */

function get_head() {
    echo '<head>
        <title>Francesco Paoli Fine Art Photography - Home</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
       <meta content="web photography portfolio francesco paoli" />
        <link rel="shortcut icon" href="images/fp-fav.ico">

        <link rel="stylesheet" type="text/css" href="css/all.css" media="screen" />
    </head>';
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
                        <a href="photos.php" ',  addActive($forPage, 'photos'), ' >Foto</a>';
     
      if($forPage == 'photos'){
          echo '<ul class="sub-menu">

                            <li>
                                <a class="active" href="#">Limited Edition Pano</a>
                            </li>
                            <li>
                                <a href="#">Landscapes</a>
                            </li>
                            <li>
                                <a href="#">Various</a>
                            </li>
                        </ul>';}
                        
       echo     '</li>
                    <li>
                        <a href="info.php" ',  addActive($forPage, 'info'), ' >Info</a>
                    </li>
                    <li>
                        <a href="contact.php" ',  addActive($forPage, 'contact'), ' >Contatti</a>
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