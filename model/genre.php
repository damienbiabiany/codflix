<?php

require_once( 'database.php' );

class Genre {

  protected $id;
  protected $name;

  public function __construct( $user = null ) {

    if( $user != null ):
      $this->setId( isset( $user->id ) ? $user->id : null );
  
    endif;
  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setName( $name ) {
    $this->name = $name;

  }


  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->email;
  }


  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterGenres( $user_id) {

    // Open database connection
    $db   = init_db(); // from

    // Get all detail of the media from the database
    $req  = $db->prepare( "SELECT id, name FROM genre" );

    $req->execute();


    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }


}