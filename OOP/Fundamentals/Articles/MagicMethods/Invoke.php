<?php 

class User {
    
     protected $name;
     protected $timeline = array();
    
     public function __construct($name)
     {
       $this->name = $name;
     }
    
     public function addTweet(Tweet $tweet)
     {
       $this->timeline[] = $tweet;
     }
    
   }
    
   class Tweet {
    
     protected $id;
     protected $text;
     protected $read;
    
     public function __construct($id, $text)
     {
       $this->id = $id;
       $this->text = $text;
       $this->read = false;
     }
    
     public function __invoke($user)
     {
       $user->addTweet($this);
       return $user;
     }
    
   }
    
   $users = array(new User('Ev'), new User('Jack'), new User('Biz'));
   $tweet = new Tweet(123, 'Hello world');
   $users = array_map($tweet, $users);
    
   print_r($users);