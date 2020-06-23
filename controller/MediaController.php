<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  $search = isset( $_GET['title'] ) ? $_GET['title'] : null;

  // we get an aary of the media after the filtering function
  $medias = Media::filterMedias( $search );

  
  // $medias = array(1 => 'January', 'February', 'March');

  // Get the user input dara
  echo "title  =".$_GET['title'];
  echo "medias =".var_dump($medias);

  require('view/mediaListView.php');

}
