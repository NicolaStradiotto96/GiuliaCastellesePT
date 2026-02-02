import Lenis from '@studio-freight/lenis'

const mobileMenu = document.getElementById('mobileMenu');
const menuToggle = document.getElementById('menuToggle');
const sections = document.querySelectorAll('.section');
document.getElementById('currentYear').textContent = new Date().getFullYear();

// MOBILE MENU
menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('flex');
});

// LENIS SMOOTH SCROLL
const lenis = new Lenis({
    duration: 0.8,
    easing: t => t,
    smooth: true
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// SCROLL ACCELERATION
let scrollTimeout;
let consecutiveScrolls = 0;
let lastDirection = 0;

window.addEventListener('wheel', e => {
    if (!mobileMenu.classList.contains('hidden')) return;

    const scrollPos = window.scrollY;
    const lastSection = sections[sections.length - 1];
    const lastSectionBottom = lastSection.offsetTop + lastSection.offsetHeight;

    if (e.deltaY > 0 && scrollPos + window.innerHeight >= lastSectionBottom) return;

    e.preventDefault();

    if (scrollTimeout) clearTimeout(scrollTimeout);

    const direction = Math.sign(e.deltaY);
    if (direction === lastDirection) {
        consecutiveScrolls++;
    } else {
        consecutiveScrolls = 1;
        lastDirection = direction;
    }

    scrollTimeout = setTimeout(() => {
        let targetIndex;

        if (direction > 0) {
            if (consecutiveScrolls >= 2) {
                targetIndex = sections.length - 1;
            } else {
                targetIndex = Array.from(sections).findIndex(sec => sec.offsetTop > scrollPos + 10);
                if (targetIndex === -1) targetIndex = sections.length - 1;
            }
        } else {
            if (consecutiveScrolls >= 2) {
                targetIndex = 0;
            } else {
                const reversed = Array.from(sections).slice().reverse();
                targetIndex = reversed.findIndex(sec => sec.offsetTop < scrollPos - 10);
                if (targetIndex === -1) targetIndex = 0;
                else targetIndex = sections.length - 1 - targetIndex;
            }
        }

        lenis.scrollTo(sections[targetIndex], {
            offset: 0,
            immediate: false,
            duration: 0.8
        });

        consecutiveScrolls = 0;
        lastDirection = 0;

    }, 50);
}, { passive: false });

// LINK NAVBAR SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            lenis.scrollTo(target, {
                duration: 1,
                easing: t => t,
            });
        }
    });
});
