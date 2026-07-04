// Initialize Lenis with better settings
document.addEventListener("DOMContentLoaded", () => {

    // ==================== LENIS SETUP (Must be at the top) ====================
    gsap.registerPlugin(ScrollTrigger);

    const lenis = new Lenis();
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => {
        lenis.raf(time * 600);
    });
    gsap.ticker.lagSmoothing(0);

    // ==================== GSAP + SCROLLTRIGGER INTEGRATION WITH LENIS ====================
    gsap.registerPlugin(ScrollTrigger);

    // Important: Connect Lenis with ScrollTrigger
    function updateScrollTrigger() {
        ScrollTrigger.update();
    }
    lenis.on('scroll', updateScrollTrigger);

    ScrollTrigger.scrollerProxy(document.body, {
        scrollTop(value) {
            if (arguments.length) {
                lenis.scrollTo(value, { immediate: true });
            }
            return lenis.scroll;
        },
        getBoundingClientRect() {
            return document.body.getBoundingClientRect();
        }
    });

    // Refresh ScrollTrigger when Lenis updates
    ScrollTrigger.defaults({
        scroller: document.body
    });

    // Refresh on window resize and after load
    window.addEventListener('resize', () => ScrollTrigger.refresh());
    document.addEventListener('DOMContentLoaded', () => {
        ScrollTrigger.refresh();
    });

    const backToTop = document.getElementById("backToTop");

    backToTop.addEventListener("click", () => {
        
       lenis.scrollTo(0);
    });

    // Show button only when scrolled down
    window.addEventListener("scroll", () => {
        if (window.scrollY > 500) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            let submenu = this.nextElementSibling;
            if (submenu) {
                submenu.classList.toggle('show');
            }
        });
    });
});
