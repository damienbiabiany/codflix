<?php

require_once( 'model/history.php' );
require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function historyPage() {

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
  
        // echo $_GET['url'];

        $histories = History::filterMedias( $search ) ;
        
        //echo $histories;

        //var_dump($histories);




        $medias = Media::filterMedias( $search );

    


        require('view/historyView.php');

    

}
