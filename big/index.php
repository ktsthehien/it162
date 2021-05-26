<?php include "includes/header.php";?>
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
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
  <ul>
    <li><a href="https://xbsoftware.com/blog/website-development-process-full-guide/">Website Development Process: Full Guide in 7 Steps</a></li>
    <li><a href="https://directlinedev.com/blog/your-complete-guide-website-development-process/">Website Development Process</a></li>
    <li><a href="https://www.signitysolutions.com/blog/web-development-life-cycle/">Web Development Life Cycle</a></li>
    <li><a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830">How to Extract the Facts with a Web Design Client Questionnaire</a></li>
              </ul>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
