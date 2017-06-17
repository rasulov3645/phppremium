<?php
error_reporting(-1);

# Объявление массива.
//$arr = array();
//var_dump($arr);

# Обычный нумерированный массив.
$arr = array('Ivanov', 'Petrov', 'Sidorov');

# Для вывода используеться 2 функции.
//var_dump($arr);
//print_r($arr);

//echo $arr;  # :-)

# Форматирофанный распечатка массива.
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

//echo $arr[1];
//echo $arr{1};


# Начиная с версии 5.4 мы можем
# объвить массив и так.
//$arr2 = [];

//$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

# Многомерный массив.
//$arr2 = [1, 2, ['banana', 'orange', 'apple'], 4, 'cat', 6, 7, 8, 9, 10];

// echo "<pre>";
// print_r($arr2);
// echo "</pre>";

// echo $arr2[2][1];

# Даем квартирам нумера.
// $arr3 = [2 => 'Ivanov', 3 => 'Petrov', 4 => 'Sidorov'];

// php сам начнет нумерация
//$arr4 = [2 => 'Ivanov', 'Petrov', 'Sidorov'];

// echo "<pre>";
// print_r($arr4);
// echo "</pre>";


/*

# Стил оформления.
$arr2 = [1,
2,
[
  'banana',
  'orange',
  'apple'
],
4,
'cat',
6,
7,
8,
9,
10];

*/


# Ассатисный массив.
$goods = [
  [
    'title' => 'Nokia',
    'price' => 100,
    'description' => 'Description'
  ],
  [
    'title' => 'iPad',
    'price' => 200,
    'description' => 'Description'
  ]
];

echo "<pre>";
print_r($goods);
echo "</pre>";

echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];







?>
