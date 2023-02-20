<?php
function remove_first_and_last($array) {
    $len = count($array);
    if ($len <= 2) {
      return array();
    } else {
      return array_slice($array, 1, $len - 2);
    }
  }

  $my_array = array(10,20,30,40);
  $new_array = remove_first_and_last($my_array);
  print_r($new_array);
