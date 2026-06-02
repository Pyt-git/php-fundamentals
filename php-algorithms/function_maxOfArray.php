<?php
function maxOfArray($array) {
  $max  = $array[0];

  foreach ($array as $num) {
    if ($num > $max) {
      $max = $num; 
    }
  }
  return $max;
}
?>
