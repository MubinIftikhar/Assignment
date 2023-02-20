<?php
/*
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

*/
function concatenate_reverse($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $result = $str1;
    for ($i = $len2 - 1; $i >= 0; $i--) {
      $result .= $str2[$i];
    }
    return $result;
  }

$fstring = "Mubin";
$lstring = "Iftikhar";
$result = concatenate_reverse($fstring, $lstring);
echo $result;