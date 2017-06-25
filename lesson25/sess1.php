<?php
session_start();

define('ADMIN', 'admin');

// echo session_id();

if( !empty($_POST['login'])){
  if($_POST['login'] === ADMIN ){
    $_SESSION['admin'] = ADMIN;
    $_SESSION['res'] = 'Вы успешно вошли';
  }
  else {
    $_SESSION['res'] = 'Неверный логин!';
  }
  header("Location: sess1.php");
  die;
}


// $_SESSION['name'] = 'Гамзат';
// $_SESSION['login'] = 'gamzat';
// $_SESSION['login'] = 'password';

//unset($_SESSION['name']);
//var_dump($_SESSION);

# Удаляеть данные из сессии, но не сам файл.
//session_unset();

# Удаляеть временный файл сессии польностью.
//session_destroy();

?>

<ul>
  <li><a href="sess1.php">sess1</a></li>
  <li><a href="sess2.php">sess2</a></li>
  <li><a href="secret.php">secret</a></li>
</ul>


<hr>

<?php
  if(isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
  }
?>


<form class="" action="" method="post">
  <input type="text" name="login">
  <button type="submit">Login</button>
</form>
