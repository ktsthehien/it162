<?php include "includes/header.php";?>
    
<div class="wrapper">  
<div class="contact_us">
    <h1> Contact Us</h1>
    <p>If you'd like to get in touch, please use this form</p>
    </div>
    
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
    
</div>

<?php include "includes/footer.php";?>