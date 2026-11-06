<?php include_once '../../header.php'; 

$hero_title = "Trustees";

$hero_image = $root_folder .
    "assets/img/trustees.webp";

$hero_subtitle =
    "We are fortunate to have a highly dedicated Board of Trustees, who share a vast array of skills and experience.";

include_once "../../hero.php";

?>
<style>
    .trustees-grid {
    display: grid;
    margin: 2rem 2rem;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
}

.trustee-card {
    background: #fff;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

.trustee-card img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
}

.role {
    font-weight: 600;
    color: #6c757d;
}

@media (max-width: 768px) {
    .trustees-grid {
        grid-template-columns: 1fr;
    }
}

    .trustee-content>h3 {
        font-size: 1.25rem;
        font-weight: bold;
        text-transform: small-caps;
        margin: 0;
    }

    .trustee-content>h4 {
        margin-top: -3px;
        font-size: 1rem;
        font-weight: bold;
    }
</style>

<section class="trustees-grid">
    <article class="trustee-card">
        <img src="../../assets/img/trustee-simon.webp" alt="Simon Knock">
        <h3>SIMON KNOCK</h3>
        <h4>Chair</h4>

        <p>
            Simon's career stretches over 30 years within the legal profession,
            practising within North Staffordshire and specialising in family
            matters. Now retired, Simon also has experience within the education
            system as a School Governor, whilst more recently he volunteers for
            various local charities within Stoke-on-Trent. Simon can think
            critically, has a willingness to work hard, while possessing
            excellent communication skills, and on occasions, also has a sense
            of humour!
        </p>
    </article>

    <article class="trustee-card">
    <img src="../../assets/img/trustee-suzanne.webp" alt="Suzanne Goodall">
    <div class="trustee-content">
        <h3>SUZANNE GOODALL</h3>
        <h4>Trustee</h4>

        <p>
            Suzanne has over 30 years of experience working across multiple
            industries, including Food Manufacturing, Utilities, Media, and
            Financial Services. Having recently taken early retirement, Suzanne
            wanted to utilise her skills and experience to support a local
            charity, and having lost her father to cancer in 2019, felt a
            connection to The Dove Service and the difference they make to
            people who are dealing with bereavement and grief.
        </p>
    </article>
    
    <article class="trustee-card">
        <img src="../../assets/img/trustee-chris.webp" alt="Chris Quayle">
        <h3>CHRIS QUAYLE</h3>
        <h4>Trustee</h4>

        <p>
            Chris is a Chartered Accountant with a career in finance stretching
            over 40 years. He has worked in various roles, including company
            director and secretary. Since retiring, Chris has taken on
            voluntary work with Citizens Advice and is also a local magistrate.
            Chris lives in North Staffordshire, is married and has three
            daughters. He is keen on watching sport and is a season ticket
            holder at Port Vale.
        </p>
    </article>
    
    
    
    <article class="trustee-card">
        <img src="../../assets/img/trustee-val.webp" alt="Val Nash">
        <h3>VAL NASH</h3>
        <h4>Trustee</h4>

        <p>
            The majority of Val's work has been in the voluntary sector. In
            recent years, as Chief Officer of Healthwatch and Project Lead for a
            Social Hub development project across Stoke-on-Trent, supporting
            people with social anxiety in re-entering society. Since retiring,
            Val feels that she still has plenty to give and has always admired
            the work of The Dove Service, often referring people whilst working
            and saw how moving people through grief and loss was instrumental in
            giving many of the clients she has supported.
        </p>
    </article>
    
    
    <article class="trustee-card">
        <img src="../../assets/img/trustee-linda.webp" alt="Dr. Linda Machin">

        <h3>DR. LINDA MACHIN</h3>
        <h4>Honorary President</h4>

        <p>
            As a leading Research Fellow at Keele University and founder of The
            Dove Service, Linda became Honorary President of the charity in
            2015. Through her work with the Adult Attitude to Grief (AAG)
            assessment tool she is now recognised nationally and
            internationally as a leading authority on bereavement and grief in
            adults.
        </p>
    </article>

    <article class="trustee-card">
     <img src="../../assets/img/trustee-you-avatar.webp" alt="You">
<h3>YOU</h3>
<h4>Become a Trustee</h4>
We are currently looking to expand our Board of Trustees and we could be looking for you! As a member of our highly motivated and enthusiastic Board of Trustees you will play a key role in influencing the strategic direction of the organisation, setting overall policy, defining goals, setting targets and evaluating performance. You will be instrumental in supporting the future development and growth of the organisation, using any specific knowledge or experience you have to help the Board of Trustees reach sound decisions. This will involve scrutinizing Board papers, leading discussions, focusing on key issues, and providing advice and guidance requested by the Board on new initiatives.
</div>
</section>
<section>
<section class="w3-container swish-top w3-padding-32">
<h3 class="swish-banner">Get in touch</h3>
<p class="swish-text">
If you would relish the opportunity to support our fast paced, challenging, but ultimately values based, person-centred organisation, please download the info pack below, or call 01782 914455 for an informal chat.
<br>    
TRUSTEE INFO. PACK (PDF)<br>

</section>
<?php include_once '../../footer.php'; ?>