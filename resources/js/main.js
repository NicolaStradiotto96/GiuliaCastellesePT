import Lenis from '@studio-freight/lenis'

const mobileMenu = document.getElementById('mobileMenu');
const menuToggle = document.getElementById('menuToggle');
const sections = document.querySelectorAll('.section');

// MOBILE MENU
menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('flex');
});

// Lenis smooth scroll
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

// Scroll snap debounce + accelerazione per scroll consecutivi
let scrollTimeout;
let consecutiveScrolls = 0;
let lastDirection = 0;

window.addEventListener('wheel', e => {
    if (!mobileMenu.classList.contains('hidden')) return;

    const scrollPos = window.scrollY;
    const lastSection = sections[sections.length - 1];
    const lastSectionBottom = lastSection.offsetTop + lastSection.offsetHeight;

    // se scrolli oltre ultima section, lascia scorrere normalmente
    if (e.deltaY > 0 && scrollPos + window.innerHeight >= lastSectionBottom) return;

    e.preventDefault();

    // reset timeout precedente
    if (scrollTimeout) clearTimeout(scrollTimeout);

    // incremento contatori scroll consecutivi
    const direction = Math.sign(e.deltaY);
    if (direction === lastDirection) {
        consecutiveScrolls++;
    } else {
        consecutiveScrolls = 1;
        lastDirection = direction;
    }

    scrollTimeout = setTimeout(() => {
        let targetIndex;

        if (direction > 0) { // scroll giù
            if (consecutiveScrolls >= 2) {
                // scroll veloce: ultima section
                targetIndex = sections.length - 1;
            } else {
                // scroll singolo: prossima section
                targetIndex = Array.from(sections).findIndex(sec => sec.offsetTop > scrollPos + 10);
                if (targetIndex === -1) targetIndex = sections.length - 1;
            }
        } else { // scroll su
            if (consecutiveScrolls >= 2) {
                // scroll veloce: prima section
                targetIndex = 0;
            } else {
                // scroll singolo: section precedente
                const reversed = Array.from(sections).slice().reverse();
                targetIndex = reversed.findIndex(sec => sec.offsetTop < scrollPos - 10);
                if (targetIndex === -1) targetIndex = 0;
                else targetIndex = sections.length - 1 - targetIndex;
            }
        }

        // scroll verso la target section
        lenis.scrollTo(sections[targetIndex], {
            offset: 0,
            immediate: false,
            duration: 0.8 // leggermente più veloce
        });

        // reset contatore
        consecutiveScrolls = 0;
        lastDirection = 0;

    }, 50); // piccolo debounce
}, { passive: false });
