<x-layout>
    <div id="fullpage">
        {{-- HEADER --}}
        <x-header>
        </x-header>

        {{-- SECTION 1 --}}
        <section class="section home-section-1 w-screen h-screen bg-b">
            <h2 class="font-title text-white text-center text-6xl pt-10 shadow-red-2">PIANO PERSONALIZZATO</h2>
            <div class="flex-col items-center justify-center">
                <div class="flex justify-center mt-10">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 15rem;">
                        <img class="w-full" src="{{ asset('scroll.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">3 MESI</div>
                            <p class="text-gray-700 text-base">
                                Piano 3 mesi ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Compra
                                ora</a>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 15rem;">
                        <img class="w-full" src="{{ asset('scroll.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">6 MESI</div>
                            <p class="text-gray-700 text-base">
                                Piano 6 mesi ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Compra
                                ora</a>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 15rem;">
                        <img class="w-full" src="{{ asset('scroll.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">12 MESI</div>
                            <p class="text-gray-700 text-base">
                                Piano 12 mesi ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Compra
                                ora</a>
                        </div>
                    </div>
                </div>
                {{-- <h3 class="font-title text-white text-center text-6xl pt-10">DIVENTA GROSSO ORA</h3> --}}
            </div>
        </section>

        {{-- SECTION 2 --}}
        <section class="section home-section-2 w-screen h-screen"
            style="background-image: url('{{ asset('scroll.jpg') }}');">
        </section>

        {{-- SECTION 3 --}}
        <section class="section home-section-1 w-screen h-screen bg-b">
            <h2 class="font-title text-white text-center text-6xl pt-10 shadow-red-2">PIANO PERSONALIZZATO</h2>
            <div class="flex-col items-center justify-center">
                <div class="flex justify-center mt-10">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 15rem;">
                        <img class="w-full" src="{{ asset('scroll.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">3 MESI</div>
                            <p class="text-gray-700 text-base">
                                Piano 3 mesi ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Compra
                                ora</a>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 15rem;">
                        <img class="w-full" src="{{ asset('scroll.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">6 MESI</div>
                            <p class="text-gray-700 text-base">
                                Piano 6 mesi ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Compra
                                ora</a>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 15rem;">
                        <img class="w-full" src="{{ asset('scroll.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">12 MESI</div>
                            <p class="text-gray-700 text-base">
                                Piano 12 mesi ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc ecc
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Compra
                                ora</a>
                        </div>
                    </div>
                </div>
                {{-- <h3 class="font-title text-white text-center text-6xl pt-10">DIVENTA GROSSO ORA</h3> --}}
            </div>
        </section>
    </div>

    <x-footer>
    </x-footer>
</x-layout>
