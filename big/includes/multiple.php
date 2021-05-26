<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Redesign or brand new website?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Redesign Website <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> Brand New Website <br />
    </fieldset>
</div>
<div>
    <label>
			Why do you want to have a new website, or have your current site redesigned? <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
    <label>
			Please describe your organization in a few sentences.  <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
    <label>
			What problems do your prospects have that your business solves?  <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
    <label>
			Why do you believe site visitors should do business with you rather than with a competitor?  <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
    <label>
			What is your budget for this project?   <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
    <label>
			Who are the decision makers on this project? What is the turnaround time for making a decision?   <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
    <label>
			What is your deadline for completing the site?   <br /><textarea name="Comments" cols="36" rows="4" placeholder="Your answer is important to us!" tabindex="30"></textarea>
    </label>
    
</div>	
    
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

