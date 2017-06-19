<?php
error_reporting(-1);
//TODE add 1 element to array

$arr = array('Ivanov', 'Petrov', 'Sidorov');

// Добавления элемента в конец массива.
//$arr[] = "Pupkin";

/*

echo "<pre>";
print_r($arr);
echo '</pre>';

*/


/*

count
array_diff
array_intersect
array_key_exists
array_keys
array_values
array_merge
array_rand
array_reverse
compact
extract
arsort
asort
sort
rsort

array_combine
array_search
array_shift
array_unique
array_unshift
array_flip
array_pop
array_push
in_array

*/



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
  ],
  [
    'title' => 'Sony',
    'price' => 300,
    'description' => 'Description'
  ]
];


#1. Функция count
# Подсчитывает количество элементов массива
# или что-то в объекте

// echo count($arr);
// echo '<br>';
// echo count($goods, 1);



#2. Функция array_diff
# Вычислить расхождение массивов.

// $array1 = array("a" => "green", "red", "blue", "red", 2, 5, 10);
// $array2 = array("b" => "green", "yellow", "red", 5);
// $result = array_diff($array1, $array2);

// echo "<pre>";
// print_r($result);
// echo "</pre>";


#3. Функция array_intersect
# Вычисляет схождение массивов
// $array1 = array("a" => "green", "red", "blue", "red");
// $array2 = array("b" => "green", "yellow", "red", 5);
// $result = array_intersect($array1, $array2);


// echo "<pre>";
// print_r($result);
// echo "</pre>";

#4. Функция array_key_exists
# Проверяет, присутствует ли в массиве указанный ключ

// $search_array = array('first' => 1, 'second' => 4);
// if (array_key_exists('first', $search_array)) {
//     echo "Массив содержит элемент 'first'.";
// }
// else {
//   echo "Массив не содержит элемент 'first'.";
// }


#5. Функция array_keys
# Возвращает все или некоторое подмножество ключей

// $result1 = array_keys($goods);
// echo "<pre>";
// print_r($result1);
// echo "</pre>";


#6. Функция array_values
# Выбирает все значения массива

// $result = array_values($goods);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

#7. Функция array_merge
# Сливает один или большее количество массивов

// $array1 = array();
// $array2 = array(1 => "data");
// $result = array_merge($array1, $array2);

// echo "<pre>";
// print_r($result);
// echo "</pre>";

#8. Функция array_rand
# Выбирает одно или несколько случайных значений из массива

// $rand_result = array_rand($goods[1], 3);
// echo "<pre>";
// print_r($rand_result);
// echo "</pre>";


#9. Функция array_reverse
# Возвращает массив с элементами в обратном порядке

// $input  = array("php", 4.0, array("green", "red"));
// $reversed = array_reverse($input);
// $preserved = array_reverse($input, true);

// echo "<pre>";
// print_r($input);
// print_r($reversed);
// print_r($preserved);
// echo "</pre>";


#10. Функция compact
# Создает массив, содержащий названия переменных и их значения

//1)
// $city  = "San Francisco";
// $state = "CA";
// $event = "SIGGRAPH";

// $result = [
//   'city' => $city,
//   'state' => $state,
//   'event' => $event,
// ];

// echo "<pre>";
// print_r($result);
// echo "<pre>";



//2)
// $city  = "San Francisco";
// $state = "CA";
// $event = "SIGGRAPH";
//
// $location_vars = array("city", "state");
//
// $result = compact("event", "nothing_here", $location_vars);
//
// echo "<pre>";
// print_r($result);
// echo "</pre>";

#11 Функция extract
# Импортирует переменные из массива в текущую таблицу символов

// 1)

// $result = [
//   'city' => 'SF',
//   'state' => 'SA',
//   'event' => 'do',
// ];
//
// extract($result);
//
// echo $city."<br>";
// echo $state."<br>";
// echo $event."<br>";
//
//
// echo "<pre>";
// print_r($result);
// echo "</pre>";


// 2)
/* Предположим, что $var_array - это массив, полученный в результате
   wddx_deserialize */

// $size = "large";
// $var_array = array("color" => "blue",
//                    "size"  => "medium",
//                    "shape" => "sphere");
// extract($var_array, EXTR_PREFIX_SAME, "wddx");
//
// echo "$color, $size, $shape, $wddx_size\n";


#12. Функция arsort
# Сортирует массив в обратном порядке, сохраняя ключи

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// arsort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val"."<br>";
// }
//
// echo "<br>";

#13. Функция asort
# Сортирует массив, сохраняя ключи

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// asort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val"."<br>";
// }
//
// echo "<br>";

#14. Функция sort
# Сортирует массив

// $fruits = array("lemon", "orange", "banana", "apple");
// sort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "fruits[" . $key . "] = " . $val ."<br>";
// }
//
// echo "<br>";

#15. Функция rsort
# Сортирует массив в обратном порядке

// $fruits = array("lemon", "orange", "banana", "apple");
// rsort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val"."<br>";
// }



 # ДЗ. Ознокомиться с функциями для работы с массивами.

/*

 array_combine
 array_search
 array_shift
 array_unique
 array_unshift
 array_flip
 array_pop
 array_push
 in_array
 list
*/








?>
