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
        $histories = History::filterHistories( $search ) ;

        // Get data from user table 
        $histories = History::filterHistories( $search ) ;
        
        // Get current user data
        $current_connected_user = $_SESSION['user_id'];
        //echo "session id =".$_SESSION['user_id']."<br>";

        // Get the user account  (connectded user)
        $user           = new User( );
        $userData       = $user->getUserById( $_SESSION['user_id']);



        echo "delete ".$_GET['delete'];




        // echo  $userData["email"] ;
        // echo  $userData["password"] ;

        // var_dump( $userData);

        require('view/historyView.php');

    

}


/******************************************************
 * ------- DELETE HISTORY USER DATA BY USER ID -------
*******************************************************/
function deleteHistory() {


    // parsing url query with explode
    //var_dump(explode('&', $_SERVER['QUERY_STRING']));

    $second_parameters =  explode('&', $_SERVER['QUERY_STRING'])[1];

    $type_of_deletion = explode('=', $second_parameters)[0];

    $historique_id = explode('=', $second_parameters)[1];


    echo 'type_of_deletion ='.$type_of_deletion.'<br>';
    echo 'historique_id    ='.$historique_id.'<br>';


    $historique = new History( $historique_id );
  
    if ($type_of_deletion == 'delete'):
        $historique -> deleteHistoryById($historique_id );
    else:
        $historique -> deleteAllHistory( );
    endif;


    // REDIRECT TO HISTORY PA
    
  
  
}  



