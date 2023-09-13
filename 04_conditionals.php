<?php

// $age = 10;

// if($age >= 18){
//  echo 'You are old enough to vote';
// } else {
//   echo 'sorry bro';
// }


// $t = date("H");

// echo $t;

// if($t < 12) {
//   echo 'Good Morning';
// } else if($t < 17) {
//   echo 'Good Afternoon';
// } else {
//   echo 'Good Evening';
// }


$post = ['First post'];

// if(!empty($post)){
//   echo $post[0];
// } else {
//   echo 'Nothing';
// }

echo  empty(!$post) ? $post[0] : 'No posts';



