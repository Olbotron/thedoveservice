
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

function updateDots(index) {

    document
        .querySelectorAll(".testimonial-dot")
        .forEach((dot, i) => {

            dot.classList.toggle(
                "active",
                i === index
            );

        });

}

function showTestimonial(index) {

    const oldText =
        card.querySelector(".testimonial-text");

    const oldAuthor =
        card.querySelector(".testimonial-author");

    // First load
    if (!oldText || !oldAuthor) {

        const testimonial = testimonials[index];

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

        updateDots(index);

        return;
    }

    // Fade out existing content

    oldText.style.opacity = "0";
    oldText.style.transform = "translateY(15px)";

    oldAuthor.style.opacity = "0";
    oldAuthor.style.transform = "translateY(15px)";

    setTimeout(() => {

        const testimonial = testimonials[index];

        card.innerHTML = `
            <span class="quote-mark-left">“</span>

            <div class="testimonial-text testimonial-enter">
                ${testimonial.text}
            </div>

            <span class="quote-mark-right">”</span>

            <span class="testimonial-author testimonial-enter">
                ${testimonial.author}
            </span>
        `;

        updateDots(index);

        setTimeout(() => {

            card.querySelectorAll(".testimonial-enter")
                .forEach(el => {
                    el.classList.remove("testimonial-enter");
                });

        }, 50);

    }, 400);
}

function nextTestimonial() {

    currentIndex++;

    if(currentIndex >= testimonials.length) {
        currentIndex = 0;
    }

    showTestimonial(currentIndex);

}


function previousTestimonial() {

    currentIndex--;

    if(currentIndex < 0) {
        currentIndex = testimonials.length - 1;
    }

    showTestimonial(currentIndex);
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

        showTestimonial(currentIndex);

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

showTestimonial(0);
startAutoPlay();