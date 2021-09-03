<?php
/**
 * Plugin Name: Yet Another PDF Viewer
 * Plugin URI: http://matteopicasso.it
 * Description: Easy HTML5.0 compliant PDF viewer
 * Version: 1.0
 * Author: Matteo Picasso
 * Author URI: http://matteopicasso.it
 */

add_shortcode( 'pdfviewer', 'pdf_viewer' );

function pdf_viewer($atts, $content = null) {

  if ( !empty($content) ){

   $pdfjs_url =  plugin_dir_url( __FILE__ ).'PDFjs/web/viewer.html?file='.$content;
   $return_string = '<iframe class="pdfjs-viewer" src="'.$pdfjs_url.'" width="1000px" height="1200px">"></iframe> ';

   return $return_string;
  }
  else {
   return "Error PDF URL";
 }
}

 ?>
