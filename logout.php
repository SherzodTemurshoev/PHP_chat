<?php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<div class='main'>Вы вышли из системы. Пожалуйста, " .
         "<a href='index.php'>нажмите здесь</a>, чтобы обновить экран.";
  }
  else echo "<div class='main'><br>" .
            "Вы не можете выйти, потому что вы не вошли в систему";
?>

    <br><br></div>
  </body>
</html>
