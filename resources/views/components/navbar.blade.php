<nav class="fixed top-0 right-0 left-0 z-50">
    <div class="flex justify-center mt-5">
        <div
            class="flex items-center border justify-between border-slate-700 px-6 py-2 rounded-full text-sm bg-black text-white">

            {{-- LOGO --}}
                <img src="{{ asset('GiuliaSVG-White.svg') }}" width="70" height="70" alt="Giulia Castellese Trainer Logo" class="px-2">

            {{-- NAV LINKS --}}
            <div class="hidden lg:flex items-center gap-6 ml-7">
                <a href="#home" class="group">
                    <span class="nav-link">HOME</span>
                </a>
                <a href="#section1" class="group">
                    <span class="nav-link">CHI SONO</span>
                </a>
                <a href="#section2" class="group">
                    <span class="nav-link">COACHING LIVE</span>
                </a>
                <a href="#section3" class="group">
                    <span class="nav-link">COACHING ONLINE</span>
                </a>
                <a href="#contatti" class="group">
                    <span class="nav-link">CONTATTI</span>
                </a>
            </div>

            {{-- BUTTONS --}}
            <div class="hidden ml-14 lg:flex items-center gap-4">
                {{-- <button
                    class="border border-slate-600 hover:bg-slate-800 px-4 py-2 rounded-full text-sm font-medium transition">
                    Contatti
                </button> --}}
                <a
                    class="bg-white hover:shadow-[0px_0px_30px_14px] shadow-[0px_0px_30px_7px] hover:shadow-white/50 shadow-white/50 text-black px-4 py-2 rounded-full text-sm font-bold hover:bg-slate-100 transition duration-300">
                    PRENOTA ORA
                </a>
            </div>

            {{-- MOBILE MENU --}}
            <button id="menuToggle" class="lg:hidden text-white-600 z-50 py-5 px-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="mobileMenu" class="absolute hidden top-23 left-0 w-full items-center justify-center z-50 flex-col">
                <div class="flex flex-col items-center justify-center w-3/5 bg-black gap-4 py-5 px-5 rounded">
                    <a class="nav-link" href="#home">
                        HOME
                    </a>
                    <a class="nav-link" href="#section1">
                        CHI SONO
                    </a>
                    <a class="nav-link" href="#section2">
                        COACHING LIVE
                    </a>
                    <a class="nav-link" href="#section3">
                        COACHING ONLINE
                    </a>
                    <a class="nav-link" href="#contatti">
                        CONTATTI
                    </a>
                    {{-- <button
                        class="border border-slate-600 hover:bg-slate-800 px-4 py-2 rounded-full text-sm font-medium transition">
                        Contatti
                    </button> --}}
                    <button
                        class="bg-white hover:shadow-[0px_0px_30px_14px] shadow-[0px_0px_30px_7px] hover:shadow-white/50 shadow-white/50 text-black bold px-4 py-2 rounded-full text-sm font-medium hover:bg-slate-100 transition duration-300">
                        PRENOTA ORA
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
