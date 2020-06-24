

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

  if( $user_id ):
    mediaPage();
  else:
    homePage();
  endif;

endif;

/*
  
  // CREATE ROUTER
  // echo "selected media =".$_GET['media'].'<br>';
  // echo "request url =". $_SERVER['REQUEST_URI'];

  // idfilm ?media=
  
  $mediaId = $_GET['media'];

  //echo "<br>\$_GET['media'] =".$_GET['media'];

  $request = $_SERVER['REQUEST_URI'];
  //echo "<br>request =".$request;


  //echo "<br>".__DIR__ . '/index.php?media=2';

  switch ($request) {
      case '/CodFlix/index.php?media=2' :

          // display the detail of the film
          require __DIR__ . '/view/mediaDetailView.php';

          break;
      case '/' :
          require __DIR__ . '/view/index.php';
          break;
      case '' :
          require __DIR__ . '/view/index.php';
          break;
      case '/about' :
          require __DIR__ . '/view/about.php';
          break;
      default:
          http_response_code(404);
          require __DIR__ . '/view/404.php';
          break;
  }
 */