<?php

function array_count($arr){
  $res_count = 0;

  if (is_array($arr)){
    foreach ($arr as $key => $value) {
      $res_count++;
    }
    //echo $res_count . "<br>";
    return $res_count;
  }
  else {
    echo 'Аргумент должень быть массивом!';
  }

}



?>
