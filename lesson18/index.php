<?php error_reporting(-1);

header('Content-Type: text/html; charset=utf-8');

/*
http://php.net/manual/ru/ref.strings.php
http://php.net/manual/ru/ref.mbstring.php

array explode ( string $delimiter , string $string [, int $limit ] )
string implode ( string $glue , array $pieces ) || join()
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
string rtrim ( string $str [, string $character_mask ] )
string ltrim ( string $str [, string $character_mask ] )
string md5 ( string $str [, bool $raw_output = false ] )
string sha1 ( string $str [, bool $raw_output = false ] )
string nl2br ( string $string [, bool $is_xhtml = true ] )

mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
string strip_tags ( string $str [, string $allowable_tags ] )
int strlen ( string $string )

mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )
int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
*/

/*
#1.
#explode — Разбивает строку с помощью разделителя
$str = 'Расулов Гамзат Абдулвангидович';
$data = explode(' ', $str);
print_r($data);
echo "<br>";
# 3-й параметр не обезательный.
$data2 = explode(' ', $str, 1);
print_r($data2);
echo "<br>";
*/



/*
#2.
#implode — Объединяет элементы массива в строку
$data = ['Расулов', 'Гамзат', 'Абдулвагидович'];
$str = implode(', ', $data);
echo $str;
*/

/*
#3.
#join — Псевдоним implode
$data = ['Расулов', 'Гамзат', 'Абдулвагидович'];
$str = join('_', $data);
echo $str;

*/

/*
#4.
#trim — Удаляет пробелы (или другие символы) из начала и конца строки
$str = "\t<p>Hello</p>\n";
$str .= "\n<p>world!</p>\t";
//echo $str;
echo trim($str, "\t");
*/

#5.
#rtrim — Удаляет пробельные (или другие символы) из конца строки
// $str = ',..... test,';
// // echo trim($str, ',');
// echo rtrim($str, ',');

#6.
#ltrim — Удаляет пробелы (или другие символы) из начала строки
// $str = ',..... test,';
// // echo trim($str, ',');
// echo ltrim($str, ',');

#7.
#md5 — Возвращает MD5-хэш строки
#Не неромендуеться использовать в сегодняшний день.
#На его месте password_hash — Creates a password hash
// $str = 'password';
// echo md5($str);

#8.
#md5_file — Возвращает MD5-хэш файла

#9.
#sha1 — Возвращает SHA1-хэш строки
# То же не рекомендуеться для хеширования пароля.

#10.
#nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки
$str = "Hello\nworld\n";
//echo $str;
echo nl2br($str);



#11.

#12.
