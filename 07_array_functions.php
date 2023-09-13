<?php

// $fruits = ['apple', 'banana', 'orange'];

// Get Length

// echo count($fruits);

//Search array

// var_dump(in_array('apple', $fruits));

// Add to array

// array_push($fruits, 'bacon');
// array_unshift($fruits, 'kiwi');

// remove from array
// array_pop($fruits);
// array_shift($fruits);


// split into 2 chuncks
// $chunked_array = array_chunk($fruits, 1);

// print_r($chunked_array);


// print_r($fruits);

// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];
// $c = array_combine($a, $b);

// print_r($c);


$numbers = range(1,10);



$newNumbers = array_map(function($number) {
  return "Number $number";
}, $numbers);

print_r($newNumbers);


$lessThanFive = array_filter($numbers, fn($number) => $number <= 5);

print_r($lessThanFive);