<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Урок 4</title>
  </head>
  <body>

<?php
  error_reporting(-1);
  //$this = '';

  // php - слаботипизированный язык.

  $var = 'pencil';

  /*
  Типы данных:
  1. boolean
  2. integer
  3. float
  4. string

  1:
  boolean: true | false or TRUE | FALSE or True | False


  */

  $var = 'pencil';

  $tru1 = true;  // Рузультат: 1
  $tru2 = True;  // Рузультат: 1
  $tru3 = TRUE;  // Рузультат: 1

  $fal1 = false;  // Рузультат: 'пустая строка'
  $fal2 = FALSE;  // Рузультат: 'пустая строка'
  $fal3 = False;  // Рузультат: 'пустая строка'

  // Вывод на экран.
  echo '$var1 = '.$tru1.'<br>';
  echo '$var2 = '.$tru2.'<br>';
  echo '$var3 = '.$tru3.'<br>';
  echo '----------------------'.'<br>';
  echo '$var1 = '.$fal1.'<br>';
  echo '$var2 = '.$fal2.'<br>';
  echo '$var3 = '.$fal3.'<br>';

  $true = true;
  $false = false;

  // Функция для дебага, то есть для отклдки.
  // Для просмотра типа данных
  // Вывод: тип(значение)
  var_dump($true);
  echo '<br>';
  var_dump($false);

  // 2 Функция для просмотра типа данных
  echo '<br>';
  echo '-------------------------';
  echo '<br>';
  $var = true;
  echo gettype($var);


  # integer
  echo '<br>';
  echo '-------------------------';
  echo '<br>';
  echo '<br>';

  $int = '-10';   # Число строковый тип :-)
  //var_dump($int);
  //var_dump($int + 5);

  # float
  $fl = 1.2;
  //var_dump($fl);


  /*
  # string
  $var = 10;
  $str = 'This is string. $var';
  var_dump($str);
  echo "<br>";
  $str2 = "This is string. $var";
  $str3 = "This is string. {$var}s";
  var_dump($str2);
  echo "<br>";
  var_dump($str3);
  */

  // Экранирование символов.
  $str = 'This is \'string\'. $var';
  echo $str;
  $str2 = "This \"is\" \"string\". $var";
  echo '<br>'.$str2;

  echo '<br>'.'--------------------------------'.'<br>';

  # Другой вариант объявления строк.
  # HEREDOC
  $str3 = <<<HERE
  'This 'is "string" .$var
HERE;

echo $str3;

# Еще 1 способ объявления строк.
//NOWDOC Аналог одинарных ковичек.
echo '<br>'.'--------------------------------'.'<br>';
$str4 = <<<'HERE'
"This "is "string " .$var
HERE;

echo $str4;



?>

  </body>
</html>
