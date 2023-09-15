<?php

class User {
// Properties are attributes that belong to a class
  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when a object is created
  public function __construct(){
    echo 'constructor ran';
  }

  //Method is a function that belongs to a class
  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
}

// Instatiate user object
$user1 = new User();
$user2 = new User();

