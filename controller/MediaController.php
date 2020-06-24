<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  $search = isset( $_GET['title'] ) ? $_GET['title'] : null;

  // we get an array of the media after the filtering function
  $medias = Media::filterMedias( $search );

  $mediaId = $_GET['media'];

  //echo   'mediaId ='.$mediaId;

  $mediaType    = $medias[$mediaId-1]['type'];
  $trailer_url  = $medias[$mediaId-1]['trailer_url'];
  $title        = $medias[$mediaId-1]['title'];
  $status       = $medias[$mediaId-1]['status'];
  $summary      = $medias[$mediaId-1]['summary'];
  $release_date      = $medias[$mediaId-1]['release_date'];



  if( isset($_GET['media'])):
    require('view/mediaDetailView.php');
  else:
    require('view/mediaListView.php');
  endif;


  $url = $_GET['url'];



}



