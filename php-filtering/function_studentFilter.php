<?php
function studentFilter($array, $year) {
  foreach ($array as $student) {
    if ($student["year"] == $year) {
      echo $student["name"] . "<br>"; 
    }
  }
}
?>
