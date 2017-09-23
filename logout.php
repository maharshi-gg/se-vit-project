<?php
    session_start();
    unset($_SESSION['LoggedIn']);
    unset($_SESSION['Username']);
    function phpAlert()
      {
      echo '<script>location.href="login.php";</script>';
      }
      phpAlert();

?>
