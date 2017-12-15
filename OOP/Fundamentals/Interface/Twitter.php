<?php 

require_once('./ShareableInterface.php');
require_once('./SocialShare.php');


class Twitter extends SocialShare implements Shareable {

  public $tweet = "280 lol \n";      
 
  public function share()
  {
    return $this->tweet;
  }
 
  public function feedback()
  {
    $this->favourite();
  }

  public function favourite()
  {
      echo 'favoritos';
  }
 
}


$twitterShareable = new Twitter();
echo $twitterShareable->share();
