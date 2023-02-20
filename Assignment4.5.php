<?php
/*
5.Write a PHP function to find the second largest number in an array of numbers.
*/
function find_second_largest($arr) {
    $max = $arr[0];
    $second_max = $arr[0];
    foreach ($arr as $num) {
      if ($num > $max) {
        $second_max = $max;
        $max = $num;
      } elseif ($num > $second_max && $num != $max) {
        $second_max = $num;
      }
    }
    return $second_max;
  }

  $my_array = array(1, 3, 2, 7, 5, 8, 6, 4);
$second_largest = find_second_largest($my_array);
echo "The second largest number in the array is: " . $second_largest;
