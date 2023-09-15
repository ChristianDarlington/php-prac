<?php

class User {
// Properties are attributes that belong to a class
  public $name;
  public $email;
  public $password;
}

// Instatiate user object
$user1 = new User();

$user1->name = 'Brad';

var_dump($user1);