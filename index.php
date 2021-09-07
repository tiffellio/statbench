<?php
  require_once("./private/dbinfo.inc.php");

  $link = mysqli_connect($host, $username, $password, $db_name);

  // check if connection is successfull


  if (mysqli_connect_error()){

    die("There was a problem connecting to the MySQL database: ".mysqli_connect_error());

  } else {
    echo 'sucessfull\n';
  }

/*
  $date = "SELECT `dateID` FROM `dateLog` WHERE date(`date`) = CURDATE()";

    if ($result = mysqli_query($link, $date)) {

        $row = mysqli_fetch_array($result);

        echo $row;

    } */

    $query = "SELECT * FROM dateLog";

    if ($result = mysqli_query($link, $query)) {

        $row = mysqli_fetch_array($result);

        echo "Your result is ".$row;

    }


?>
<!DOCTYPE html>
<!--  Project: STATBENCH
      File: Homepage
      Author: Tiffany Elliott (email info@elliottt.space)
      Date: July 2021
-->

<html lang="en">

  <meta charset="UTF-8">
  <title>STATBENCH</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="home/css/gridsheet.css">
  <link rel="stylesheet" href="home/css/stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pontano Sans' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <body>
      <script src="home/js/bmr-calc.js"> </script>
      <div class="container">

        <!-- *********** SIDE BAR *********** -->

        <div class="item" id="sidebar">
          <div id="logo">
            <span id="stat">STAT</span>
            <span id="bench">BENCH</span>
          </div>
          <div class="sidebar-item" id="homepage"><a href="index.html">Dashboard</a></div>
          <div class="sidebar-item"><a href="nutrition/nutrition.html">Nutrition</a></div>
          <div class="sidebar-item"><a href="exercise/exercise.html">Exercise</a></div>
          <div class="sidebar-item"><a href="sleep/sleep.html">Sleep</a></div>
          <!-- Future Feature: Goals -->
          <div class="sidebar-item"><a href="profile/profile.html"> Profile </a></div>
        </div>

        <script src="home/js/fade.js"> </script>


        <!-- *********** CALORIES *********** -->
        <!-- Display remaining calorie intake for the day
        calculated by BMR, (+) activity, (-) food -->
        <div class="item sub-container" id="calories">
          <div id="calories-label"> Calories </div>
          <div id="calories-num"> 1500 </div>
          <img src="media/icons/flame-icon.png">
        </div>

        <!-- *********** WATER ************* -->
        <!-- Track how many cups of water you had -->
        <div class="item sub-container" id="water">
          <div id="water-label"> Water </div>
          <div id="water-num"> 0 <span style="font-size:medium">cups</span></div>
          <img src="media/icons/water-icon.png">
        </div>


        <!-- ********** ACTIVITY *********** -->
        <!-- Track exercise in calories spent -->
        <div class="item sub-container" id="activity">
          <div id="activity-label"> Activity </div>
          <div id="activity-num"> 40 <span style="font-size:medium">mins</span></div>
          <img src="media/icons/electric-icon.png">
        </div>

        <!-- ********* GREETING *********** -->
        <!-- Greet user based on time of day -->
        <div class="item" id="greeting">
          <div id="date-container">

            <span id="daytime"></span>
            <script src="home/js/timeofday.js"> </script>

            <span id="name">Tiffany!</span>
            <div id="date"></div>

          </div>
          <!-- add emoji
          <a href='https://www.freepik.com/vectors/icons'>Icons vector created by freepik - www.freepik.com</a>
          <a href="https://www.freepik.com/vectors/background">Background vector created by starline - www.freepik.com</a>
          <img src="" height="80" width="80"/> -->
        </div>
        <script src="home/js/date.js"></script>

        <!-- ********** FOOD LOG ********** -->
        <!-- Display a daily food journal, displaying quanity,
        macros & calories -->
        <div class="label" id="foodlabel"> Food Log </div>
        <div class="item" id="foodlog">
          <div id ="fooditem">
              <span id="foodquantity"> 1 </span>
              <span id="foodsize"> Large </span>
              <span id="foodtype"> Apricot </span>
              <span id="foodcalories"> 40 Cals </span>
          </div>
        </div>

        <!-- ********** EXERCISE LOG ********** -->
        <!-- Display a daily fitness journal,
        displaying type and calories burned -->
        <div class="label" id="exerlabel"> Exercise Log </div>
        <div class="item" id="exerlog">
          Exercise
        </div>

        <!-- ********** SLEEP LOG ********** -->
        <!-- Display a daily sleep journal-->
        <div class="item sleep-container" id="sleep">
          <div id="sleep-label"> Sleep </div>
          <div id="sleep-num"> 7h 40m </div>
          <img src="media/icons/moon-icon.png">
        </div>

        <!-- ********** MACRO LOG ********** -->
        <!-- Display a pie chart breaking down carbs, fats, proteins
        from daily food journal -->
        <div class="item" id="macros">
          <div id="macro-label"> Macros </div>
          <!-- Add widget later -->
          <!-- protein, carbs, fat -->
        </div>

      </div> <!-- End container -->

  </body>
</html>
