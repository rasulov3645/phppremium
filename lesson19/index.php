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
#11.
#str_replace — Заменяет все вхождения строки поиска на строку замены

$str = '[i]Привет[/i]! Меня зовур [b]Вася[/b]!';
// $str = str_replace('[b]', '<b>', $str);
// $str = str_replace('[/b]', '</b>', $str);
// $str = str_replace('[i]', '<i>', $str);
// $str = str_replace('[/i]', '</i>', $str);
$search = ['[b]', '[/b]', '[i]', '[/i]'];
$replace = ['<b>', '</b>', '<i>', '</i>'];
#Заменяеть с учетом регистра
$str = str_replace($search, $replace, $str);
#Заменяеть без учетом регистра
$str = str_ireplace($search, $replace, $str);

echo $str;

*/


/*
#12.
$str = '<i>Привет</i>! Меня зовет <b>Вася</b>! <script>alert("XSS")</script>';
// echo $str;
# Вырезаеть все html теги.
// echo strip_tags($str);

# Вырезаеть все html теги. И можеть вырезать
# только те которые мы хотим.
echo strip_tags($str, '<b><i>');

*/


/*

#13.
$str = 'hello';
$str2 = 'привет';
//echo strlen($str);  # 5 символов
//echo strlen($str2); # ожидал 6, но получил 12.

# Для работы с многобайтными строками есть свои фукнкции.
# A второй параметр опциональный, нужно передать кодировку
# Для использования мультибайтных функций не обходим специальный модуль.
echo mb_strlen($str2, 'utf-8');

*/
