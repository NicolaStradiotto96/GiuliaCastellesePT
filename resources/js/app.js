import './bootstrap';
import '../css/style.css';
import '../js/main.js';
import.meta.glob([
    '../fonts/**',
]);
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init({
    duration: 1000,
    easing: 'ease-out',
    once: true,
});