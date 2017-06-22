<?php
header('Content-Type: text/html; charset=utf-8');

# Редиек - перенаправления куда то.
# Сам не понял если честно.
//header('Location: inc.php');

# Редирект с задержкой
header('refresh: 5; url=inc.php');
# Ознакомится с этими функциями.
//exit;
//die;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Привет, мир!
  </body>
</html>
