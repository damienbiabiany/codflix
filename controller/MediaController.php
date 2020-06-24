<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  $search = isset( $_GET['title'] ) ? $_GET['title'] : null;

  // we get an array of the media after the filtering function
  $medias = Media::filterMedias( $search );

  
  // Get the user input dara
  // echo "medias =".var_dump($medias);

  $mediaId = $_GET['media'];
  echo   'mediaId ='.$mediaId;

  // get all detail of the movies here
  echo '<br>id   ='.$medias[$mediaId-1]['id'];
  echo '<br>type ='.$medias[$mediaId-1]['type'];
  echo '<br>trailer_url ='.$medias[$mediaId-1]['trailer_url'];
  echo '<br>title   ='.$medias[$mediaId-1]['title'];
  echo '<br>status  ='.$medias[$mediaId-1]['status'];
  echo '<br>summary = '.$medias[$mediaId-1]['summary'];

  // CREATE ROUTER
  // echo "selected media =".$_GET['media'].'<br>';
  // echo "request url =". $_SERVER['REQUEST_URI'];

  // idfilm
  //$idFilm = $_GET['media'];

  //$request = $_SERVER['REQUEST_URI'];
  //echo "request =".$request;




  require('view/mediaListView.php');




}
