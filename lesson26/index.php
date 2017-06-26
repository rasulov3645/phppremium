<?php

// session_start();
// //$_SESSION['test'] = 123;
// var_dump($_SESSION);

# Создания куки.
//setcookie('test', 'My Value', time()+3600*24);

# Удаляем куку 'test'
//setcookie('test', '', time() - 3600);

# Удаляем куку 'test2'
// setcookie('test2', '', time() - 3600, '/');


//echo $_COOKIE['test'];
//echo '<br>';
//echo $_COOKIE['test2'];
//echo '<br>';
//var_dump($_COOKIE);



# Создадим счетчик который будеть фиксировать,
# сколько раз мы посетили данную страницу и выводить
# данное кол-во.



# Если у нас есть такая кука
//isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/'):

# Противном случие.
//setcookie('counter', 1, time()+3600, '/');

# Тоже что сверху.
// isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/'):
//         setcookie('counter', 1, time()+3600, '/');


# Выводим не экран результат работы
//echo isset($_COOKIE['counter']) ? $_COOKIE['counter']: 1;
