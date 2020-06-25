<?php

require_once( 'database.php' );

class Season {

  protected $id;
  protected $media_id;
  protected $season_num;
  protected $release_date;
  protected $trailer_url;

  public function __construct( $season ) {

    $this->setId( isset( $season ->id ) ? $season ->id : null );

  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setMediaId( $media_id ) {
    $this->media_id = $media_id;

  }

  public function setSeasonNum( $season_num ) {
    $this->season_num = $season_num;

  }

  public function setReleaseDate( $release_date) {
    $this->release_date= $release_date;

  }

  public function trailerUrl( $trailer_url ) {
    $this->trailer_url = $trailer_url;

  }
  
  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getMediaId() {
    return $this->media_id;
  }

  public function getSeasonNum() {
    return $this->season_num;
  }

  public function getReleaseDate() {
    return $this->release_date;
  }


  public function getrailerUrl() {
    return $this->trailer_url;
  }




  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterSeasons( $user_id) {

   
    // Open database connection
    $db   = init_db(); // from

    // Get all detail of the media from the database
    $req  = $db->prepare( "SELECT id, media_id, season_num, release_date, trailer_url FROM season" );

    $req->execute( array( '%' . $user_id . '%' ));

    // echo "title search (media.php)=". $title."<br>" ;

    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }


}