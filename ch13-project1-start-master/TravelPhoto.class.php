<?php
/*
   Represents a single travel photo
 */
class TravelPhoto{
  // Properties
  private $date;
  private $fileName;
  private $description;
  private $title;
  private $latitude;
  private $longitude;
  private $id;
  private static $photoID = 1;
  public $by="null";
  public $country="null";
  public $city="null";
  public $taken="null";
  public $tags = array("null");
  
  // Methods

  function __construct($fileName,$description,$title,$latitude,$longitude) {
    $this->fileName = $fileName;
    $this->description = $description;
    $this->title = $title;
    $this->latitude = $latitude;
    $this->longitude = $longitude;
    $this->id = self::$photoID;
    self::$photoID++;
    
  }
  public function toString() {
    echo "<img src=$fileName alt=$description title=$title >";
  }
  function id() {
    return $this->id;
  }
  function fileName() {
    return $this->fileName;
  }
  function description() {
    return $this->description;
  }
  function title() {
    return $this->title;
  }
}


?>