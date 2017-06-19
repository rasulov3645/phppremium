<?php
error_reporting(1);

// TODO add 1 element to array

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

//$arr[3] = 'Pupkin';
//$arr[2] = 'Pubkin';

# добавления елементов в конец массива.
// $arr[] = 'Dupkin';
// $arr[] = 'Doe';

# меняем поредок индексов в массиве.
$arr[5] = 'Pupkin';
$arr[] = 'Doe';

# ассоциативный массив
$names = [
  'Ivan' => 'Ivanov',
  'Petr' => 'Petrov',
  'Sidor' => 'Sidorov',
];


//print_r($arr);

#Цикл while
/*
$i = 1;
while ($i < 11) {
  echo $i. "<br>";
  $i++;

}
*/


# Цикл for
/*
for ($i = 1; $i < 11; $i++ ){
  echo $i."<br>";
}
*/

/*

for($i = 0; $i < count($arr); $i++){
  echo $arr[$i] . '<br>';
}

*/


# ДЗ. Потренироваться с использованием цикла for

# 1 Вывод таблицы умножения.
/*
echo "<table border='1'>\n";
for ($i = 1; $i < 10; $i++){
  echo "\t<tr>\n";
  for ($j = 1; $j < 10; $j++){
    echo "\t\t<td> $i * $j = ". $i * $j . "</td>\n";
  }
  echo "\t</tr>\n";
}
echo "<table>";
*/


# Выподающий список.
/*
echo "<select>";
for ($year = 2000; $year <= 2017; $year++) {
  echo "<option value = '$year'> $year </option>";
}
echo "</select>";

*/







?>
