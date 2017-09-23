<?php
    include_once "base.php";
    if(!empty($_POST['username']) && !empty($_POST['password'])):
      include_once 'inc/class.users.inc.php';
      $users = new ProjectUsers($db);
      if($users->accountLogin()===TRUE):
        function phpAlert()
        {
        echo'

        <script>

        setTimeout(function()
        {
        location.href="dashboard.php";
      },1000);

        </script>';

        }
        phpAlert();
      else:
        function phpAlert()
      {

      echo'

      <script>
      alert("Login error!");
      setTimeout(function()
      {
      location.href="login.php";
      },3000);

      </script>';

      }
      phpAlert();
    endif;
  endif;
  ?>
