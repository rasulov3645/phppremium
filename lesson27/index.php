<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

# Ссылка на документацию
// http://php.net/manual/ru/ref.filesystem.php


/*
# copy — Копирует файл
bool copy ( string $source , string $dest [, resource $context ] )

# file_exists — Проверяет наличие указанного файла или каталога
bool file_exists ( string $filename )

# file_get_contents — Читает содержимое файла в строку
string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]] )

# file_put_contents — Пишет строку в файл
int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )

# file — Читает содержимое файла и помещает его в массив
array file ( string $filename [, int $flags = 0 [, resource $context ]] )

# is_dir — Определяет, является ли имя файла директорией
bool is_dir ( string $filename )

# is_file — Определяет, является ли файл обычным файлом
bool is_file ( string $filename )

# move_uploaded_file — Перемещает загруженный файл в новое место
bool move_uploaded_file ( string $filename , string $destination )

# rename — Переименовывает файл или директорию
bool rename ( string $oldname , string $newname [, resource $context ] )

# mkdir — Создаёт директорию
bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )

# rmdir — Удаляет директорию
bool rmdir ( string $dirname [, resource $context ] )

# touch — Устанавливает время доступа и модификации файла
bool touch ( string $filename [, int $time = time() [, int $atime ]] )

# unlink — Удаляет файл
bool unlink ( string $filename [, resource $context ] )
*/


# Копирует файл, text.txt в папку под именим file.txt
// copy('text.txt', 'folder/file.txt');

# Проверяем наличие существования файла.
# Также можно проверить наличие существования папок(директорий)
/*
if(file_exists('folder/file.txt')) echo "Файл существует";
else echo 'Такого файла нет';
*/


# Считываем содержимое файла.
// $file = file_get_contents('text.txt');
// echo $file;

# Считываем содержание страницы.
// $file = file_get_contents('http://php.net/manual/ru/ref.filesystem.php');
// echo $file;

// $file = file_get_contents('http://php.net/');
// echo htmlspecialchars($file);

// $file = file_get_contents('text.txt');
// echo nl2br($file);


// $file = file_get_contents('http://php.net/');
// $file2 = file_get_contents('http://php.net/manual/ru/ref.filesystem.php');
// file_put_contents('folder/file.txt', $file, FILE_APPEND);
// file_put_contents('folder/file.txt', $file2, FILE_APPEND);

/*
$file = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
print_r($file);
echo "</pre>";
*/

#is_dir
// if( is_dir('folder') ) echo 'Это каталог ';
// else echo 'Это не каталог';

#is_file
# Если файла нету, то возвращаеть folse.
/*
 * '.'  - Указатель на текушый каталог, относительно данного файла.
 * '..' - Указатель на каталог уровня выше.
*/
// if( is_file('text.txt') ) echo 'Это файл';
// else echo 'Это не файл';

# Переносим файл  text в каталог folder.
// rename('text.txt', 'folder/file2.txt');


#mkdir
// mkdir('1 ');
// mkdir('1/2/3', 0777, true);



#rmdir
/*

if (!is_dir('1')) {
    mkdir('1');
}

$res_rmdir = rmdir('1');
var_dump($res_rmdir);

*/

# touch
//touch('folder/file.txt', time()-3600);

# unlink
// unlink('folder/file.txt');
// unlink('folder/file2.txt');

# ДЗ. Написать простейшую гостевую книгу на текстовых файлах.
/*
Форма с 2-мя полями это иимя и ввод текста.
Пользовател нажимаеть на кнопку отправить,
все идеть на сервер, сервер дольжен отработать все и
принять записать в файл. Записать еще и дату.
Каждое сообщение разделено разделителем(Например три '***')
