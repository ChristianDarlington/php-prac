<?php 


function registerUser ($email){
  
  echo "$email registered";
}

registerUser('Paul');


// function sum($n1, $n2){
//   return $n1 + $n2;
// }



// echo sum(5,5);


$subtract = function($n1, $n2){
  return $n1 - $n2;
};

echo $subtract(77,3);


$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(9,5);