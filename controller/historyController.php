<?php

require_once( 'model/history.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function historyPage() {

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
  
        echo $_GET['url'];

        $history = History::filterMedias( $search ) ;
        
        echo $history;

        var_dump($history);


        require('view/historyView.php');

    

}
