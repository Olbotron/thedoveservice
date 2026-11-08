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
<h2>WHY LEAVE A TESTIMONIAL?</h2>
Each testimonial we receive is important to the Dove Service. This is because client feedback helps us to maintain and improve the quality of services we provide within our local community. Testimonials also allow us to share client experiences of our services with our funding partners. Partial funding helps keep our core services running to support local communities in the future.<br>
<br>
<h2>CLIENT TESTIMONIALS IN 2025/2026...</h2>
<style>
.testimonial-carousel {
    position: relative;
    max-width: 900px;
    margin: 40px auto;
    padding: 0 60px;
}

.testimonial-card {
    border-top: 4px solid #6e6e6e;
    border-bottom: 4px solid #6e6e6e;
    background: #c7f2ca;
    padding: 25px;
    font-style: italic;

    opacity: 0;
    transform: translateY(20px);

    transition:
        opacity 0.8s ease,
        transform 0.8s ease;

    min-height: 550px;

    box-shadow:
        0 4px 12px rgba(f,0,0,0.08);
}

.testimonial-card.show {
    opacity: 1;
    transform: translateY(0);
}

.quote-mark-left,
.quote-mark-right {
    font-family: Georgia, serif;
    font-size: 4rem;
    line-height: 1;
    color: #6e6e6e;
}

.quote-mark-right {
    display: block;
    text-align: right;
}

.testimonial-text {
    line-height: 1.7;
    margin: 15px 0;
}

.testimonial-author {
    display: inline-block;
    padding: 4px 10px;
    border-radius: 20px;
    background: rgba(110,110,110,.1);
    color: #555;
    font-size: 0.85rem;
    font-weight: 600;
}

.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);

    width: 44px;
    height: 44px;
    border: none;
    border-radius: 50%;

    background: #6e6e6e;
    color: white;

    cursor: pointer;
    font-size: 20px;

    transition: 0.3s;
}

.carousel-btn:hover {
    background: #444;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

.testimonial-dots {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.testimonial-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: none;
    background: #b4b4b4;
    cursor: pointer;
}

.testimonial-dot.active {
    background: #6e6e6e;
}

@media (max-width: 768px) {

    .testimonial-carousel {
        padding: 0 10px;
    }

    .carousel-btn {
        display: none;
    }

    .testimonial-card {
        padding: 20px;
    }
}

@media (prefers-reduced-motion: reduce) {

    .testimonial-card {
        transition: none;
    }
}

</style>

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


<script>

const testimonials = [

{
    author: "Counselling Client",
    text: "Counselling seemed like a last resort when dealing with anxiety and stress. Within minutes of the first meeting I realised that it should have been a priority, way in advance of deteriorating wellness. The Counsellors are highly trained, non-judgmental and supportive. My recovery was wholly due to Doves’s help."
},

{
    author: "Counselling Client",
    text: "Paul has helped me be happy with myself, also allowing me to feel comfortable speaking openly with others which was one of my previous struggles."
},

{
    author: "Bereavement Counselling Client",
    text: "I was referred to the service for bereavement counselling. I finally felt able to discuss a range of issues from the past 6 years that have been affecting my life. Through discussion and questioning I was able to delve deeper into issues that I hadn't even realised were problems and come up with a range of strategies to cope."
},

{
    author: "Counselling Client",
    text: "I have a much better sleep routine and I feel a lot more relaxed since talking through my issues. Paul was patient and understanding with zero judgement towards me. I appreciate all of the Dove Services help."
},

{
    author: "Bereavement Counselling Client",
    text: "I came to your service following a number of close and traumatic bereavements and subsequent upheaval and felt emotionally frozen and had lost my motivation for work or a social life. I felt listened to and the topic of conversation could go in any direction and yet I always came away with something to feel positive about. I was able to explore my feelings in a safe place and actually have a laugh at some of the curved balls life throws you. I came away with a better understanding of who I am and what is important. I was resistant to counselling but found it very helpful and wouldn't hesitate to recommend this service to a colleague. I feel it has helped me to stay in work and get through a tough time of my life but now I am facing forward and far kinder to myself on a daily basis."
},

{
    author: "Counselling Client",
    text: "I honestly can't thank Matthew enough. I couldn't imagine where I would be now without his support. I have been on an emotional journey. Going through a lot of emotions, fight and flight being the start of the journey and ending with light at the end of the tunnel. I am so grateful. He let me take off my seat belt, without judging how harsh I've been on myself. Making me stop asking myself why me. He is a credit to Dove Service."
},

{
    author: "Bereavement Counselling Client",
    text: "Debra has been so helpful and supportive throughout my journey with the Dove Service. I was very nervous about having counselling but Debra put me at ease straight away and she was so easy to talk to. She listened and let me talk freely, helping me to understand my emotions better and to know that it's okay for me to be grieving. I feel so much better after speaking to Debra over the past few months and I am so grateful to her and the Dove Service. It has changed my life. If I could give anyone advice about having counselling it would be to take the step and go for it."
},

{
    author: "Mental Wellbeing Client",
    text: "I suffer with anxiety and depression. I was not able to go to work. I needed help with lots of different issues. Through the weeks there has been a marked improvement in my sleep, relaxation and dealing with my anxiety. The Dove Service and Mark have enabled me to have a safe space to work on me. Mark has helped me to come to more self-realisation, to recognise my feelings and how they affect me. I would like to thank Mark and the Dove Service for helping me through this difficult time."
},

{
    author: "Counselling Client",
    text: "The Dove Service is wonderful, the second time I've used it. Thank you. Sarah understood where I was coming from and what I needed even when I didn't, and adjusted the sessions as required. I can't thank Sarah or the service enough. Inner Child work is fantastic and needs to be shared more."
},

{
    author: "Bereavement Counselling Client",
    text: "My counsellor was amazing. She made me feel like I was not losing my mind and taught me to give myself permission to express my anxiety and my grief. I now feel like I am myself again and feel ready to live my best life. I cannot express just how grateful I am. I feel like this service has saved my life."
},

{
    author: "Workplace Wellbeing Client",
    text: "I feel that I have been supported very well through a transition in my job role and family pressures. The counsellor has been an excellent support for me and I would highly recommend The Dove Service as a result of my positive experience."
},

{
    author: "Bereavement Counselling Client",
    text: "I called the Dove Service because I knew that I couldn't get over the grief on my own. I had tried and failed. With the help of my counsellor I talked about things that I found really hard and that I didn't want to put any more stress onto my family. I now know that I can cope, but if I struggle I can contact Dove Services again and have more help. I can't recommend this enough for anyone struggling."
},

{
    author: "Counselling Client",
    text: "I have gained an experience that I feel I will always look back on very gratefully. It has been good to be able to speak to someone outside of my life circles who listens and helps me to reflect and listen to myself. I have also gained a number of strategies along the way. My mental health has improved incredibly. I would recommend counselling to anyone struggling."
},

{
    author: "Bereavement Counselling Client",
    text: "I recently lost my mum and was finding it hard to cope with things. Counselling has helped me to focus on myself and clear the fog that was in my head. I feel I'm getting there now and repairing myself. I'm slightly dented from my experience but working better from your help and support. Thank you so much."
},

{
    author: "Bereavement Counselling Client",
    text: "The recent death of my husband and the need to stop overthinking every aspect of my life brought me to the Dove Service. Gwyneth allowed me to express feelings that had been bottled up in my mind for many years. She helped me untangle so much that had been causing anxiety and stress. With her guidance I was able to recognise behaviours that were preventing me from simplifying my thought processes. I now have a feeling of calm that has escaped me for so long and I'm looking forward to a future that will bring exciting new opportunities. I would highly recommend the Dove Service to everyone who is struggling with any aspect of bereavement."
}

];

const card = document.getElementById("testimonial-card");
const dotsContainer = document.getElementById("testimonial-dots");

let currentIndex = 0;
let interval;

function renderTestimonial(index) {

    const testimonial = testimonials[index];

    card.className = "testimonial-card";

    setTimeout(() => {

        card.innerHTML = `
            <span class="quote-mark-left">“</span>

            <div class="testimonial-text">
                ${testimonial.text}
            </div>

            <span class="quote-mark-right">”</span>

            <span class="testimonial-author">
                ${testimonial.author}
            </span>
        `;

        card.classList.add("show");

    }, 150);

    document.querySelectorAll(".testimonial-dot")
        .forEach((dot, i) => {

            dot.classList.toggle(
                "active",
                i === index
            );

        });
}

function nextTestimonial() {

    currentIndex++;

    if(currentIndex >= testimonials.length) {
        currentIndex = 0;
    }

    renderTestimonial(currentIndex);
}

function previousTestimonial() {

    currentIndex--;

    if(currentIndex < 0) {
        currentIndex = testimonials.length - 1;
    }

    renderTestimonial(currentIndex);
}

testimonials.forEach((_, index) => {

    const dot = document.createElement("button");

    dot.className = "testimonial-dot";

    dot.setAttribute(
        "aria-label",
        `Go to testimonial ${index + 1}`
    );

    dot.addEventListener("click", () => {

        currentIndex = index;

        renderTestimonial(currentIndex);

    });

    dotsContainer.appendChild(dot);

});

document
    .querySelector(".next")
    .addEventListener("click", nextTestimonial);

document
    .querySelector(".prev")
    .addEventListener("click", previousTestimonial);

function startAutoPlay() {

    interval = setInterval(
        nextTestimonial,
        20000
    );
}

function stopAutoPlay() {

    clearInterval(interval);
}

const carousel =
    document.querySelector(".testimonial-carousel");

carousel.addEventListener(
    "mouseenter",
    stopAutoPlay
);

carousel.addEventListener(
    "mouseleave",
    startAutoPlay
);

carousel.addEventListener(
    "focusin",
    stopAutoPlay
);

carousel.addEventListener(
    "focusout",
    startAutoPlay
);

document.addEventListener(
    "keydown",
    e => {

        if(e.key === "ArrowRight") {
            nextTestimonial();
        }

        if(e.key === "ArrowLeft") {
            previousTestimonial();
        }

    }
);

let touchStartX = 0;

carousel.addEventListener(
    "touchstart",
    e => {

        touchStartX =
            e.changedTouches[0].screenX;

    }
);

carousel.addEventListener(
    "touchend",
    e => {

        const touchEndX =
            e.changedTouches[0].screenX;

        const diff =
            touchStartX - touchEndX;

        if(diff > 50) {
            nextTestimonial();
        }

        if(diff < -50) {
            previousTestimonial();
        }

    }
);

renderTestimonial(0);
startAutoPlay();
</script>

SHARE A TESTIMONIAL ABOUT YOUR EXPERIENCE<br>WITH THE DOVE SERVICE
Student Placements<br>
Name *<br>
marketing permission *<br>
Email *<br>
Comments *<br>
<br>
0 of 250 max words.<br>
I give the Dove Service permission to use my story (anonymously) for marketing & PR purposes<br>
Yes<br>
No<br>
Are you experiencing issues submitting your feedback? Contact @Enquiries<br>
<br>
DID YOU KNOW?<br>
Leaving a testimonial is not the only way our clients have supported our services. Being a charity is always a challenge, and a large part of our funding is generated through donations or self-fundraising. If you would like to support the Dove Service through a fundraiser, you can find more information on our fundraising page.<br> 
<br>
YOU CAN ALSO LEAVE A TESTIMONIAL VIA<br> SOCIAL MEDIA<br>
Facebook<br>
 Twitter<br>
 Instagram<br>
 Youtube<br>
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

<?php include_once '../footer.php'; ?>