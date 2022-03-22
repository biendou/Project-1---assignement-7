<?php
class TravelPhoto{
  // Properties
  private $date;
  private $fileName;
  private $description;
  private $title;
  private $latitude;
  private $longitude;
  private $ID=0;
  private static $photoID;

  // Methods

  function __construct($fileName,$description,$title,$latitude,$longitude) {
   
    $this->fileName = $fileName;
    $this->description = $description;
    $this->title = $title;
    $this->latitude = $latitude;
    $this->longitude = $longitude;
    $ID = $photoID;
    $photoID++;
    public function toString() {
        echo <img src="$fileName" alt="$description" title="$title" >;
      }
  }
}


?>
