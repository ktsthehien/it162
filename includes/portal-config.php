<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Hien's IT162 Portal Page";
        $PageID = 'Welcome';
    break;
    
    case 'contact.php':
        $title = "Hien's IT162 Contact Page";
        $PageID = 'Contact Hien';
    break;
        
    case 'flowchart.php':
        $title = "Hien's IT162 Flowchart Page";
        $PageID = 'Flowchart Page';
    break;
        
    case 'aia.php':
        $title = "Hien's IT162 Aia Page";
        $PageID = 'AIA (Audience, Issues and Approach)';
    break;

    default:
        $title = THIS_PAGE;
        $PageID = 'Welcome';
   }

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact Hien";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

