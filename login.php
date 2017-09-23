<?php include "base.php";
  if(isset($_SESSION["Username"])&& $_SESSION["LoggedIn"]==1){
  function phpAlert()
  {
  echo '<script>location.href="dashboard.php";</script>';
  }
  phpAlert();}
 ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SignUp</title>

    <!-- CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="form-elements.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

<style media="screen">
  body{
    background-image: url("images/dark-nature-wallpaper-images.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  .navbar {
      margin-bottom: 0;
      background-color: rgba(55, 205, 50, 0.82);
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: rgba(55, 205, 50, 0.82) !important;
      background-color: #fff !important;
  }
  .logo-small {
      font-size: 30px;
      margin: 20px;
  }
</style>

<body id="login-page">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">PCCFC</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">LOGIN | SIGNUP</a></li>
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php#contact">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-sm-5">

                      <div class="form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3>Login to our site</h3>
                              <p>Enter username and password to log on:</p>
                          </div>
                          <div class="form-top-right">
                            <span class="glyphicon glyphicon-log-in logo-small"></span>
                          </div>
                          </div>
                          <div class="form-bottom">
                        <form role="form" action="check_login.php" method="post" class="login-form">
                          <div class="form-group">
                            <label class="sr-only" for="form-username">Username</label>
                              <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="login-username">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="form-password">Password</label>
                              <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="login-password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                      </div>
                    </div>

                  <div class="social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-facebook"></i> Facebook
                          </a>
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-twitter"></i> Twitter
                          </a>
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-google-plus"></i> Google Plus
                          </a>
                        </div>
                      </div>

                    </div>

                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>

                    <div class="col-sm-5">

                      <div class="form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3>Sign up now</h3>
                              <p>Fill in the form below to get instant access:</p>
                          </div>
                          <div class="form-top-right">
                            <i class="glyphicon glyphicon-pencil logo-small"></i>
                          </div>
                          </div>
                          <div class="form-bottom">
                        <form role="form" action="signup.php" method="post" class="registration-form">
                          <div class="form-group">
                            <label class="sr-only" for="username">User name</label>
                              <input type="text" name="username" placeholder="Awesome_GG" class="form-first-name form-control" id="form-username">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="password">Password</label>
                              <input type="password" name="password" placeholder="My Password" class="form-last-name form-control" id="form-password">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="conf-password">Confirm Password</label>
                              <input type="password" name="conf-password" placeholder="My Password" class="form-last-name form-control" id="form-conf-password">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="email">Email</label>
                              <input type="email" name="email" placeholder="Email" class="form-email form-control" id="form-email">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="mobile">Mobile</label>
                              <input type="text" name="mobile" placeholder="9998889990" class="form-email form-control" id="form-mobile">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="comments">About yourself</label>
                              <textarea name="comments" placeholder="About yourself..."
                                    class="form-about-yourself form-control" id="form-comments"></textarea>
                            </div>
                            <button type="submit" class="btn">Sign me up!</button>
                        </form>
                      </div>
                      </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</body>
