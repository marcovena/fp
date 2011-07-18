<?php

class GalleryCreator {

    private $_folder;
    private $_photos = array();

    function __construct($folder, $photos =null) {
        $this -> _folder = $folder;
        $_photos = $photos;
    }

    public function getGallery() {
      
        $images = glob($this->_folder . '/image*.jpg');
        
       //echo 'siamo in getgallery';
        for($i=1; $i<=count($images); $i++){
      //echo $image . '<br/>';
            
             echo '<a href="' . $this->_folder . '/image'.$i.'.jpg">';
             echo '<img src="' . $this->_folder . '/thumb'.$i.'.jpg" alt="thumb'.$i.'.jpg"/></a>';
            
        }
         
    }
    
    public function setSource($src){
        if(isset($src))
            $this->_folder = $src;
        
    }
   // fare le thumbnail
    public function getThumbs($thumbsDir){
        
        
        
        
    }
    /* private function collectPhotos() {

     // create an array to hold directory list
     $results = array();

     // create a handler for the directory
     $handler = opendir($_folder);

     // open directory and walk through the filenames
     while($file = readdir($handler)) {

     // if file isn't this directory or its parent, add it to the results
     if($file != "." && $file != "..") {
     $results[] = $file;
     }

     }

     // tidy up: close the handler
     closedir($handler);

     // done!
     return $results;

     }
     */

}
