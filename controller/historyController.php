<?php

require_once( 'model/history.php' );
require_once( 'model/media.php' );
require_once( 'model/user.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function historyPage() {

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
  
     
        // Get data from media table 
        $medias = Media::filterMedias( $search );
      
        // Get data from history table 
        $histories = History::filterMedias( $search ) ;

        // Get data from user table 
        $histories = History::filterMedias( $search ) ;
        
        // Get current user data
        $current_connected_user = $_SESSION['user_id'];
        //echo "session id =".$_SESSION['user_id']."<br>";

        // Get the user account  (connectded user)
        $user           = new User( );
        $userData       = $user->getUserById( $_SESSION['user_id']);


        // echo  $userData["email"] ;
        // echo  $userData["password"] ;

        // var_dump( $userData);

        require('view/historyView.php');

    

}



/******************************************************
 * ------- DELETE HISTORY USER DATA BY  USER ID -------
*******************************************************/
function deleteHistoryById( $id) {
  
  
    
}


/*********************************************************
 * ------- EMPTY ALL HISTORY USER DATA BY USER ID -------
**********************************************************/
function deleteAllHistory() {


  
}

