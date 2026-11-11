<?php include_once '../header.php'; ?>
<?php

$hero_title = "Testimonials";

$hero_image = $root_folder .
    "assets/img/testimonials.webp";

$hero_subtitle =
    "Feedback from our clients is important to us. It helps us to maintain and improve the quality of services we provide within our local community.";

include_once "../hero.php";

?>
<section class="inner-container clearer-text">
<h2 class="banner2">WHY LEAVE A TESTIMONIAL?</h2>
<section class="two-columns">
    <div>Each testimonial we receive is important to the Dove Service. This is because client feedback helps us to maintain and improve the quality of services we provide within our local community. Testimonials also allow us to share client experiences of our services with our funding partners. Partial funding helps keep our core services running to support local communities in the future.<br>
    </div>
    <div style="text-align: center;">
        <img src="<?=$root_folder?>assets/img/feedback-morph.webp"
        alt="Client Testimonials">
    </div>
</section>
<h2 class="banner2">CLIENT TESTIMONIALS IN 2025/2026...</h2>
<link rel="stylesheet" href="../assets/css/testimonials.css">

<!-- MAIN TESTIMONIAL CAROUSEL -->
<section class="testimonial-carousel"
         aria-label="Client testimonials">

    <div id="testimonial-card"></div>

    <button class="carousel-btn prev"
            aria-label="Previous testimonial">
        ❮
    </button>

    <button class="carousel-btn next"
            aria-label="Next testimonial">
        ❯
    </button>

    <div class="testimonial-dots"
         id="testimonial-dots"></div>

</section>

<script src="../assets/js/testimonials.js"></script>

<style>
    .testimonial-form {
        background-color: #f9f9f9;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin: 2rem 0;
    }

    .comments-textarea {
        width: 100%;
        height: 100px;
        padding: 0.5rem;
        border-radius: 4px;
        border: 1px solid #ccc;
        resize: vertical;
    }
</style>
<section class="testimonial-form">
<h2 class="banner1">SHARE A TESTIMONIAL ABOUT YOUR <br>
EXPERIENCE WITH THE DOVE SERVICE</h2>
<br>
Name *<br>
<input type="text" id="name" name="name"><br>
Email *<br>
<input type="email" id="email" name="email"><br>
Comments *<br>
<textarea id="comments" name="comments" class="comments-textarea"></textarea><br>
0 of 250 max words.<br>
<br>
I give the Dove Service permission to use my story (anonymously) for marketing & PR purposes<br>
<input type="radio" id="marketing_permission" name="marketing_permission" value="yes"> Yes<br>
<input type="radio" id="marketing_permission" name="marketing_permission" value="no"> No<br>
<br>
Are you experiencing issues submitting your feedback? Contact @Enquiries<br>
</section>

<br>
DID YOU KNOW?<br>
Leaving a testimonial is not the only way our clients have supported our services. Being a charity is always a challenge, and a large part of our funding is generated through donations or self-fundraising. If you would like to support the Dove Service through a fundraiser, you can find more information on our fundraising page.<br> 
<br>
<h2 class="banner1">
    YOU CAN ALSO LEAVE A TESTIMONIAL VIA<br> SOCIAL MEDIA<br>
    <?php $socials = 'medium';
    include '../socials.php'; ?>
</h2>
<!--Facebook<br>
 Twitter<br>
 Instagram<br>
 Youtube<br>-->
<br>
TESTIMONIALS ARCHIVE<br>
<br>
Even though I didn’t talk (in the group), I listened which helped a lot.<br>
Deanne<br>
<br>
The drop in group is very friendly and supportive. It allows you time to think about the event and helps you to put it in the right context.<br>
Anne<br>
<br>
Helped me a lot. Thank you to my counsellor and the Dove team for being there.<br>
Jennifer<br>
<br>
Going to the Dove Service completely turned my life around for the better, cannot thank them enough, they made sense of how i was feeling and made me realise it was ok<br>
Michaela<br>
<br>
Cannot recommend this service enough.....helped me to understand things better and realise what I was feeling was normal.<br>
Michelle<br>
<br>
This service has been a life line for me and I thank the Dove service for that. It has helped me tremendously and I have made some very good friends.<br>
Sam<br>
</section>

<section class="w3-container swish-top-banner swish-top-yellow">
<h3 class="swish-banner">DID YOU KNOW?</h3>

<p class="swish-text">

Leaving a testimonial is not the only way our clients have supported our services. Being a charity is always a challenge, and a large part of our funding is generated through donations or self-fundraising. If you would like to support the Dove Service through a fundraiser, you can find more information on our fundraising page.
</p>
</section>
<?php $pageTheme = 'home';
include_once '../footer.php'; ?>