

<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );
require_once( 'controller/historyController.php' );

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

  // redirect to  media Page
  if( $user_id  && !$_GET['url'] == 'contact'):
    mediaPage();
    
  else:

    // redirect to home Page
    if(!$_GET['url'] == 'contact'):
      homePage();

    endif;
  endif;

endif;

// redirect to contact Page
if( $_GET['url'] == 'contact'):
  require('view/contactView.php');
endif;

// redirect to mediaPge film and series
if(( $_GET['url'] == 'films' )):
  mediaPage();
  //require('view/mediaListView.php');
endif;

if(( $_GET['url'] == 'series' )):
  mediaPage();
  //require('view/mediaListView.php');
endif;


if(( $_GET['url'] == 'history' )):
  historyPage();
  //require('view/mediaListView.php');
endif;

