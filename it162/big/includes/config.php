<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretKey = "6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv";


/*
portal-config.php 

Used to store all of our IT162 configuration information

*/

//echo basename ($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename ($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = 'style = "color: #D6CE15"';

switch(THIS_PAGE) {

    case 'index.php':
        $title = "Web Developer Examples & Resources by Chris Navoczynski";
        $logo = "fa-home";
    break;

    case 'siteapp.php':
        $title = "Responsive Websites VS Mobile Apps Research";
        $logo = "fa-laptop";
    break;
    
    case 'galleries.php':
        $title = "Gallery Research & Resources";
        $logo = "fa-camera";
    break;
    
    case 'flexbox.php':
        $title = "Flexbox Research & Resources";
        $logo = "fa-columns";
    break;
    
    case 'shoppingcart.php':
        $title = "Shopping Cart Research & Resources";
        $logo = "fa-shopping-cart";
    break;

    case 'webcam.php':
        $title = "Live Web Cam & DOT";
        $logo = "fa-globe";
    break;

    case 'calendar.php':
        $title = "The Google Calendar";
        $logo = "fa-calendar";
    break;

    case 'map.php':
        $title = "Seattle Central College Location";
        $logo = "fa-map-o";
    break;

    case 'youtube.php':
        $title = "Website Accessibility - YouTube Video";
        $logo = "fa-youtube-play";
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';        
}
?>
