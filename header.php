<?php
  session_start();

  echo "<!DOCTYPE html>\n<html><head>";

  require_once 'functions.php';

  $userstr = ' (Гость)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;

  echo "<title>$appname$userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head><body><center><canvas id='logo' width='624' "    .
       "height='96'>$appname</canvas></center>"                 .
       "<div class='appname'>$appname$userstr</div>";

  if ($loggedin)
  {
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Дома</a></li>"   .
         "<li><a href='members.php'>Участники</a></li>"         .
         "<li><a href='friends.php'>Подписчики</a></li>"        .
         "<li><a href='messages.php'>Сообщение</a></li>"        .
         "<li><a href='profile.php'>Профиль</a></li>"           .
         "<li><a href='logout.php'>Выход</a></li></ul><br>";
  }
  else
  {
    echo ("<br><ul class='menu'>"                                     .
          "<li><a href='index.php'>Дома</a></li>"                     .
          "<li><a href='signup.php'>Зарегистрироваться</a></li>"      .
          "<li><a href='login.php'>Вход</a></li></ul><br>"            .
          "<span class='info'>&#8658; Вы должны войти в систему или " .
          "зарегистрироваться.</span><br><br>");
  }
?>
