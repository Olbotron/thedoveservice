</section><!-- /main -->

<!-- Footer -->

<footer id="footer"
class="w3-grid w3-padding-64 w3-light-grey
w3-small w3-center"
style="grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:32px">

<!-- Head Office -->

<div>

<h4>Head Office</h4>
<p style="display: inline-block; text-align: left; font-size: 11pt;">
The Dove Service<br>
Parklands<br>
1 Lyme Drive<br>
Trent Vale<br>
Stoke-on-Trent<br>
Staffordshire<br>
ST4 6NW<br>
<br>
<hr style="border: 1px solid #999; width: 50%; margin: 20px auto;">
<br>

<p>
<h4>Useful Links</h4>
<ul style="list-style-type: none; padding: 0; margin: 0;">
<li><a href="<?=$root_folder?>about/useful-links/faqs.php">
  Frequently Asked Questions</a></li>
<li><a href="<?=$root_folder?>about/useful-links/terms-and-conditions.php">Terms &amp; Conditions</a></li>
<li><a href="<?=$root_folder?>about/useful-links/privacy.php">Privacy Policy</a></li>
<li><a href="<?=$root_folder?>about/useful-links/cookies.php">Cookie Policy</a></li>
</ul>
</p>

</p>
</div>

<!-- About -->

<div>

<h4>Opening Times</h4>
<h5>Head Office:</h5>

<table style="display: inline-block; text-align: left; font-size: 10pt;">
<tr><td>Monday</td>
    <td>9am-5pm</td>
</tr>
<tr><td>Tuesday</td>
    <td>9am-5pm</td>
</tr>
<tr><td style="padding-right: 10px;">Wednesday</td>
    <td>9am-5pm</td>
</tr>
<tr><td>Thursday</td>
    <td>9am-5pm</td>
</tr>
<tr><td>Friday</td>
    <td>9am-4pm</td>
</tr>
</table>
<br>
<style>
  p {
    display: inline-block;
    text-align: left;
    font-size: 10pt;
  }
  p i {
    margin-right: 5px;
    font-size: 11pt !important;
  }
</style>
<hr style="border: 1px solid #999; width: 50%; margin: 20px auto;">
<p>
<i class="fa fa-fw fa-phone"></i>
01782 914455
<br>
<br>
<i class="fa fa-fw fa-envelope"></i>
enquiries@thedoveservice.org.uk
</p><br>
<br>

</div>

<div class="w3-left" style="padding: 0px 32px;">
<h4>Donate</h4>

<p>
<img src="<?=$root_folder?>assets/img/btn_donate_pp.png">
<br>
<br>
Charity # 1086625<br>
<br>
Registered Company # 3613893
</p>
<p style="display: inline-block; text-align: left; font-size: 14pt; color: red; background-color: yellow;">
<i class="fa fa-fw fa-credit-card"></i>
Credit Card (???)<br>(do you want to have have this function available?)
</p>

<!-- Social Media -->
<!--
<p class="w3-large">
<a href="https://www.facebook.com/TheDoveService/">
<i class="fa fa-facebook-official w3-hover-opacity"></i></a>
<a href="https://www.instagram.com/thedoveservice/">
<i class="fa fa-instagram w3-hover-opacity"></i></a>
<a href="https://twitter.com/thedoveservice">
<i class="fa fa-twitter w3-hover-opacity"></i></a>
<a href="https://www.linkedin.com/company/the-dove-service">
<i class="fa fa-linkedin w3-hover-opacity"></i></a>
</p>-->
<?php
$socials = 'small';
include 'socials.php';
?>

<p class="w3-large">
<span style="display: inline-block; text-align: center;">
<img src="<?=$root_folder?>assets/img/BACP_accredited_service_logo.png" style="width: 90%; background-color: #fff; padding: 10px; border: 2px solid #999; border-radius: 8px;">
</span>

</p>

</div>

</footer>

<div class="w3-blue w3-center w3-padding-24">
2026 &#64; The Dove Service
<hr style="border: 1px solid #fff; width: 80%; margin: 20px auto;">
Powered by <a href="https://www.changethepage.com"
title="W3.CSS"
target="_blank"
class="w3-hover-opacity">
<strong>www.changethepage.com</strong></a>

</div>

</main>

<!-- Newsletter Modal -->

<div id="newsletter" class="w3-modal">

<div class="w3-modal-content w3-animate-zoom"
style="padding:32px">

<div class="w3-container w3-white w3-center">

<button onclick="document.getElementById('newsletter').style.display='none'"
class="w3-button w3-xxlarge w3-right">
× </button>

<h2 class="w3-wide">Get in touch</h2>

<p>
We can provide face-to-face counselling appointments and remote appointments by phone or online.  Our Dove Buddies social groups run across multiple locations and we have a weekly Bereavement Support Group in Stoke on Trent. 
</p>

</div>
</div>
</div>

<script>
// Accordion
function myAccFunc() {
  var x = document.getElementById("demoAcc");

  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show","");
  }
}

// Open Jeans accordion on page load
document.getElementById("myBtn").click();

// Open sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

// Close sidebar
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
