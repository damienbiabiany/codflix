<?php

require_once( 'database.php' );

class Season {

  protected $id;
  protected $name;

  public function __construct( $season ) {


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

  public static function filterSeasons( $user_id) {

    // Open database connection
    $db   = init_db(); // from

    // Get all detail of the media from the database
    $req  = $db->prepare( "SELECT id, name FROM season" );

    $req->execute();


    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }


}