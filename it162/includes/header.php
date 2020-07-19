<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title><?=$title?></title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="https://use.fontawesome.com/de7246851b.js"></script>
 </head>
<body>
<header>
<h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Chris Navoczynski: IT162 Portal Website</h1>
     <nav> 
      <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <!--
       <a href="index.php" class="active">Welcome</a>
       <a href="big/index.php">Big</a>
       <a href="aia.php">AIA</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.php">Final Project</a>
       <a href="contactme.php">Contact Chris</a>
      
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
       -->
      </ul>
     </nav>
</header>