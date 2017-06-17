<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Управляющие конструкции PHP. Цикл while и do-while</title>
  </head>
  <body>

  <?php

  /*
  $i = 1;
  while ($i <= 10) {
    echo $i.'<br>';
    $i++; // $i = $i + 1; $i += 1;
  }
  */

/*

$i = 1;
echo "<table border='1'>\n";
while ($i <= 20) {
  echo "\t<tr>\n";
  $n = 1;
  while ($n <= 10) {
    echo "\t\t<td> Row $i | Col - $n </td>\n";
    $n++;
  }
  echo "\t</tr>\n";
  $i++;
}
echo "</table>\n";

*/

/*

$year = 1900;
echo "<select>";
while ($year <= 2017) {
  echo "<option value ='$year'> $year </option>";
  $year++;
}
echo "</select>";

*/

/*
$i = 10;
do {
  echo $i++.'<br>';
} while ($i <= 10);

*/


// ДЗ - Нарисовать таблицу умножения.
// Мой код

/*

echo "<table border='1'>\n";
$i = 1;
while ($i <= 9) {
  echo "\t<tr>\n";
  $n = 1;
  while ($n <= 9) {
    $res = $i * $n;
    echo "\t\t<td> $i * $n = {$res} </td>\n";
    $n++;
  }
  echo "\t</tr>\n";
  $i++;
}
echo "</table>\n";

*/

// Код преподователя.
$x = 1;    // Кол-во рядов
echo "<table border='1'>\n";
while ($x <= 10) {
  echo "\t<tr>\n";
  $y = 1;
  while ($y < 10) {
    echo "\t\t<td>$x * $y = " . $x * $y . "</td>\n";
    $y++;
  }
  echo "\t</tr>\n";
  $x++;
}
echo '</table>'
?>а
  </body>
</html>
