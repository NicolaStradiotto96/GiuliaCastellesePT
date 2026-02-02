<x-layout>
    {{-- HEADER --}}
    <x-header>
    </x-header>

    <main>
        {{-- SECTION 1 --}}
        <section class="section home-section-1 w-screen h-screen overflow-hidden" id="section1">
            <h2 class="font-title section-title text-center shadow-white pt-25 px-5">CHI SONO</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center mt-5">
                <!-- IMG -->
                <div class="flex justify-center">
                    <img src="{{ asset('GiuliaAbout.png') }}" class="max-h-[50vh] rounded-2xl" data-aos="fade-right"
                        alt="Giulia">
                </div>

                <!-- TEXT -->
                <div class="flex flex-col items-center justify-around h-100 rounded-2xl bg-white/20">
                    <p class="text-lg max-w-md text-center text-black">
                        Mi chiamo Giulia Castellese, sono personal trainer certificata e
                        aiuto donne e uomini a ritrovare energia, equilibrio e forma fisica,
                        attraverso percorsi personalizzati adatti a ogni livello.
                    </p>
                    <p class="text-lg max-w-md text-center text-black">
                        Laureata in Scienze Motorie presso l’Università di Ferrara, con una solida formazione
                        scientifica
                        applicata al movimento e alla salute.
                    </p>
                </div>

                <!-- IMG -->
                <div class="flex justify-center">
                    <img src="{{ asset('laurea.jpg') }}" class="max-h-[30vh] rounded-2xl" data-aos="fade-left"
                        alt="Giulia">
                </div>
            </div>
        </section>

        {{-- SECTION 2 --}}
        <section class="section home-section-2 w-screen h-screen bg-b overflow-hidden" id="section2">
            {{-- TITLE --}}
            <h2 class="font-title section-title text-white text-center shadow-red-2 pt-25 px-5">COACHING ONLINE</h2>
            <p class="text-4xl text-white text-center">RISULTATI REALI. ALLENAMENTI SU MISURA.</p>
            {{-- DESCRIPTION --}}
            <hr class="dark-white my-2 mx-auto">
            <div class="py-3" style="background-color: #F8F7F8;">
                <h3 class="text-3xl font-bold text-center">PIÙ DI UNA SEMPLICE SCHEDA
                </h3>
                <div class="w-1/2 mx-auto flex items-center justify-center">
                    <div class="w-full">
                        <p class="accent-2 font-bold">IL PROBLEMA</p>
                        <div class="flex">
                            <img src="{{ asset('questions.png') }}" class="img-section-3 mx-auto"
                                alt="Punti di domanda">
                            <p class="text-center flex items-center px-5">I programmi standardizzati non tengono conto
                                delle tue esigenze reali e finiscono per bloccarti in una routine che non produce
                                risultati concreti.</p>
                        </div>
                    </div>
                    <div class="w-px h-40 bg-linear-to-b from-transparent via-black shrink-0">
                    </div>
                    <div class="w-full">
                        <p class="accent-2 font-bold text-end">LA SOLUZIONE</p>
                        <div class="flex">
                            <p class="text-center flex items-center px-5">Un percorso cucito su misura per te, che tu
                                sia a casa o in palestra, ti permette di allenarti con metodo e ottenere risultati reali
                                e duraturi.</p>
                            <img src="{{ asset('answers.png') }}" class="img-section-3 mx-auto" alt="Punti di domanda">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="dark-white my-2 mx-auto">
            {{-- CARDS --}}
            <div class="flex-col items-center justify-center">
                <h3 class="text-4xl font-bold text-white text-center mt-3">TRE PERCORSI, UN UNICO OBIETTIVO: IL TUO
                    MIGLIORAMENTO
                </h3>
                <div class="flex justify-center mt-5">
                    {{-- CARD 1 --}}
                    <a href="" class="section-3-card">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 19rem;">
                            <svg class="w-20 h-20 mx-auto my-5" aria-hidden="true">
                                <use href="#trophy"></use>
                            </svg>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">PACCHETTO 360°</div>
                                <p class="card-subtitle font-bold mb-2 text-center">Full Coaching</p>
                                <p class="text-gray-700 text-center">Per chi vuole il massimo dai propri allenamenti.
                                </p>
                            </div>
                            <div class="flex justify-center my-5">
                                <p
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    Maggiori
                                    informazioni</p>
                            </div>
                        </div>
                    </a>
                    {{-- CARD 2 --}}
                    <a href="" class="section-3-card">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 19rem;">
                            <svg class="w-20 h-20 mx-auto my-5" aria-hidden="true">
                                <use href="#chart"></use>
                            </svg>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">SCHEDA AGGIORNATA</div>
                                <p class="card-subtitle font-bold mb-2 text-center">Programmazione Progressiva</p>
                                <p class="text-gray-700 text-center">Per chi cerca una programmazione progressiva.</p>
                            </div>
                            <div class="flex justify-center my-5">
                                <p
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    Maggiori
                                    informazioni</p>
                            </div>
                        </div>
                    </a>
                    {{-- CARD 3 --}}
                    <a href="" class="section-3-card">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 19rem;">
                            <svg class="w-20 h-20 mx-auto my-5" aria-hidden="true">
                                <use href="#page"></use>
                            </svg>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">SCHEDA FISSA</div>
                                <p class="card-subtitle font-bold mb-2 text-center">Entry Level</p>
                                <p class="text-gray-700 text-center">Per chi vuole solo una guida pronta.</p>
                            </div>
                            <div class="flex justify-center my-5">
                                <p
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    Maggiori
                                    informazioni</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- SECTION 3 --}}
        <section class="section home-section-2 w-screen h-screen bg-b overflow-hidden" id="section3">
            {{-- TITLE --}}
            <h2 class="font-title section-title text-white text-center shadow-red-2 pt-25 px-5">COACHING LIVE</h2>
            <p class="text-4xl text-white text-center">RISULTATI REALI. ALLENAMENTI SU MISURA.</p>
            {{-- DESCRIPTION --}}
            <hr class="dark-white my-2 mx-auto">
            <div class="py-3" style="background-color: #F8F7F8;">
                <h3 class="text-3xl font-bold text-center">PIÙ DI UNA SEMPLICE SCHEDA
                </h3>
                <div class="w-1/2 mx-auto flex items-center justify-center">
                    <div class="w-full">
                        <p class="accent-2 font-bold">IL PROBLEMA</p>
                        <div class="flex">
                            <img src="{{ asset('questions.png') }}" class="img-section-3 mx-auto"
                                alt="Punti di domanda">
                            <p class="text-center flex items-center px-5">I programmi standardizzati non tengono conto
                                delle tue esigenze reali e finiscono per bloccarti in una routine che non produce
                                risultati concreti.</p>
                        </div>
                    </div>
                    <div class="w-px h-40 bg-gradient-to-b from-transparent via-black/100 flex-shrink-0">
                    </div>
                    <div class="w-full">
                        <p class="accent-2 font-bold text-end">LA SOLUZIONE</p>
                        <div class="flex">
                            <p class="text-center flex items-center px-5">Un percorso cucito su misura per te, che tu
                                sia a casa o in palestra, ti permette di allenarti con metodo e ottenere risultati reali
                                e duraturi.</p>
                            <img src="{{ asset('answers.png') }}" class="img-section-3 mx-auto"
                                alt="Punti di domanda">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="dark-white my-2 mx-auto">
            {{-- CARDS --}}
            <div class="flex-col items-center justify-center">
                <h3 class="text-4xl font-bold text-white text-center mt-3">TRE PERCORSI, UN UNICO OBIETTIVO: IL TUO
                    MIGLIORAMENTO
                </h3>
                <div class="flex justify-center mt-5">
                    {{-- CARD 1 --}}
                    <a href="" class="section-3-card">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 19rem;">
                            <svg class="w-20 h-20 mx-auto my-5" aria-hidden="true">
                                <use href="#trophy"></use>
                            </svg>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">PACCHETTO 360°</div>
                                <p class="card-subtitle font-bold mb-2 text-center">Full Coaching</p>
                                <p class="text-gray-700 text-center">Per chi vuole il massimo dai propri allenamenti.
                                </p>
                            </div>
                            <div class="flex justify-center my-5">
                                <p
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    Maggiori
                                    informazioni</p>
                            </div>
                        </div>
                    </a>
                    {{-- CARD 2 --}}
                    <a href="" class="section-3-card">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 19rem;">
                            <svg class="w-20 h-20 mx-auto my-5" aria-hidden="true">
                                <use href="#chart"></use>
                            </svg>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">SCHEDA AGGIORNATA</div>
                                <p class="card-subtitle font-bold mb-2 text-center">Programmazione Progressiva</p>
                                <p class="text-gray-700 text-center">Per chi cerca una programmazione progressiva.</p>
                            </div>
                            <div class="flex justify-center my-5">
                                <p
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    Maggiori
                                    informazioni</p>
                            </div>
                        </div>
                    </a>
                    {{-- CARD 3 --}}
                    <a href="" class="section-3-card">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white mx-5" style="width: 19rem;">
                            <svg class="w-20 h-20 mx-auto my-5" aria-hidden="true">
                                <use href="#page"></use>
                            </svg>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">SCHEDA FISSA</div>
                                <p class="card-subtitle font-bold mb-2 text-center">Entry Level</p>
                                <p class="text-gray-700 text-center">Per chi vuole solo una guida pronta.</p>
                            </div>
                            <div class="flex justify-center my-5">
                                <p
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    Maggiori
                                    informazioni</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    <x-footer>
    </x-footer>
</x-layout>
