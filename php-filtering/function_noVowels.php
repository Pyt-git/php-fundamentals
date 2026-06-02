<?php
function noVowels($string) {
  $new_string = "";

  foreach (str_split($string) as $char) {
    if (strpos("aeiouAEIOU", $char) === false) {
      $new_string .= $char; 
    }
  }
  return $new_string;
}
?>
