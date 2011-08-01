<?php

/* get the head for the html */

function get_html_tag() {
    echo '<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
    <!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->';
}

function get_head($suff) {
    $toAdd = isSet($suff) ? ' - ' . $suff : '';

    echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
          <meta content="web photography portfolio francesco paoli" />
         

          <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
          Remove this if you use the .htaccess -->
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">' .
          
          '<title>Francesco Paoli Fine Art Photography', $toAdd, ' </title>
          
          <meta name="description" content="">
          <meta name="author" content="Francesco Paoli | Fine Art Photography">

          <!-- Mobile viewport optimized: j.mp/bplateviewport -->
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="shortcut icon" href="/favicon.ico"> 
          <link rel="apple-touch-icon" href="/apple-touch-icon.png">
          <link rel="stylesheet" href="css/style.css?v=2">
          
       <!--   <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />  -->
      <!--    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="only screen and (min-width:200px) and (max-width:480px)"/> -->
      
      <script src="js/libs/modernizr-1.7.min.js"></script>
      ';

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

    $gallery_id = 0;
    if(isset($_GET) && (!empty($_GET))) {
        $gallery_id = $_GET['id'];

    }

    echo '<div id="header" class="not-selectable">
                <a class="home-logo" href="index2.php" title="index2"> 
                
                </a><div id="header-divider"></div>
                <ul class="nav-menu">
                    <li>
                        <a href="photos.php" ',      addActive($forPage, 'photos'), ' >Foto</a>';

    if($forPage == 'photos' || $forPage == 'gallery') {
        echo '<ul class="sub-menu">

                            <li>
                                <a ' . ($gallery_id == 0 ? 'class="active"' : null) . ' href="gallery.php?id=0">Pano Orizzontali</a>
                            </li>
                            <li>
                                <a ' . ($gallery_id == 1 ? 'class="active"' : null) . ' href="gallery.php?id=1">Pano Verticali</a>
                            </li>
                            <li>
                                <a ' . ($gallery_id == 2 ? 'class="active"' : null) . ' href="gallery.php?id=2">Sblinde</a>
                            </li>
                        </ul>';
    }

    echo '</li>
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

function get_scripts_tag(){
   echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src="js/libs/jquery-1.5.1.min.js"">\x3C/script>")</script>
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->
  
   <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->
  
  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site\'s ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>';
    
}

function addActive($forPage, $placeholder) {

    if($forPage == $placeholder) {
        echo 'class="active"';
    }
}
?>