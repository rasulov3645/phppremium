<?php

session_start();

if( isset($_GET['do']) && $_GET['do'] == 'exit') unset($_SESSION['admin']);

if( !isset($_SESSION['admin']) ) die('Вы не авторизованы');

echo "Добро пожаловать, {$_SESSION['admin']}!";

?>
 <a href="secret.php?do=exit">Logout</a>

<ul>
  <li><a href="sess1.php">sess1</a></li>
  <li><a href="sess2.php">sess2</a></li>
  <li><a href="secret.php">secret</a></li>
</ul>
