<?php

// error_reporting(-1);

/*
  Арифметические операторфы.
  "+" - сложение $a + $b
  "-" - вычитание $a - $b
  "*" - умножение $a * $b
  "/" - деление $a / $b
  "-$a" - отрицание (смена знака $a)
  "$a % $b" -  деление по модулю (остаток от деления)
  "$a ** $b" - возведение в степень
  "=" - присваивание (установка значения)
  "&" - присваивание по ссылке
  ================================
  "++$a" - префиксный инкремент
  "$a++" - постфиксный инкремент
  "--$a" - префиксный декремент
  "$a++" - постфиксный декремент
  "." - конкатенация (склеивания строк)
  комбинированные операторы

*/

# "$a++" - постфиксный инкремент
# Сначала печатаеться результат потом
# Увеличиваеться значение

// $a = 5;
// var_dump($a++);
// echo '<br>'; echo $a;

# "++$a" - префиксный инкремент
# Сначала увеличиваеться значения потом печатаеться.

// $a = 5;
// var_dump(++$a);
// var_dump($a);

# Схема работы такая же, уменьшая значения.
//"--$a" - префиксный декремент
//"$a++" - постфиксный декремент

//$a = 5;
// var_dump(--$a);   # 4
// var_dump($a);     # 4

//var_dump($a--);      # 5
//var_dump($a);        # 4

/*
$a = 5;
$a = $a + 1;  # $a++
var_dump($a);
*/

# "." - конкатенация (склеивания строк)

// $str1 = 'Hello, ';
// $str2 = ' world';
// $str = $str1 . $str2;
// echo $str;


// $fruit = 'apple';
// $winnie_pooh = "Hello, I'm Winneie. I have 1 {$fruit}s";

// В одинарных кавычках переменные не обрабатываеться!!!!!!!!!
// $winnie_pooh1 = 'Hello, I"m Winneie. I have 1 $fruit'."s";
// echo $winnie_pooh1.'<br>';

// Так будеть работать.
// $winnie_pooh2 = 'Hello, I"m Winneie. I have 1' . $fruit . "s";
// echo $winnie_pooh2.'<br>';
//
// $winnie_pooh3 = "Hello, I'm Winneie. I have 1 $fruit"."s";
// echo $winnie_pooh3;

# Комбинированные операторы

//$a = 5;
//$a = $a + 2;  # $a += 2;

// Комбинированный оператор
//$a += 2;
//$a -= 2;
// $a *= 2;
// var_dump($a);

// $str1 = 'Hello, ';
// $str1 .= ' world';
//
// var_dump($str1);

# Новый тип данных
# Переменная не установлена или отсутствуеть значения
# NULL
# Можеть быть возвращен в нескольких лучаях
# 1. случай это когда переменная не установлена.

//var_dump($var);  //null

# 2.При помоши функции, удаляем переменную и после получаем NULL

// $var = '';
// unset($var);
// var_dump($var);

# 3. Когда специально установливаем значение NULL

 // $var = NULL;
 // var_dump($var);

# Можно инкрементировать NULL, мне кажется что это бред.

//$var = NULL;
//$var++;
// $var++;
//var_dump($var);













?>
