<header class="flex flex-col items-center h-screen">
    <div class="relative w-screen h-screen">
        <div class="w-screen h-screen">
            <video src="{{ asset('video.mp4') }}" class="w-screen h-screen object-cover" autoplay muted loop
                playsinline></video>
        </div>
        <div class="absolute inset-0 bg-white/20">
            <div class="absolute inset-0 flex flex-col items-center top-30 text-center">
                <h1 class="font-title text-8xl mt-5">HOME</h1>
                <a href="{{ route('home') }}" class="mt-5">
                    <img src="{{ asset('GiuliaSVG-Cut.svg') }}" width="500" height="500" alt="GC">
                </a>
            </div>
        </div>
    </div>
</header>
