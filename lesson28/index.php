<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

# Подключения файла.
require_once 'funcs.php';

# Если массив post не пусть.
if(!empty($_POST)){
  save_mess();
  # Делаем редирект.
  header("Location: {$_SERVER['PHP_SELF']}");
  exit; // die;
}

$messages = get_mess();
$messages = array_mess($messages);
// print_arr($messages);



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Гоставая книга</title>
  </head>
  <style>
    .message{
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }

  </style>

  <body>
    <form action="index.php" method="post">
      <p>
        <label for="name"> Имя: </label><br>
        <input type="text" name="name" id="name">
      </p>
      <p>
        <label for="text"> Текст: </label><br>
        <textarea name="text" id="text"></textarea>
      </p>
      <button type="submit"> Написать</button>
    </form>

    <hr>
    <?php if(!empty($messages)): ?>
      <?php foreach ($messages as $message): ?>
        <?php $message = get_format_message($message); /*print_arr($message)*/?>
        <div class="message">
          <p>Автор: <?= $message[0] ?> | Дата: <?= $message[2] ?></p>
          <div><?=nl2br(htmlspecialchars($message[1]))?></div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </body>
</html>
