<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title><?=$title?></title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
    <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="js/script.js"></script>
 </head>
 <body> 
  <main>
    <header>
     <h1><i class="logo fa <?=$logo?>" <?=$logo_color?>></i> <?=$title?></h1>
     <nav id="cssmenu">
      <ul>
         <li><a href="../index.php"><i class="fa fa-fw fa-institution"></i> IT162</a></li>
         <li><a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>          
         <li><a href="siteapp.php"><i class= "fa fa-fw fa-laptop"></i> Site vs App</a></li>
         <li><a href="galleries.php"><i class="fa fa-fw fa-camera"></i> Galleries</a></li>
         <li><a href="flexbox.php"><i class="fa fa-fw fa-columns"></i> FlexBox</a></li>
         <li><a href="shoppingcart.php"><i class="fa fa-fw fa-shopping-cart"></i> Shopping Cart</a></li>
         <li><a href="webcam.php"><i class="fa fa-fw fa-globe"></i> Web Cam</a></li>
      
        <!--Drop Down Menu for Google Tool pages -->
        <li><a href="#">Google Tools</a>
            <ul>
               <li><a href="youtube.php"><i class="fa fa-fw fa-youtube-play"></i> Web Accessibility</a></li>
               <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
               <li><a href="map.php"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
            </ul>
        </li>
      </ul>

     </nav>
    </header>