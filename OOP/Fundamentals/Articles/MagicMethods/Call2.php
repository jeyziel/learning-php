<?php 


class Location {
 
  protected $latitude;
  protected $longitutde;
 
  public function __construct($latitude, $longitude)
  {
    $this->latitude = $latitude;
    $this->longitude = $longitude;
  }
 
  public function getLocation()
  {
    return array(
      'latitude' => $this->latitude,
      'longitude' => $this->longitude
    );
  }
 
}
 
class Tweet {
 
  protected $id;
  protected $text;
  protected $location;
 
  public function __construct($id, $text, Location $location)
  {
    $this->id = $id;
    $this->text = $text;
    $this->location = $location;
  }
 
  public function  __call($method, $parameters)
  {
    if(method_exists($this->location, $method))
    {
      return call_user_func_array(array($this->location, $method), $parameters);
    }
  }
 
}
 
$tweet = new Tweet(123, 'Hello world', new Location('37.7821120598956', '-122.400612831116'));
 
var_dump($tweet->getLocation()); // array(2) { ["latitude"]=> string(16) "37.7821120598956" ["longitude"]=> string(17) "-122.400612831116" }