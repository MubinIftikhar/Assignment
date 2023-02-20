<?php
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
*/
function sortBylength($array) {
  usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $array;
}

$array = ["apple", "banana", "jack-fruit", "orange", "mango"];
print_r(sortBylength($array)).PHP_EOL;


