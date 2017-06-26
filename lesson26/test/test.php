<?php

# Создаем куки, которая будет доступно только в этой
# папке в дочерным
//setcookie('test2', 'My Value2', time()+3600*24);

# Куки доступно домену localhost
setcookie('test2', 'My Value2', time()+3600*24, '/');



echo $_COOKIE['test'];
echo '<br>';
echo $_COOKIE['test2'];
