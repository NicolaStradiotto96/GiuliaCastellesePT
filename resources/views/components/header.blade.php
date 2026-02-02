<header class="section flex flex-col items-center overflow-hidden" id="home">
    <div class="relative">
        {{-- VIDEO BG --}}
        <div>
            <video src="{{ asset('video.mp4') }}" class="video w-screen h-screen object-cover" autoplay muted loop
                playsinline></video>
        </div>

        {{-- LOGO --}}
        <div class="absolute inset-0 bg-white/20">
            <div class="absolute inset-0 flex flex-col items-center text-center">
                <h1 class="font-title header-title mt-25 shadow-white">HOME</h1>
                <img src="{{ asset('GiuliaSVG.svg') }}" class="w-auto max-h-[50vh] px-5 mt-5" alt="Giulia Castellese Trainer Logo">
            </div>
        </div>
    </div>
</header>
