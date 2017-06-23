<?php error_reporting(-1);

header('Content-Type: text/html; charset=utf-8');

/*
# Ссылка на документация.
http://php.net/manual/ru/ref.datetime.php

string date ( string $format [, int $timestamp = time() ] )
int time ( void )
string date_default_timezone_get ( void )
bool date_default_timezone_set ( string $timezone_identifier )
array getdate ([ int $timestamp = time() ] )
int strtotime ( string $time [, int $now = time() ] )
int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )

DateTime date_create ([ string $time = "now" [, DateTimeZone $timezone = NULL ]] )
DateTime date_add ( DateTime $object , DateInterval $interval )
string date_format ( DateTimeInterface $object , string $format )
date_interval_create_from_date_string()
DateInterval date_diff ( DateTimeInterface $datetime1 , DateTimeInterface $datetime2 [, bool $absolute = false ] )
*/

/*echo date_default_timezone_get();
echo '<br>';
date_default_timezone_set('Australia/Adelaide');
echo date_default_timezone_get();
echo '<br>';*/
// date_default_timezone_set('GMT');
// echo date('Y-m-d H:i:s', time() - 60*60*24*10);
// echo time();
// echo '2010 - ' . date('Y');
// phpinfo();

/*$date = getdate();
print_r($date);
echo $date['year'];*/

/*echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y-m-d H:i:s', strtotime("+1 day 2 hours"));*/

/*echo time();
echo '<br>';
echo mktime( date("H"), date("i")+1, date("s")+1, date("m"), date("d"), date("Y") );*/

/*

$t = mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")-1 );
echo date('Y-m-d H:i:s', $t);

*/

#-----------------------------------------
#Мой записы.
#-----------------------------------------


/*
echo date_default_timezone_get();
echo '<br>';
date_default_timezone_set('Australia/Adelaide');
echo date_default_timezone_get();
echo '<br>';


* Y - год
* m - месяц
* d - день
* H - час
* i - минуты
* s - секунды

echo date('Y-m-d H:i:s');

*/

// date_default_timezone_set('GMT');
// date_default_timezone_set('UTC');
//echo date('Y-m-d H:i:s', 0);
//echo date('Y-m-d H:i:s', time() + 60 * 60 * 24 * 10);

# Как менять на футоре дату
 // echo '2012 - ' . date('Y');

#Все настройки php
//phpinfo();



# getdarte()
//$date = getdate();
// print_r($date);
// echo $date['year'];


# strtotime
//echo date('Y-m-d H:i:s');
//echo '<br>';
// echo date('Y-m-d H:i:s', strtotime("+1 day 1 hour") );
//echo date('Y-m-d H:i:s', strtotime("+1 day 2 hours") );


# mktime
/*
echo time();
echo '<br>';
echo mktime( date("H"), date("i")+1, date("s")+1, date("m"), date("d"), date("Y") );
*/

/*
$t = mktime( date("H"), date("i")+1, date("s")+1, date("m"), date("d"), date("Y") + 1 );
echo date('Y-m-d H:i:s', $t);
*/ 
