<?php
error_reporting(-1);

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

//$arr[3] = 'Pupkin';
//$arr[2] = 'Pubkin';

# добавления елементов в конец массива.
// $arr[] = 'Dupkin';
// $arr[] = 'Doe';

# меняем поредок индексов в массиве.
$arr[5] = 'Pupkin';
$arr[] = 'Doe';

print_r($arr);

# ассоциативный массив
$names = [
  'Ivan' => 'Ivanov',
  'Petr' => 'Petrov',
  'Sidor' => 'Sidorov',
];

# Решение ДЗ. Вариант решения преподователя.
/*
echo '<select>';
for($i = 1900; $i <= 2017; $i++){
  echo "<option> $i </option>";
}
echo '</select>';
*/

echo "<br>";

# Цикл foreach
/*
foreach($arr as $item){
  echo $item . '<br>';
}
*/

/*
foreach ($names as $key => $name) {
  echo "Name: $key, Surname: $name". '<br>';
}
*/

/*
foreach ($arr as $key => $value) {
  echo "Key: $key, Surname: $value" . '<br>';
}
*/


# Операторы and, &&, or, ||
#1
// $a = 5;
// if ($a == 5) {
//   echo 'OK';
// }
// else {
//   echo 'NO';
// }

#2. &&
// $a = 5;
// if ($a >  3 &&  $a < 7) {
//   echo 'OK';
// }
// else {
//   echo 'NO';
// }

#3. and
// $a = 5;
// if ($a >  3  and  $a < 7) {
//   echo 'OK';
// }
// else {
//   echo 'NO';
// }


#4. or
// $a = 5;
// if ($a <  3  or  $a < 7) {
//   echo 'OK';
// }
// else {
//   echo 'NO';
// }

#5. ||
// $a = 5;
// if ($a >  3  ||  $a > 7) {
//   echo 'OK';
// }
// else {
//   echo 'NO';
// }



# Оператор break и continue.

#1. break
/*
for ($i = 0; $i <= 30; $i++) {
  echo $i . '<br>';
  if ($i == 5) {
    echo '<h1>Found!!!</h1>';
    break;
  }
}
*/

#2. continue.
# 1.
// for ($i = 0; $i <=30; $i++){
//   if($i == 10 || $i == 20 ) continue;
//   echo $i . '<br>';
// }

#2. пропуск диапозон чисел.
// for ($i = 0; $i <=30; $i++){
//   if($i >= 10 and $i <= 20) continue;
//   echo $i . '<br>';
// }



























?>
