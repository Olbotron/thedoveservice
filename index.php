<?php
  include_once './header.php';
?>

<!-- Hero -->

  <div class="w3-display-container w3-container">

  <img src="assets/img/dove-service-hero.webp"
  alt="Founded in 1984 by Dr Linda Machin, the Dove Service is a grief and loss support charity, providing counselling, awareness raising and training to local communities, schools and organisations. We support children and adults who are experiencing issues relating to bereavement, loss or life-changing illness throughout Staffordshire, Cheshire and Wirral."
  style="width:100%">
  </div>
</div>

<style>
  .services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    padding: 2rem;
}

.service-card {
    position: relative;
    height: 400px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,.15);
}

@media (max-width: 992px) {
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .services-grid {
        grid-template-columns: 1fr;
    }
}

/* BACK PANEL */

.card-back {
    position: absolute;
    inset: 0;
    padding: 2rem;
    background: linear-gradient(
        180deg,
        #47b7d9 0%,
        #004f93 100%
    );
    color: white;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    opacity: 0;
    transition: .4s;
}

.service-card:hover .card-back {
    opacity: 1;
}

.service-card:hover img {
    transform: scale(1.1);
}

/* FRONT PANEL */

.card-front {
    position: absolute;
    inset: 0;
    z-index: 2;

    background: linear-gradient(
        180deg,
        #004f93 0%,
        #47b7d9 100%
    );

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    transition: transform .5s ease;
}

.card-front img {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 1.5rem;
}

.card-front h3 {
    color: white;
    text-align: center;
    font-size: 1.25rem;
    text-transform: uppercase;
}

/* HOVER EFFECT */

.service-card:hover .card-front {
    transform: translateY(-100%);
}

/* BUTTON */

.btn {
    display: inline-block;
    margin-top: 1.5rem;
    padding: .8rem 1.6rem;
    border: 2px solid white;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: .3s;
}

.btn:hover {
    background: white;
    color: #005e9d;
}
</style>

<section class="services-grid">

    <div class="service-card">
        <div class="card-front">
            <img src="assets/img/adult-support-services.jpg" alt="Adult Services">
            <h3>Adult Services</h3><br>
        </div>

        <div class="card-back">
            <h3>Adult Services</h3>
            <p>We offer counselling and other support to people of all ages who have experienced a bereavement, significant loss, or life changing/limiting illness
            </p>
            <a href="#" class="btn">Find Out More</a>
        </div>
    </div>

    <div class="service-card">
        <div class="card-front">
            <img src="assets/img/childrens-support-services.jpg" alt="Children and Young People">
            <h3>Children and <br>
            Young People</h3>
        </div>

        <div class="card-back">
            <h3>Children & Young People</h3>
            <p>The Dove Service can provide counselling and support to children & young people over the age of four, and their families.
            </p>
            <a href="#" class="btn">Find Out More</a>
        </div>
    </div>

    <div class="service-card">
        <div class="card-front">
            <img src="assets/img/employee-wellbeing-services.jpg" alt="Employee Wellbeing">
            <h3>Employee Wellbeing</h3><br>
        </div>

        <div class="card-back">
            <h3>Employee Wellbeing</h3>
            <p>The well-being of employees is vital to the success of any organisation. Our EAP services can help maintain a pysically and emotionally healthy workforce.
            </p>
            <a href="#" class="btn">Find Out More</a>
        </div>
    </div>

    <div class="service-card">
        <div class="card-front">
            <img src="assets/img/self-care.jpg" alt="Self Care">
            <h3>Self Care, Advice & Information</h3>
        </div>

        <div class="card-back">
            <h3>Self Care</h3>
            <p>Looking after yourself when you have experienced a bereavement or loss, or are going through a distressing period in your life.
            </p>
            <a href="#" class="btn">Find Out More</a>
        </div>
    </div>

</section>

<section class="two-columns">
    <div class="column">
        <h2 style="font-size: 2.4rem; margin-bottom: -20px;">SHARING EXPERIENCES</h2>
        <br>
        Please take a moment to watch this video, where our CEO <strong>Charlie O’Dell</strong> explains what we do as an organisation and how we can help you cope with a bereavement, <nobr>life-changing</nobr> illness or significant loss.
    </div>

    <div class="column">
       <iframe width="560" height="315" style="border-radius: 10px;" src="https://www.youtube.com/embed/ySU_IOn2HA0?si=8iSyOzwPeyEVnWnd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</section>

<section>
  <h2 class="banner1">Fundraising Partners</h2>
  <img src="assets/img/thanks-to.webp" style="width:100%" alt="Thanks to City of Stoke-on-Trent, Staffordshire County Council, NHS Staffordshire and Stoke-on-Trent Talking Therapies, Newcastle-Under-Lyme Borough Council, Crewe Town Council, National Lottery Community Fund">
</section>


<!-- Subscribe -->
<section class="w3-container swish-top-banner swish-top-yellow">
<h3 class="swish-banner">Get in touch</h3>

<p class="swish-text">
We can provide face-to-face counselling appointments and remote appointments by phone or online.  Our Dove Buddies social groups run across multiple locations and we have a weekly Bereavement Support Group in Stoke on Trent. 
</p>

</section>
<?php
  $pageTheme = 'home';
  include_once './footer.php';
?>