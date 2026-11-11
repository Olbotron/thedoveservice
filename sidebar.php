<?php

//$root_folder = 'https://www.changethepage.com/thedoveservice/';

$current_page = basename($_SERVER['PHP_SELF']);
$current_url  = $_SERVER['REQUEST_URI'];

function isActive($page)
{
    global $current_page;
    return $current_page === $page ? 'w3-light-grey' : '';
}

function sectionOpen($matches)
{
    global $current_url;

    foreach ($matches as $match)
    {
        if (strpos($current_url, $match) !== false)
        {
            return true;
        }
    }

    return false;
}

$aboutOpen = sectionOpen([
    '/about/'
]);

$servicesOpen = sectionOpen([
    '/services/'
]);

$supportOpen = sectionOpen([
    '/support-us/'
]);

$adultsOpen = sectionOpen([
    '/services/adults/'
]);

$childrenOpen = sectionOpen([
    '/services/children-and-young-people/'
]);
?>
<a href="<?=$root_folder?>index.php"
   class="w3-bar-item w3-button <?=isActive('index.php')?>">

    Home

</a>
<button
    class="w3-button w3-block w3-left-align"
    onclick="toggleMenu('aboutMenu')">

    About
    <i class="fa fa-caret-down"></i>

</button>

<div id="aboutMenu"
     class="w3-bar-block w3-padding-large <?= $aboutOpen ? '' : 'w3-hide' ?>">

    <!-- Who We Are -->

    <button
        class="w3-button w3-block w3-left-align"
        onclick="toggleMenu('whoWeAreMenu')">

        Who We Are
        <i class="fa fa-caret-down"></i>

    </button>

    <div id="whoWeAreMenu"
         class="w3-bar-block w3-padding-large">

        <a href="<?=$root_folder?>about/who-we-are/our-team.php"
           class="w3-bar-item w3-button <?=isActive('our-team.php')?>">

            Our Team

        </a>

        <a href="<?=$root_folder?>about/who-we-are/trustees.php"
           class="w3-bar-item w3-button <?=isActive('trustees.php')?>">

            Trustees

        </a>

    </div>

    <!-- Testimonials -->

    <a href="<?=$root_folder?>about/testimonials.php"
       class="w3-bar-item w3-button <?=isActive('testimonials.php')?>">

        Testimonials

    </a>

    <!-- Useful Links -->

    <button
        class="w3-button w3-block w3-left-align"
        onclick="toggleMenu('usefulLinksMenu')">

        Useful Links
        <i class="fa fa-caret-down"></i>

    </button>

    <div id="usefulLinksMenu"
         class="w3-bar-block w3-padding-large">

        <a href="<?=$root_folder?>about/useful-links/faqs.php"
           class="w3-bar-item w3-button <?=isActive('faqs.php')?>">

            FAQ

        </a>

        <a href="<?=$root_folder?>about/useful-links/quality-standards.php"
           class="w3-bar-item w3-button <?=isActive('quality-standards.php')?>">

            Quality Standards

        </a>

        <a href="<?=$root_folder?>about/useful-links/privacy.php"
           class="w3-bar-item w3-button <?=isActive('privacy.php')?>">

            Privacy Policy

        </a>

        <a href="<?=$root_folder?>about/useful-links/terms-and-conditions.php"
           class="w3-bar-item w3-button <?=isActive('terms-and-conditions.php')?>">

            Terms & Conditions

        </a>

    </div>
</div>

<button
    class="w3-button w3-block w3-left-align"
    onclick="toggleMenu('servicesMenu')">

    Services
    <i class="fa fa-caret-down"></i>

</button>

<div id="servicesMenu"
     class="w3-bar-block w3-padding-large w3-medium <?= $servicesOpen ? '' : 'w3-hide' ?>">

<button
    class="w3-button w3-block w3-left-align"
    onclick="toggleMenu('adultsMenu')">

    Adults
    <i class="fa fa-caret-down"></i>

</button>

<div id="adultsMenu"
     class="w3-bar-block w3-padding-large <?= $adultsOpen ? '' : 'w3-hide' ?>">

    <a href="<?=$root_folder?>services/adults/adult-counselling.php"
       class="w3-bar-item w3-button <?=isActive('adult-counselling.php')?>">

        Adult Counselling

    </a>

    <a href="<?=$root_folder?>services/adults/employee-wellbeing.php"
       class="w3-bar-item w3-button <?=isActive('employee-wellbeing.php')?>">

        Employee Wellbeing

    </a>

    <a href="<?=$root_folder?>services/adults/bereavement-groups.php"
       class="w3-bar-item w3-button <?=isActive('bereavement-groups.php')?>">

        Bereavement Groups

    </a>

    <a href="<?=$root_folder?>services/adults/dove-buddies.php"
       class="w3-bar-item w3-button <?=isActive('dove-buddies.php')?>">

        Dove Buddies Social Groups

    </a>

</div>

<button
    class="w3-button w3-block w3-left-align"
    onclick="toggleMenu('childrenMenu')">

    Children & Young People
    <i class="fa fa-caret-down"></i>

</button>

<div id="childrenMenu"
     class="w3-bar-block w3-padding-large <?= $childrenOpen ? '' : 'w3-hide' ?>">

    <a href="<?=$root_folder?>services/children-and-young-people/children-counselling.php"
       class="w3-bar-item w3-button <?=isActive('children-counselling.php')?>">

        Children & Y.P. Counselling

    </a>

    <a href="<?=$root_folder?>services/children-and-young-people/parents-and-professionals.php"
       class="w3-bar-item w3-button <?=isActive('parents-and-professionals.php')?>">

        Parents & Professionals

    </a>

    <a href="<?=$root_folder?>services/children-and-young-people/making-a-referral.php"
       class="w3-bar-item w3-button <?=isActive('making-a-referral.php')?>">

        Making a Referral

    </a>

</div>

<a href="<?=$root_folder?>services/self-care.php"
   class="w3-bar-item w3-button <?=isActive('self-care.php')?>">

    Self Care

</a>

<a href="<?=$root_folder?>services/locations.php"
   class="w3-bar-item w3-button <?=isActive('locations.php')?>">

    Locations

</a>

</div>

<button
    class="w3-button w3-block w3-left-align"
    onclick="toggleMenu('supportMenu')">

    Support Us
    <i class="fa fa-caret-down"></i>

</button>

<div id="supportMenu"
     class="w3-bar-block w3-padding-large w3-medium <?= $supportOpen ? '' : 'w3-hide' ?>">

    <a href="<?=$root_folder?>support-us/fundraising.php"
       class="w3-bar-item w3-button <?=isActive('fundraising.php')?>">

        Fundraising

    </a>

    <a href="<?=$root_folder?>support-us/donate.php"
       class="w3-bar-item w3-button <?=isActive('donate.php')?>">

        Donate

    </a>

    <a href="<?=$root_folder?>support-us/volunteering.php"
       class="w3-bar-item w3-button <?=isActive('volunteering.php')?>">

        Volunteering

    </a>

</div>

<a href="<?=$root_folder?>contact-us/contact-us.php"
   class="w3-bar-item w3-button <?=isActive('contact-us.php')?>">

    Contact Us

</a>

<a href="<?=$root_folder?>shop/shop.php"
   class="w3-bar-item w3-button <?=isActive('shop')?>">

    Shop

</a>

<script>
    function toggleMenu(id)
{
    const menu = document.getElementById(id);

    if (menu.classList.contains("w3-hide"))
    {
        menu.classList.remove("w3-hide");
    }
    else
    {
        menu.classList.add("w3-hide");
    }
}
</script>