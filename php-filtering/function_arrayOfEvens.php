<?php
function arrayOfEvens($array) {
  $result = [];

  foreach ($array as $num) {
    if ($num % 2 == 0) {
      $result[] = $num; 
    }
  }
  return $result;
}
?>
