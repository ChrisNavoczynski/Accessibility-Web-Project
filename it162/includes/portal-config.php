<?php

/*
portal-config.php 

Used to store all of our IT162 configuration information

*/

//echo basename ($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename ($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ' ';

switch(THIS_PAGE) {

    case 'index.php':
        $title = "Chris' IT162 Title Page";
        $logo = "fa-home";
        $logo_color = 'style="color:#008B8B"';
    break;

    case 'aia.php':
        $title = "Chris' AIA Page";
        $logo = "fa-universal-access";
        $logo_color = 'style="color:#9999CC"';
    break;
    
    case 'flowchart.php':
        $title = "Chris' Flowchart Page";
        $logo = "fa-columns";
        $logo_color = 'style="color:#D2B48C"';
    break;
    
    case 'contactme.php':
        $title = "Chris' Contact Page";
        $logo = "fa-envelope";
        $logo_color = 'style="color:#FFA07A"';
    break; 

    default:
        $title = THIS_PAGE;
        $logo = '';
        
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Chris";

/*
Here we are creating a function to generate links 
and keep the highlight on the current page. 

       <a href="index.php" class="active">Welcome</a>
       <a href="big/index.php">Big</a>
       <a href="aia.php">AIA</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.php">Final Project</a>
       <a href="contactme.php">Contact Chris</a>

*/

function makeLinks($nav1)
 {
    $myReturn = '';
    foreach ($nav1 as $url => $text) {

        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"active\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";
        }
        
    }
    return $myReturn;
 }

?>






