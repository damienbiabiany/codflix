<?php

require_once( 'model/history.php' );
require_once( 'model/media.php' );
require_once( 'model/user.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function profilePage() {

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
  
     
        // Get data from media table 
        $medias = Media::filterMedias( $search );
    
        
        // Get current user data
        $current_connected_user = $_SESSION['user_id'];
        // echo "session id =".$_SESSION['user_id']."<br>";

        // Get the user account  (connectded user)
        $user           = new User( );
        $userData       = $user->getUserById( $_SESSION['user_id']);

        // echo  $userData["email"] ;
        // echo  $userData["password"] ;

        // var_dump( $userData);


        // UPDATE MAIL ,PASSWORD, DELETE ACCOUNT

        require('view/profileView.php');

    

}



/***************************
* ----- PROFILE FUNCTIONS -----
***************************/
function updateAccount( $post ) {




    // Get current user data
    //$current_connected_user = $_SESSION['user_id'];
    $user           = new User( );
    // $userData       = $user->getUserById( $_SESSION[$current_connected_user ]);
  


    var_dump($post );
    echo "<br>new-email             =".$post['new-email']."<br>";
    echo "current-password          =".$post['current-password']."<br>";
    echo "new-password              =".$post['current-password']."<br>";
    echo "new_password_confirm      =".$post["new-password-confirm"]."<br>";



    // -------  Condition for update Email ------- 


    $user_id  = $_SESSION['user_id']; 
    $new_mail = $post['new-email'];

    echo "user id =".$user_id ;
    $user->updateEmailUserByID($user_id, $new_mail );

    /*
    // ------- Condition for delete user account -----
    // message confirm change password
   
    $user_id = $_SESSION['user_id'];
 
    $user->deleteUserByID($user_id);
 
  


    // ------- Condition for update password -----

    $user->updatePasswordlUserByID($user_id, $new_password);



    

    // message confirm change MailAdress
    */
    
    //require('view/profileView.php');
}
