<?php
function sortBylength($array) {
  usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $array;
}

$array = ["apple", "banana", "jack-fruit", "orange", "mango"];
print_r(sortBylength($array)).PHP_EOL;


