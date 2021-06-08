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
        $title = "The Copy Spot";
    break;
    
    case 'services.php':
        $title = "Our Services";
    break;
        
    case 'about.php':
        $title = "Our Team";
    break;
        
    case 'contact.php':
        $title = "Contact Form";
    break;

    default:
        $title = THIS_PAGE;
   }


