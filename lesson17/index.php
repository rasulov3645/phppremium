<?php
require_once 'inc.php';
//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');
readfile('text.txt');
die; 
//header('HTTP/1.0 304 Not Modified')
//header('HTTP/1.0 404 Not Found')

# Редиек - перенаправления куда то.
# Сам не понял если честно.
//header('Location: inc.php');

# Редирект с задержкой
//header('refresh: 5; url=inc.php');
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

    <!-- Печатаеть без echo -->
    <?= $test ?>
    Привет, мир!!!!


  </body>
</html>
