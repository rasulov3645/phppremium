 <?php

  error_reporting(-1);

  $var = "Hello World";
  $title = 'hello world!';
  $title = 'page title';
  $price = 55;
  $fruit = 'apple';
  $winnie_pooh = "Hello, I'm Winneie. I have 1 {$fruit}s";
  echo $winnie_pooh;
  echo "<br>";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> <?php echo $var; ?></title>
  </head>
  <body>
    <?php
      echo $var;
      $винни_пух = 'Я плохой тон!!!';
      echo '<br>'.$винни_пух;

      // Переменные чувствительны к регистру.
      $var = 45;
      $Var = "Hello World";
      echo '<br>';
      echo $var;
      echo '<br>';
      echo $Var;

      //Объявления константы
      // 1-й способ.
      define("PAGE", "new page");
    ?>

      <h1><?php echo PAGE; ?></h1>
      <?php

      const PAGE2 = 'new const';
      ?>
      <h1><?php echo PAGE2; ?></h1>



  </body>
</html>
