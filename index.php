<?php
  require_once 'header.php';

  echo "<br><span class='main'>Добро пожаловать $appname,";

  if ($loggedin) echo " $user, Вы вошли в систему.";
  else           echo ' Пожалуйста, зарегистрируйтесь и/или войдите в систему.';
?>

    </span><br><br>
  </body>
</html>
