<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//place your site keys here (keys for web-students.net posted here)
$siteKey = "6Lf_s7UaAAAAAJfuGfvySP1prCT4JtXp5pcaWr-3";
$secretKey = "6Lf_s7UaAAAAAENJrh_q4R_dNhdxI-fwhH5stcm-";
date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
//end config area ----------------------------------------


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples by Hien Nguyen";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
    
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-cube';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Galleries and Sliders";
        $logo = 'fa-camera-retro';
        $PageID = 'Galleries and Sliders';
    break;
        
    case 'map.php':
        $title = "Map to Seattle Central College";
        $logo = 'fa-map-o';
        $PageID = 'Map to Seattle Central College';
    break;
        
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar';
        $PageID = 'Google Calendar';
    break;
        
    case 'youtube.php':
        $title = "Web Accessibility";
        $logo = 'fa-youtube-square';
        $PageID = 'Web Accessibility';
    break;
        
    case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = 'fa-shopping-basket';
        $PageID = 'Shopping Carts';
    break;
        
    case 'siteapp.php':
        $title = "Responsive Websites vs Mobile Apps";
        $logo = 'fa-html5';
        $PageID = 'Responsive Websites vs Mobile Apps';
    break;
        
    case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = 'fa-eye';
        $PageID = 'Live Web Cameras';
    break;
        

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
   }


