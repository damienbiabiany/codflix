

<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );

/**************************
* ----- HANDLE ACTION -----
***************************/

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':

      signupPage();
      signup( $_POST );

    break;

    case 'logout':

      logout();

    break;

  endswitch;

else:

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id  && !$_GET['url'] == 'contact'):
    mediaPage();
    
  else:
    if(!$_GET['url'] == 'contact'):
      homePage();

    endif;
  endif;

endif;


  
if( $_GET['url'] == 'contact'):
  require('view/contactView.php');
endif;