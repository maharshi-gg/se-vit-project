<?php
include_once "base.php";
if (!empty($_POST['username']) && !empty($_POST['password'])):
  include_once "inc/class.users.inc.php";
  $users = new ProjectUsers($db);
  echo $users->createAccount();
  function phpAlert()
  {
  echo'

  <script>

  setTimeout(function()
  {
  location.href="index.php";
},1000);

  </script>';

  }

phpAlert();
  endif;
 ?>
