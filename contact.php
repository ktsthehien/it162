<?php include "includes/header.php";?>

<section>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="My Photo" />
 <img src="images/tablet.jpg" class="tablet" alt="My Photo" />
 <img src="images/phone.jpg" class="phone" alt="My Photo" />
 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ktsthehien@gmail.com";  //place your/your client's email address here
        $toName = "Hien"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

//        echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>

