<?php

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/
function signup( $post ) {

    $data           = new stdClass();

    $data->email    = $post['email'];

    $data->password = $post['password'];

    $data->password_confirm = $post['password_confirm'];

    
  
    // Create user only there is a password confirmation 
    if($post['password_confirm'] ==  $post['password']):

      $user = new User( $data );
    
      $user->createUser();

      // if confirmation go to login page
      
      header( 'location: index.php?action=login');

    endif;



  
}
