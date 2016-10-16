<?php
require_once "config.php";
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link rel="stylesheet" href="assets/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>


<!-- Dropdown Structure -->
<!--<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>-->
      <!-- Dropdown Trigger -->
      <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>-->


   <!-- <nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo">MyHospital</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="hospital.php">Hospital</a></li>
        <li><a href="doctor.php">Doctors</a></li>
        <li><a href="bloodbank.php">BloodBank</a></li>
        <li><a href="chemist.php">Chemists</a></li>


      </ul>
    </div>
  </nav>--!>

  <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="logout
  .php">Logout</a></li>
</ul>
<nav>
  <div class="nav-wrapper blue">
    <a href="#!" class="brand-logo">MyHospital</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="hospital.php">Hospital</a></li>
      <li><a href="doctor.php">Doctors</a></li>
      <li><a href="bloodbank.php">BloodBank</a></li>
      <li><a href="chemist.php">Chemists</a></li>
      <li><a href="pathologylabs.php">Pathologylabs</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php
    
          if(isset($_SESSION['admin']))
        {
          echo $_SESSION['admin'];
      
        }
        else
       {
          header('Location: index.php');
        }

?><i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

  <body>