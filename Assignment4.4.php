<?php
/*
4.Write a PHP function to check if a string contains only letters and whitespace.
*/
function only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
  }

  $str1 = "Hello World";
$str2 = "Hello World 123";
if (only_letters_and_whitespace($str1)) {
  echo "String 1 contains only letters and whitespace.";
} else {
  echo "String 1 contains other characters besides letters and whitespace.";
}
echo"\n";
if (only_letters_and_whitespace($str2)) {
  echo "String 2 contains only letters and whitespace.";
} else {
  echo "String 2 contains other characters besides letters and whitespace.";
}
