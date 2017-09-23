<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="form-elements.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myDashboard']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>
    <style>
    .body{
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
      overflow-y: scroll;
    }
      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        background-color: #008000;
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
          color: #008000 !important;
          background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
          border-color: transparent;
          color: #fff !important;
      }

      /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
      .rowcontent {height: 450px;}
      /* Set gray background color and 100% height */
      .sidenav {
        padding-top: 60px;
        background-color: #f1f1f1;
        height: 100%;
        z-index: 1;
        left: 0;
        position: fixed;
      }
      .sidenav-r{
        padding-top: 60px;
        background-color: #f1f1f1;
        height: 100%;
        right: 0;
        z-index: 1;
        position: fixed;
      }

      /* Set black background color, white text and some padding */
      .footer {
        background-color: #555;
        color: white;
        padding: 15px;
        margin-left: 0px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;}
      }
      input[type=radio]{
        margin: 5px;
        margin-left: 20px;
      }
      .dashboardgb{
        padding-top: 40px;
      }
      .form-group {
      	margin-top: 20px;
        padding: 10px;
        border-radius: 5px;
        background-color: lightgrey;

      }
      .btn{
        background-color: #008000;
        color: white;
        text-align: center;
        margin-left: 0px;
        margin-bottom: 20px;
        padding: 10px;
        width: 100%;
        height: 50px;
      }
      .btn:hover{
        background-color: white;
        color: #008000;
      }
  </style>
  </head>
  <body id="myDashboard" data-spy="scroll" data-target=".navbar" data-offset="60">

            <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PCCFC</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Companies</a></li>
                <li><a href="#">Environmentalists</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><img src="icons/user-512.png" width="20px" height="20px" alt="user">  <?php echo $_SESSION["Username"]." : Logout"; ?></span></a></li>
              </ul>
            </div>
          </div>
        </nav>

    <div class="col-sm-2 sidenav">
      <p><a href="#">Dashboard</a></p>
      <p><a href="#">View History</a></p>
      <p><a href="#">View Messages</a></p>
      <p><a href="#">Forum</a></p>
      <p><a href="#">Contribute</a></p>
    </div>
    <div class="col-sm-2 sidenav-r">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>

    <div class="container-fluid text-left">
      <!--
      <div class="rowcontent">
      -->
        <div class="col-sm-2 text-left">
        </div>

        <div class="col-sm-8 text-left dashboardimg">
          <h1>Welcome</h1>
          <p>Welcome <b><?php echo $_SESSION['Username']; ?></b>!!!<br>
          Proceed further to calculate your latest Carbon Footrprint!</p>
          <hr>
          <form action="parallax_cal.php" method="post" class="form-group">
            <h1>Calculation of Carbon Footprint</h1>
            <br>
            <label for="num_people">How many people are there in your household?</label><br>
        	  <input type="number" id="num_people" name="num_people" required><br><br>

        	 <label for="home">What is the approximate size of your home?</label><br>
        	    <input type="radio" name="home" value="SmallHouse" required>Small House<br>
        		<input type="radio" name="home" value="Medium">Medium<br>
        		<input type="radio" name="home" value="LargeHouse">Large House<br>
        		<input type="radio" name="home" value="Apartment">Apartment<br><br>

        	<label for="food_choice">How's your food choice?</label><br>
        	    <input type="radio" name="food_choice" value="prepackaged" required>Consumption of prepackaged food on a daily basis<br>
        	    <input type="radio" name="food_choice" value="meatDaily">Consumption of Meat on daily basis<br>
        		<input type="radio" name="food_choice" value="meatFew">Consumption of Meat on few times a week<br>
        		<input type="radio" name="food_choice" value="vegetarian">Vegetarian<br>
        		<input type="radio" name="food_choice" value="vegan">Vegan<br><br>

        	<label for="water">How frequently do you run your washing machine per week?</label><br>
        	    <input type="radio" name="water" value="9" required>More than 9 times<br>
        	    <input type="radio" name="water" value="4to9">4-9 times<br>
        		<input type="radio" name="water" value="1to3">1-3 times<br>
        		<input type="radio" name="water" value="none">Doesn't own a washing machine<br><br>

        	<label for="household">How frequently do you make household purchases per year?</label><br>
        	    <input type="radio" name="household" value="7" required>More than 7 new pieces of furniture,electronics<br>
        	    <input type="radio" name="household" value="5to7">5-7 new pieces of furniture,electronics<br>
        		<input type="radio" name="household" value="3to5">3-5 new pieces of furniture,electronics<br>
        		<input type="radio" name="household" value="less3">Less than 3<br>
                <input type="radio" name="household" value="none">No purchase<br><br>

        	<label for="garbage">How many garbage cans do you fill per week?</label><br>
        	    <input type="radio" name="garbage" value="4" required>4 cans<br>
        	    <input type="radio" name="garbage" value="3">3 cans<br>
        		<input type="radio" name="garbage" value="2">2 cans<br>
        		<input type="radio" name="garbage" value="1">1 cans<br>
                <input type="radio" name="garbage" value="none">Half or less<br><br>

            <label for="recycle">Do you recycle any of the following items?</label><br>
        	    <input type="radio" name="recycle" value="glass" required>Glass<br>
        	    <input type="radio" name="recycle" value="plastic">Plastic<br>
        		<input type="radio" name="recycle" value="paper">Paper<br>
        		<input type="radio" name="recycle" value="aluminium">Aluminium<br>
        		<input type="radio" name="recycle" value="food">Food waste(composting)<br>
                <input type="radio" name="recycle" value="steel">Steel<br><br>

            <label for="personal_travel">How much is your personal travel distance?</label><br>
        	    <input type="radio" name="personal_travel" value="15k" required>More than 15,000 miles<br>
        	    <input type="radio" name="personal_travel" value="10k">10,000-15,000 miles<br>
        		<input type="radio" name="personal_travel" value="1k">1-10,000 miles<br>
        		<input type="radio" name="personal_travel" value="less1k">Less than 1,000 miles<br>
        		<input type="radio" name="personal_travel" value="none">No personal transport used<br><br>

        	<label for="puclic_travel">How much is your public travel distance?</label><br>
        	  <input type="radio" name="public_travel" value="20k" required>More than 20,000 miles<br>
        	  <input type="radio" name="public_travel" value="15k">15,000-20,000 miles<br>
        		<input type="radio" name="public_travel" value="10k">10,000-15,000 miles<br>
        		<input type="radio" name="public_travel" value="1k">1,000-10,000 miles<br>
        		<input type="radio" name="public_travel" value="less1k">Less than 1,000 miles<br>
        		<input type="radio" name="public_travel" value="none">No public transport used<br><br>


        	 <input type="submit" class="btn" value="Submit">
           </form>
        </div>

      <!--</div>-->
    </div>

    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-2 text-left">
        </div>
        <div class="col-sm-8">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> VIT University, Vellore</p>
          <p><span class="glyphicon glyphicon-phone"></span> +91 9843980450</p>
          <p><span class="glyphicon glyphicon-envelope"></span> maharshi@gmail.com</p>
        </div>
      </div>
    </div>
</body>
</html>
