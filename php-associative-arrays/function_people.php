<?php
function people($array) {
  foreach ($array as $student) {
    foreach ($student as $key => $value) {
      echo "$key: $value<br>";
    }
  }
}
?>
      
