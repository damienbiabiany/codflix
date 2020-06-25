<?php

require_once( 'database.php' );

class History {

  protected $id;
  protected $user_id;
  protected $media_id;
  protected $start_date;
  protected $finish_date;
  protected $watch_duration;

  public function __construct( $history ) {

    $this->setId( isset(  $history->id ) ?  $history->id : null );

  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setGenreId( $genre_id ) {
    $this->genre_id = $genre_id;
  }

  public function setTitle( $title ) {
    $this->title = $title;
  }

  public function setType( $type ) {
    $this->type = $type;
  }

  public function setStatus( $status ) {
    $this->status = $status;
  }

  public function setReleaseDate( $release_date ) {
    $this->release_date = $release_date;
  }

  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getUserId() {
    return $this->user_id;
  }

  public function getMediaId() {
    return $this->media_id;
  }

  public function getSartdate() {
    return $this->start_date;;
  }

  public function getFinishDate() {
    return $this->finish_date;
  }

  public function getWatchDuration() {
    return $this->watch_duration;
  }


  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterHistories( $user_id) {

    // Open database connection
    $db   = init_db(); // from

    // Get all detail of the media from the database
    $req  = $db->prepare( "SELECT  id, user_id, media_id, start_date, finish_date, watch_duration FROM history" );

    $req->execute( array( '%' . $user_id . '%' ));


    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }



  /******************************************************
   * ------- DELETE HISTORY USER DATA BY USER ID -------
  *******************************************************/
  function deleteHistoryById($id) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "DELETE FROM history WHERE id = ?");
    $req->execute( array( $id ));

    // Close databse connection
    $db   = null;

    return $req->fetch();



  }


  /*********************************************************
  * ------- EMPTY ALL HISTORY USER DATA BY USER ID -------
  **********************************************************/
  function deleteAllHistory($user_id) {

    // Open database connection
    $db   = init_db();

    // delete all history for connected user 
    $req  = $db->prepare( "DELETE FROM history WHERE user_id = $user_id");
    $req->execute();

    // Close databse connection
    $db   = null;

    return $req->fetch();

  }

}
