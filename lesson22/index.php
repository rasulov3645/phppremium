<?php error_reporting(-1);

header('Content-Type: text/html; charset=utf-8');

/*
http://php.net/manual/ru/ref.datetime.php

string date ( string $format [, int $timestamp = time() ] )
int time ( void )
string date_default_timezone_get ( void )
bool date_default_timezone_set ( string $timezone_identifier )
array getdate ([ int $timestamp = time() ] )
int strtotime ( string $time [, int $now = time() ] )
int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )
mixed microtime ([ bool $get_as_float = false ] )

DateTime date_create ([ string $time = "now" [, DateTimeZone $timezone = NULL ]] )
DateTime date_add ( DateTime $object , DateInterval $interval )
string date_format ( DateTimeInterface $object , string $format )
date_interval_create_from_date_string()
DateInterval date_diff ( DateTimeInterface $datetime1 , DateTimeInterface $datetime2 [, bool $absolute = false ] )
*/

/*

$date = date_create( date('Y-m-d H:i:s') );
//var_dump($date);
echo date_format($date, 'Y-m-d H:i:s');
date_add($date, date_interval_create_from_date_string('2 days + 2 hours 10 minutes + 5 seconds'));
echo "<br>";
echo date_format($date, 'Y-m-d H:i:s');

*/

# microtime
//echo time();
//echo '<br>';
//echo microtime();
// var_dump(microtime());  # return string
//var_dump(microtime(true)); # return float

// $start = microtime(true);
// $end = microtime(true);
// echo $end - $start;

$start = microtime(true);
for ($i = 1; $i <= 1000000000; $i++){
  if ($i == 1000000000)
  {
    echo "<p>Отсчет завершен</p>";
  }
}

$end = microtime(true);
echo $end - $start;
