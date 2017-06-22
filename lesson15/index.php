<?php
error_reporting(-1);

# Подключения файлов.
require_once 'funcs_sum.php';
require_once 'my_array_keys.php';

$nums = [1, 2, 3];
$names = ['Ivanov', 'Petrov'];

// echo count($nums);
// echo  count($names);


/*

$a = 200;
$x = 100;
$y = 10;


sum(5, 7);
sum(10, 5);
sum(5, 10);
sum($x, $y);
sum();
sum(100);
echo $a;

*/


// $a = 5;
// $b = 10;
// echo $a;
// echo '<br>'.'------------'.'<br>';
// sum($a, $b);
// echo $a;

# Когда фукция возврашаеть результат.
//echo sum(1, 2);
//echo 5 + sum(1, 2);

//$res = sum(1, 2);
//echo $res;

//var_dump(sum());
//echo 5 + sum();
//echo NULL + NULL;
//var_dump(NULL);


# Пример 1. Создать функцию которая делаеть,
# которая делаеть, тоже самое что и функция
# array_keys()

# Оригинальная функция.
// $keys = array_keys($nums);
// print_r($keys);

# функция который создал сам.
# Печатаеть, не возвращаеть.
//my_array_keys($nums);
//my_array_keys($names);

# массив с данными.
# нам нужны только ключи.
$arr = [
  'Имя'     => 'Гамзат',
  'Фамилия' => 'Расулов',
  'Город'   => 'Волгоград',
  'E-mail'  => 'rasulov3645@gmail.com'
];

// $keys2 = my_array_keys($arr);
// print_r($keys2);

$arr2 = [];

// $keys3 = my_array_keys($arr2);
// print_r($keys3);




























?>
