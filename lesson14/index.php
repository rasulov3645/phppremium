<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <p> Lorem ipsum dolor sit amet.</p>

    <!-- <?php /*include 'inc.php' */ ?> -->
    <!-- <?php /*include 'inc.php' */ ?> -->

    <!-- <?php /* require 'inc.php' */ ?> -->

    <!-- После создания папки. -->
    <!-- <?php /* include 'inc.php' */ ?> -->
    <!-- <?php /* require 'inc.php' */  ?> -->

    <!--
      Не подключает файл если
      она уже подключена require_once
    -->

    <!-- <?php /* require_once 'inc/inc.php' */ ?> -->
    <!-- <?php /* require_once 'inc/inc.php' */  ?> -->

    <!-- <?php /* include_once 'inc/inc.php' */  ?> -->
    <!-- <?php /* include_once 'inc/inc.php' */ ?> -->

    <?php include_once 'inc/inc.php' ?>
    <?php include_once 'inc/inc.php' ?>

    <?php

    var_dump($names); 

    ?>

    <p> Lorem ipsum dolor sit amet.</p>
  </body>
</html>
