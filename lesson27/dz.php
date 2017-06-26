<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="" method="post">
      Имя: <br/>
      <input type="text" name="name"/> <br/>
      Сообщение: <br/>
      <textarea name="text"></textarea><br/>
      <input type="submit" name="Отправить "/><br/>
    </form>

    <?php
      if(!$_POST){
        exit(file_get_contents('base.txt'));
      }


      file_put_contents('base.txt', '<div class="gb-item">' .
            date('d.m.Y H:i:s').' : сообщение от ' .
            $_POST['name'] .'<br />'.$_POST['text'].'<hr/></div>', FILE_APPEND);

    ?>
  </body>
</html>
