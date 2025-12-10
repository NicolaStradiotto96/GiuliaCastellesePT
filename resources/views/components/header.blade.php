<header class="section flex flex-col items-center" id="home">
    <div class="relative">
        <div>
            <video src="{{ asset('video.mp4') }}" class="video w-screen h-screen object-cover" autoplay muted loop
                playsinline></video>
        </div>
        <div class="absolute inset-0 bg-white/20">
            <div class="absolute inset-0 flex flex-col items-center text-center">
                <h1 class="font-title header-title mt-35 shadow-white">HOME</h1>
                <a href="{{ route('home') }}" class="mt-5">
                    <img src="{{ asset('GiuliaSVG-Cut.svg') }}" class="w-auto max-h-[50vh] px-5" alt="Giulia Castellese Trainer Logo">
                </a>
            </div>
        </div>
    </div>
</header>
