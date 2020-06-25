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
    $user           = new User( );

    $user_id              = $_SESSION['user_id']; 
    $new_mail             = $post['new-email'];
    $new_password         = $post['new-password'];
    $new_confirm_password = $post['new-password-confirm'];   
    $error_               = null;

    // echo "user_id               =".$user_id ;
    // echo "new_mail              =".$new_mail   ;
    // echo "new_password          =".$new_password ;
    // echo "new_confirm_password  =".$new_confirm_password ;

    // -------  Condition for update Email ------- 

    echo 'POST ='.$post;
    echo 'POST ='.isset($_POST);
    var_dump(isset($_POST));
    var_dump(empty($_POST));



     $user->updateEmailUserByID($user_id, $new_mail );
      
       
    
    if (!($new_password == $new_confirm_password)):
        $error_= "password doesn't match";

        // ------- Condition for update password -----

        $user->updatePasswordlUserByID($user_id, $new_password);

        require('view/profileView.php');
    endif;
    

    require('view/profileView.php');
    
    
}



function deleteAccount( ) {

    // Get current user data
    $user           = new User( );

    $user_id         = $_SESSION['user_id']; 
  
    // ------- Condition to delete user account -----
 
    $user->deleteUserByID($user_id);
 
    
    header( 'location: index.php?action=login');
}