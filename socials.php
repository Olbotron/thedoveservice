<style>
    .socials {
        background-color: #c9d5e0;
        color: #6a7f98;
        padding: 10px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
    }

    .socials__title {
        text-align: center;
        margin-bottom: 20px;
    }

    .socials__list {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    .socials__item {
        background-color: #ffffff;
        color: #024985;
        margin: 0 10px;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .socials__item_medium {
        background-color: #ffffff;
        font-size: 1.75rem;
        margin: 0 10px;
        padding: 10px 20px;
        border-radius: 8px;

        width: 80px;
        height: 80px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #fff;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 16px;

        box-shadow:
        0 4px 8px rgba(0,0,0,0.05),
        0 8px 24px rgba(0,0,0,0.08);

        transition: all 0.3s ease;
    }

    .socials__item_medium:hover {
        transform: translateY(-4px);
        box-shadow:
            0 8px 16px rgba(0,0,0,0.08),
            0 16px 32px rgba(0,0,0,0.12);
    }      

    .socials__link_small {
        background-color: #ffffff;
        font-size: 1.2rem;
        margin: 2px 2px;
        padding: 2px 2px;
        border-radius: 8px;

        /* width: 30px;
        height: 30px; */

        display: flex;
        align-items: center;
        justify-content: center;

        background: #fff;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 16px;

        box-shadow:
        0 4px 8px rgba(0,0,0,0.05),
        0 8px 24px rgba(0,0,0,0.08);

        transition: all 0.3s ease;
    }

    .socials__link_small:hover {
        transform: translateY(-4px);
        box-shadow:
            0 8px 16px rgba(0,0,0,0.08),
            0 16px 32px rgba(0,0,0,0.12);
    }

    .socials__link {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .fa-facebook{
        color: #3b5998;
    }

    .fa-twitter{
        color: #1da1f2;
    }

    .fa-instagram{
        color: #e08ea9;
    }

    .fa-youtube{
        color: #ff0000;
    }
    .hover-opacity:hover{
        opacity: 0.8;
    }
</style>

<?php switch($socials){
    case 'large':  ?>
<section class="socials">
    <div class="container">
        <div class="socials__inner">
            <h2 class="socials__title">Follow us on social media</h2>
            <ul class="socials__list">
                <a href="https://www.facebook.com/TheDoveService/" class="socials__link hover-opacity"><li class="socials__item"><i class="fa fa-facebook "></i> Facebook</li></a>
                <a href="https://x.com/TheDoveService" class="socials__link hover-opacity">
                <li class="socials__item">
                    <i class="fa-brands fa-square-x-twitter" style="color: rgb(24, 95, 222);"></i> Twitter</li></a>
                <a href="https://www.instagram.com/thedoveservice/" class="socials__link">
                <li class="socials__item hover-opacity">
                    <i class="fa   fa-instagram "></i>  Instagram</li></a>
                <a href="https://www.youtube.com/@thedoveservice6968" class="socials__link hover-opacity">
                <li class="socials__item">
                    <i class="fa fa-youtube "></i> YouTube</li></a>
            </ul>
        </div>
    </div>
</section>
<?php 
    break;
    case 'medium': ?>
<div class="container">
    <ul class="socials__list">
                <a href="https://www.facebook.com/TheDoveService/" class="socials__link hover-opacity"><li class="socials__item_medium"><i class="fa fa-facebook "></i></li></a>
                <a href="https://x.com/TheDoveService" class="socials__link hover-opacity">
                <li class="socials__item_medium"><i class="fa-brands fa-square-x-twitter" style="color: rgb(24, 95, 222);"></i>
                </li></a>
                <a href="https://www.instagram.com/thedoveservice/" class="socials__link hover-opacity">
                <li class="socials__item_medium hover-opacity">
                <i class="fa fa-instagram "></i></li></a>
                <a href="https://www.youtube.com/@thedoveservice6968" class="socials__link hover-opacity">
                <li class="socials__item_medium"><i class="fa fa-youtube "></i></li></a>
            </ul>
</div>
<?php 
    break;
    case 'small': ?>
<div class="container">
    <ul class="socials__list">
                <a href="https://www.facebook.com/TheDoveService/" class="socials__link_small hover-opacity"><li class="socials__item"><i class="fa fa-facebook "></i></li></a>
                <a href="https://x.com/TheDoveService" class="socials__link_small hover-opacity">
                <li class="socials__item">
                    <i class="fa-brands fa-square-x-twitter" style="color: rgb(24, 95, 222);"></i> </li></a>
                <a href="https://www.instagram.com/thedoveservice/" class="socials__link_small">
                <li class="socials__item hover-opacity">
                    <i class="fa   fa-instagram "></i>
                </li></a>
                <a href="https://www.youtube.com/@thedoveservice6968" class="socials__link_small hover-opacity">
                <li class="socials__item">
                    <i class="fa fa-youtube "></i></li></a>
            </ul>
</div>
<?php 
    break;
    default: ?>
<div class="container">NO SOCIALS</div>
<?php 
    break;
} ?>