<footer class="section footer sm:footer-horizontal w-screen h-screen bg-b p-10 text-white overflow-hidden flex flex-col"
    id="contatti">
    <p class="font-title section-title shadow-red-2 text-center pt-15 px-5">CHE ASPETTI? INIZIA ORA!</p>
    {{-- CONTACTS --}}
    <h1 class="text-3xl text-center mt-5">CONTATTI</h1>
    {{-- WHATSAPP --}}
    <a href="https://wa.me/393895496877" target="_blank" class="flex justify-center align-middle mt-5 footer-info">
        <svg class="w-20 h-20 mr-5 text-white fill-current flex justify-center" aria-hidden="true">
            <use href="#whatsapp"></use>
        </svg>
        <p class="text-5xl text-white flex items-center">+39 351 612 2785</p>
    </a>
    {{-- MAIL --}}
    <a href="mailto:castellese.giulia@virgilio.it" target="_blank" class="flex justify-center align-middle mt-5 footer-info">
        <svg class="w-20 h-20 mr-5 text-white fill-current flex justify-center" aria-hidden="true">
            <use href="#mail"></use>
        </svg>
        <p class="text-5xl text-white flex items-center">castellese.giulia@virgilio.it</p>
    </a>
    {{-- SOCIAL --}}
    <div class="my-auto">
        <h2 class="text-3xl text-center">SEGUIMI SU</h2>
        <div class="flex justify-center gap-4">
            {{-- INSTAGRAM --}}
            <a href="https://www.instagram.com/giulia.castellese.pt/" target="_blank" class="footer-info">
                <svg class="w-20 h-20 my-5 text-white fill-current" aria-hidden="true">
                    <use href="#instagram"></use>
                </svg>
            </a>
            {{-- TIKTOK --}}
            {{-- <a href="https://www.tiktok.com/@giulia.castellese.pt" target="_blank">
                <svg class="w-20 h-20 my-5 text-white fill-current" aria-hidden="true">
                    <use href="#tiktok"></use>
                </svg>
            </a> --}}
        </div>
    </div>
    {{-- POLICIES --}}
    <hr class="my-5 h-px bg-linear-to-r from-transparent via-white to-transparent border-none mx-auto w-full">

    <div class="flex justify-center mt-5">
        <a href="">
            <p>Privacy Policy</p>
        </a>
        <a href="">
            <p class="mx-3">Cookie Policy</p>
        </a>
        <a href="">
            <p>Termini e Condizioni</p>
        </a>
    </div>

    <p class="text-center text-xs mt-3">
        P.IVA: 04920320233
    </p>

    <p class="text-center text-xs">
        © <span id="currentYear"></span> Giulia Castellese. Tutti i diritti riservati.</p>
    </div>
</footer>
