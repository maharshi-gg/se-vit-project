<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="form-elements.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/parallax1.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/parallax2.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("images/parallax3.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
.navbar{
  margin-bottom: 0px;
  border: 0px;
  border-radius: 0px;
}
.footer {
  background-color: #555;
  color: white;
  padding: 15px;
  margin-left: 0px;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }

}
</style>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Logo</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="index.php">About</a></li>
      <li><a href="#">Companies</a></li>
      <li><a href="#">Environmentalists</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><img src="icons/user-512.png" width="20px" height="20px" alt="user">  <?php echo $_SESSION["Username"] ?></span></a></li>
    </ul>
  </div>
  </div>
  </nav>

<?php
     $number=$home=$food_choice=$water=$household=$garbage=$recycle=$personal_travel=$public_travel="";
     $number = $_POST["num_people"];
     $home = $_POST["home"];
     $food_choice = $_POST["food_choice"];
     $water = $_POST["water"];
     $household = $_POST["household"];
     $garbage = $_POST["garbage"];
     $recycle = $_POST["recycle"];
     $personal_travel = $_POST["personal_travel"];
     $public_travel = $_POST["public_travel"];

     /*For number of people sharing the house*/
     if($number==1)
  	   $emission_numPeople = 14;
     else if($number==2)
  	   $emission_numPeople = 12;
     else if($number==3)
  	   $emission_numPeople = 10;
     else if($number==4)
  	   $emission_numPeople = 8;
     else if($number==5)
  	   $emission_numPeople = 6;
     else if($number==6)
  	   $emission_numPeople = 4;
     else $emission_numPeople = 2;

     //For the size of home
     if($home=="SmallHouse")
  	   $emission_home = 4;
     else if($home=="Medium")
  	   $emission_home = 7;
     else if($home=="LargeHouse")
  	   $emission_home = 10;
     else if($home=="Apartment")
  	   $emission_home = 2;

     //For the choice of food
     if($food_choice=="prepackaged")
  	   $emission_food = 12;
     else if($food_choice=="meatDaily")
  	   $emission_food = 10;
     else if($food_choice=="meatFew")
  	   $emission_food = 8;
     else if($food_choice=="vegetarian")
  	   $emission_food = 4;
     else if($food_choice=="vegan")
  	   $emission_food = 2;

     if($water=="9")
  	   $emission_water = 3;
     else if($water=="4to9")
  	   $emission_water = 2;
     else if($water=="1to3")
  	   $emission_water = 1;
     else if($water=="none")
  	   $emission_water = 0;


      if($household=="7")
  	   $emission_household = 10;
     else if($household=="5to7")
  	   $emission_household = 8;
     else if($household=="3to5")
  	   $emission_household = 6;
     else if($household=="less3")
  	   $emission_household = 4;
     else if($household=="none")
  	   $emission_household = 2;


     $emission_recycle =24;
     if($recycle=="glass")
  	   $emission_recycle -= 4;
     if($garbage=="plastic")
  	   $emission_recycle -= 4;
     if($garbage=="paper")
  	   $emission_recycle -= 4;
     if($garbage=="aluminium")
  	   $emission_recycle -= 4;
     if($garbage=="steel")
  	   $emission_recycle -= 4;
     if($garbage=="food")
  	   $emission_recycle -= 4;

     if($personal_travel=="15k")
  	   $emission_personal_travel = 12;
     else if($personal_travel=="10k")
  	   $emission_personal_travel = 10;
     else if($personal_travel=="1k")
  	   $emission_personal_travel = 6;
     else if($personal_travel=="less1k")
  	   $emission_personal_travel = 4;
     else if($personal_travel=="none")
  	   $emission_personal_travel = 0;

     if($public_travel=="20k")
  	   $emission_public_travel = 12;
     else if($personal_travel=="15k")
  	   $emission_public_travel = 10;
     else if($public_travel=="10k")
  	   $emission_public_travel = 6;
     else if($public_travel=="1k")
  	   $emission_public_travel = 4;
     else if($public_travel=="less1k")
  	   $emission_public_travel = 2;
     else if($public_travel=="none")
  	   $emission_public_travel = 0;

     $total = $emission_numPeople + $emission_home + $emission_food + $emission_water + $emission_household + $emission_recycle + $emission_personal_travel + $emission_public_travel;
     ?>

<div class="bgimg-1">
  <div class="caption">
      <?php if($total<60): ?>
    <span class="border" style="background-color: red;">LARGE IMPACT</span>
    <?php else: ?>
      <span class="border" style="background-color: yellow; color:black">SMALL IMPACT</span>
        <?php endif; ?>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Carbon Impact</h3>
  <p>Every day, every hour, every minute you are contributing in minute amounts to the Carbon Footprint generated on this Earth. You may not realise this, yet even eating food, wasting water
  and using your car to drive down to your workplace contribuites to it. Ever heard of the saying: "Small drops make an ocean"? <br>But wait, wondering what Carbon Footprint means? Scroll down to find out!</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: black;">CARBON FOOTPRINT</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <blockquote cite="https://en.wikipedia.org/wiki/Carbon_footprint">
      <p>A carbon footprint is historically defined as "the total set of greenhouse gas emissions caused by an [individual, event, organisation, product] expressed as carbon dioxide equivalent."</p>
      <footer>Courtesy: Wikipedia</footer>
    </blockquote>
    <p>As you can see now, it basically the amount of Carbon you're throwing into the air, wind, water and everywhere around you - by all the activities that a person, in this case You, performs!
      <br><h3 style="text-align:center; color:white;">NASTY, AINT IT!?!</h3></style>
    <br><p style="text-align:center; color:white;">Wanna know what is your Total Carbon Footprint of this month? Scroll down to find out!<p>
    </p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:red;font-size:25px;color: white; border-radius:3px;"><?php echo $total." units"; ?></span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center; color:orange;">WE SUGGEST YOU TO TAKE THE FOLLOWING MEASURES, AND SOON!</h3></style>
    <?php if($personal_travel>=6): ?>
      <br>
      <h4 style="text-align:center; color:green;">Reduce Your Carbon Footprint From Driving</h4>
      <ul>
        <li>Alternatives to driving.When possible, walk or ride your bike in order to avoid carbon emissions completely. Carpooling and public transportation drastically reduce CO2 emissions by spreading them out over many riders.</li>
        <li>Drive a low carbon vehicle. High mileage doesn’t always mean low CO2 emissions. All vehicles have an estimated miles-per-gallon rating. Electric cars emit no CO2 if they’re charged with clean electricity. If you don’t charge it with your home’s solar panels AND live somewhere like WY, MO, MO, WV, or KY you’re BETTER OFF with a hybrid or high-mileage gas/diesel car. Here’s why. After incentives and gas savings, it essentially costs nothing to switch to an electric car like the the Nissan Leaf.</li>
      </ul>
    <?php
    endif;
     if($home=="LargeHouse" && $emission_household>=6):
    ?>
    <br>
        <h4 style="text-align:center; color:green;">Reduce Your Home Energy Carbon Footprint</h4>
        <ul>
          <li>Appliances. Make energy efficiency a primary consideration when choosing a new furnace, air conditioning unit, dishwasher, or refrigerator. Products bearing the ENERGY STAR label are recognized for having superior efficiency.</li>
          <li>Lighting. Turn off lights you’re not using and when you leave the room. Replace incandescent light bulbs with compact flourescent or LED ones.</li>
        </ul>
        <?php
      endif;?>
      <br>
      <h4 style="text-align:center; color:green;">Other Ways to Reduce Your Carbon Footprint</h4>
      <ul>
        <li>Water usage. Lower the amount of energy used to pump, treat, and heat water by washing your car less often, using climate-appropriate plants in your garden, installing drip irrigation so that plants receive only what they need, and making water-efficient choices when purchasing shower heads, faucet heads, toilets, dishwashers and washing machines.</li>
        <li>Support clean energy sources.  Whenever you can, advocate for clean alternatives to fossil fuels, such as wind, solar, geothermal, and appropriately designed hydroelectric and biomass energy projects.</li>
        <li>Reuse and recycle.  It has been estimated that 29% of U.S. greenhouse gas emissions result from the “provision of goods,” which means the extraction of resources, manufacturing, transport, and final disposal of “goods” which include consumer products and packaging, building components, and passenger vehicles, but excluding food. By buying used products and reselling or recyling items you no longer use, you dramatically reduce your carbon footprint from the “provision of goods.”</li>
      </ul>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption" >
    <span class="border" style="color:white;background-color:#18670d ;text-align:center;padding:50px 80px;text-align: justify;">Clean Earth, Green Earth</span>
  </div>
</div>

<div class="footer">
  <a href="dashboard.php"><span style="margin-top:50px; margin-bottom:0px; font-size: 40px; text-align: justify;">Dashboard</span></a>
</div>

</body>
</html>
