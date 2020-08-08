<link rel="stylesheet" href="css/forms.css" />

<section>
<div class = "formcss">
<h2>Welcome to Chris' BIG IT162 Page!<h2>
  <div class = "introcss">
  <p> Please take a moment to answer a few questions below 
    or feel free to explore to the rest of the Website. 
    Your comments and feedback are appreciated.</p>
  </div>
  <h3>Contact Information</h3>
</div>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "chrisnavo01@gmail.com";  //place your/your client's email address here
        $toName = "Chris Navoczynski"; //place your client's name here
        $website = "www.chrisnavo.com";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

?>
       
<p class="clear-recaptcha"></p> 
</section>
<aside>
<h2>Some of My Favorite Web Resources</h2>
    <div class = "linkscss">    
    <ul>
      <li><a href="https://www.w3schools.com/" target="_blank">w3schools</a></li>
      <li><a href="https://www.linkedin.com/learning/" target="_blank">Linkedin Learning</a></li>
      <li><a href="https://www.edx.org/learn/web-development" target="_blank">edX</a></li>
    </ul>
    </div>
</aside>

