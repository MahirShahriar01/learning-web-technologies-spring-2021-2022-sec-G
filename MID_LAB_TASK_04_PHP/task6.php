<?php
  function Search($value, $array)
  {
      return (array_search($value, $array));
  }
  $array = array(
      "aakash",
      "batash",
      "mati",
      "pani"
  );
  $value = "mati";
  print_r(Search($value, $array));
?>