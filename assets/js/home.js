
// ==================== SUCCESS STORIES PINNED SECTION (Fixed) ====================
document.addEventListener("DOMContentLoaded", function () {
    const successCards = document.querySelectorAll(".successStories");

    if (successCards.length > 0) {

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".success-stories-wraper",
                start: "top top",
                end: () => `+=${successCards.length * 5}%`,   // Increased for better feel
                scrub: 1.2,                  // Slightly higher = smoother scrubbing
                pin: true,
                anticipatePin: 1,
                invalidateOnRefresh: true,
                pinSpacing: true,
                // Optional: Helps with reverse behavior
                onUpdate: (self) => {
                    // This runs continuously during scroll (forward + reverse)
                    const progress = self.progress;
                    const activeIndex = Math.floor(progress * (successCards.length - 0.01));

                    successCards.forEach((card, i) => {
                        if (i === activeIndex) {
                            card.classList.add("active");
                        } else {
                            card.classList.remove("active");
                        }
                    });
                }
            }
        });

        // Basic fade + scale animation for each card
        successCards.forEach((card, i) => {
            tl.to(card, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1,
                ease: "power2.out"
            }, i * 0.7);   // stagger timing
        });
    }

});
// ==================== OTHER SCRIPTS (Cleaned) ====================

// Tick animation - prevent multiple intervals
document.querySelectorAll(".tick path").forEach((path) => {
    const length = path.getTotalLength();

    gsap.set(path, { strokeDasharray: length, strokeDashoffset: length });

    // Run once or use a better trigger instead of setInterval every 3s
    gsap.to(path, {
        strokeDashoffset: 0,
        duration: 1.2,
        ease: "power2.out",
        delay: Math.random() * 0.5
    });
});

// HeroSlider Swiper (already fine)
const heroSlider = new Swiper('.hero-slider', {
    loop: true,
    autoplay: { delay: 3000, disableOnInteraction: true },
    slidesPerView: 1,
    pagination: { el: '.swiper-pagination', clickable: true },
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false
    },
    speed: 800
});

// Swiper (already fine)
const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: false,
    slidesPerView: 1,
    pagination: { el: '.swiper-pagination', clickable: true },
    effect: 'slide',          // built-in fade effect
    // fadeEffect: { crossFade: true },
    speed: 800               // transition speed in ms
});

// Process steps sequence
document.addEventListener("DOMContentLoaded", () => {
    const circles = document.querySelectorAll(".process-step");
    let index = 0;

    function runSequence() {
        // Add active class to one circle at a time
        circles[index].classList.add("active");

        // Move to next circle
        index++;

        // If we reached the end, reset all and restart
        if (index >= circles.length) {
            setTimeout(() => {
                circles.forEach(c => c.classList.remove("active")); // reset all to white
                index = 0;
                setTimeout(runSequence, 600);
            }, 600); // pause before reset

        } else {
            setTimeout(runSequence, 600); // delay between each step
        }
    }

    runSequence();
});

// Solution card click (already good, but ensure one active only)
document.querySelectorAll('.solution-card').forEach(card => {
    card.addEventListener('click', (e) => {
        document.querySelectorAll('.solution-card').forEach(c => c.classList.remove('active'));
        card.classList.add('active');
    });
});

// Close button
document.querySelectorAll('.button-close').forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.stopImmediatePropagation();
        const card = btn.closest('.solution-card');
        if (card) card.classList.remove('active');
    });
});

AOS.init({
    once: false,
    duration: 3000,
});

