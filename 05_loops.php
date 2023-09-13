<?php

// for($x = 0; $x <= 10; $x++){
//   echo "Number $x <br>";
// }

$x = 1;

// while($x <=15){
//   echo "Number $x <br>";
//   $x++;
// }


$numbers = [1, 2, 3, 4, 5];

// for( $x =0; $x < count($numbers);$x++){
//   echo $numbers[$x];
// }

// foreach($numbers as $index => $numbers){
//   echo "$index - $numbers <br>"; 
// }

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

foreach($person as $value ){
  echo "$value  <br>";
}