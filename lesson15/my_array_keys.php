<?php

/*

# Принимает массив и печатаеть массив
# ключей
function my_array_keys($arr){
  $data = [];
  foreach ($arr as $key => $value) {
    $data[] = $key;
  }
  print_r($data);
}

*/

# Принимает массив и возврашаеть массив
# ключей
function my_array_keys($arr){
  $data = [];
  foreach ($arr as $key => $value) {
    $data[] = $key;
  }
  return $data;
}


?>
