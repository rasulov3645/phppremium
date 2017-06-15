<?php

error_reporting(-1);

/*

if (выражение)
  инструкция;

if (expression) {
  instructions;
}

*/

// Переменная цвет = зеленый
//$light = 'green';
// $light = 'red';
//
// if ($light == 'green'){
//   echo "We may go";
//
// }

// true, будеть выпольняться
/*

var_dump( 5 > 3);
if (5 > 3) {
  echo 'ОК';
}

*/

// false, не будеть выпольняться
// var_dump( 5 < 3);
// if (5 < 3) {
//   echo 'ОК';
// }

// true
// var_dump( 5 >= 5);
// if (5 >= 5) {
//   echo 'ОК';
// }


// var_dump(5 != 3)
// if (5 != 4) {
//   echo 'ОК';
// }

# false
// if (5 != 5) {
//   echo 'ОК';
//   echo '<p>2</p>';
// }


$light = 'green';

if ($light == 'green') {
  if ( 5 > 3 ){
    echo '<p> 5 > 3 </p>';
  }
  echo 'We may go';
} elseif ($light = 'yellow') {
  echo 'We may ready';
} else {
  echo 'We must stop';
}


















?>
