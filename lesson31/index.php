<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);


function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) . '</pre>';
}

/*
mysqli_connect() - Открыть новое соединение с MySQL сервером. Возвращает объект,
представляющий подключение к серверу MySQL.

mysqli_connect_error() - Возвращает описание последней ошибки подключения.
Сообщение об ошибке. NULL, если ошибка отсутствует.

mysqli_set_charset() - Устанавливает кодировку

mysqli_query() - Выполняет запрос к базе данных.
Возвращает FALSE в случае неудачи.
В случае успешного выполнения запросов SELECT mysqli_query() вернет объект mysqli_result.
Для остальных успешных запросов mysqli_query() вернет TRUE.

mysqli_fetch_all() - Выбирает все строки из результирующего набора и помещает
их в ассоциативный массив, обычный массив или в оба

mysqli_fetch_assoc() - Извлекает результирующий ряд в виде ассоциативного массива.
Возвращает ассоциативный массив, соответствующий результирующей выборке или NULL,
если других рядов не существует.

mysqli_num_rows() - Получает число рядов в результирующей выборке.

mysqli_affected_rows() - Получает число строк, затронутых предыдущей операцией MySQL.
Возвращает число строк, затронутых последним INSERT, UPDATE, REPLACE или DELETE запросом.
Целое число, большее нуля, означает количество затронутых или полученных строк.
Ноль означает, что запросом вида UPDATE не обновлено ни одной записи,
или что ни одна строка не соответствует условию WHERE в запросе,
или что запрос еще не был выполнен. Значение -1 указывает на то, что запрос вернул ошибку.

mysqli_error() - Возвращает строку с описанием последней ошибки.

mysqli_real_escape_string() - Экранирует специальные символы в строке,
используемой в SQL-запросе, принимая во внимание кодировку соединения
*/




?>
<?php

//$db = mysqli_connect('localhost', 'root', '', 'gb');
// $db = @mysqli_connect('localhost', 'root', '', 'gb');
//var_dump(mysqli_connect_error());
//echo mysqli_connect_error();
//var_dump($db);

$db = @mysqli_connect('localhost', 'root', '', 'gb') or die('Ошибка соединения с БД');
if(!$db) die(mysqli_connect_error());

mysqli_set_charset($db, "utf8") or die('Не установлена кодировка');

/*
$insert = "INSERT INTO `gb` (`name`, `text`) VALUES ('Оля', 'Lorem ipsum dolor')";
$res_insert = mysqli_query($db, $insert);
if($res_insert) echo 'OK';
else echo "Error";
*/

# Для просмотра ошибки.
// echo mysqli_error($db);


// $update = "UPDATE gb SET text = CONCAT(text, '|||') WHERE id > 4";
// $res_update = mysqli_query($db, $update) /* or die(mysqli_error($db))*/;
//echo mysqli_affected_rows($db);

// $delete = "DELETE FROM gb WHERE id > 4";
// $res_delete = mysqli_query($db, $delete) /* or die(mysqli_error($db)) */ ;
// echo mysqli_affected_rows($db);

# Выборка
//$res = mysqli_query($db, "SELECT * FROM gb");
// var_dump($res);
//$data = mysqli_fetch_all($res);
//print_arr($data);


// $res = mysqli_query($db, "SELECT name, text, date FROM gb ORDER BY id DESC");
// $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
// print_arr($data);
//
// foreach ($data as $item) {
//   echo "Name: {$item['name']} <br>";
//   echo "Text: {$item['text']} <br>";
//   echo "Date: {$item['date']} <br>";
//   echo "<hr>";
// }


# 2-й способ.
// $res = mysqli_query($db, "SELECT id, name, text, date FROM gb ORDER BY id DESC");
//
// $data2 = [];
// while ($row = mysqli_fetch_assoc($res)) {
//   $data2[$row['id']] = $row;
// }
//
// print_arr($data2);


// $res = mysqli_query($db, "SELECT name, text, date FROM gb ORDER BY id DESC LIMIT 3");
// $row = mysqli_num_rows($res); // получаем кол-во записей.
// echo $row . "<br>";
// $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
// print_arr($data);
//
// foreach ($data as $item) {
//   echo "Name: {$item['name']} <br>";
//   echo "Text: {$item['text']} <br>";
//   echo "Date: {$item['date']} <br>";
//   echo "<hr>";
// }


// $str = "d'Artanian";
// $str = mysqli_real_escape_string($db, $str);
// $query = "INSERT INTO gb (name, text) VALUES ('$str', 'Имя с апострофом')";
// mysqli_query($db, $query) or die(mysqli_error($db));

$res = mysqli_query($db, "SELECT id, name, text, date FROM gb ORDER BY id DESC");
//echo mysqli_num_rows($res);
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
print_arr($data);
