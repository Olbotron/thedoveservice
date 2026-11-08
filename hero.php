<!-- HERO SECTION -->
<style>
/* HERO SECTION */
.hero {
    position: relative;

    min-height: clamp(250px, 40vw, 450px);

    display: flex;
    align-items: flex-end;
    justify-content: center;

    background-size: cover;
    background-position: center;

    padding: 0 1rem 2rem;

    margin-left: -1rem;
    margin-right: -1rem;
}

.hero-content {
    text-align: center;
    color: white;
    z-index: 2;
    max-width: 900px;
}

.hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            to top,
            rgba(0,0,0,0.65) 0%,
            rgba(0,0,0,0.3) 30%,
            rgba(0,0,0,0) 100%
        );
}

.hero-content h1 {
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-size: clamp(2rem, 5vw, 3rem);
}

.hero-content p {
    margin: 0;
}

.hero-content p {
    font-size: clamp(1rem, 2vw, 1.3rem);
    margin-top: 1rem;
}
</style>    
<section class="hero"
         style="background-image: url('<?=$hero_image?>');">

    <div class="hero-content">
        <h1><?=$hero_title?></h1>

        <?php if (!empty($hero_subtitle)): ?>
            <p><?=$hero_subtitle?></p>
        <?php endif; ?>

    </div>

</section>