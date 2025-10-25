<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | INFINITEC</title>
    @vite('resources/css/app.css')
    
</head>
<body class="font-sans text-gray-800 pt-12">

    <nav id="main-nav" class="bg-white shadow-md fixed top-0 w-full z-50 transition-all duration-300"> 
        <div class="container w-11/12 max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            
            <a href="/" class="text-blue-600 font-extrabold text-lg flex items-center">
                INFINITEC
            </a>

            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-blue-600 font-extrabold transition">Home</a>
                <a href="/kompetisi" class="text-gray-700 hover:text-blue-600 font-medium transition">Kompetisi</a>
                
                <a href="/kompetisi" class="text-gray-800 bg-yellow-400 px-3 py-1 rounded hover:bg-yellow-500 font-semibold transition shadow-sm">
                    DAFTAR LOMBA
                </a>
            </div>

            <button id="menu-button" class="md:hidden text-gray-700 focus:outline-none p-1 rounded hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 bg-white">
            <a href="/" class="block py-2 px-4 text-blue-600 font-extrabold transition">Home</a>
            <a href="/kompetisi" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Kompetisi</a>
            <a href="/kompetisi" class="block py-2 px-4 text-white bg-blue-600 hover:bg-blue-700 text-center font-semibold">DAFTAR LOMBA</a>
        </div>
    </nav>
    
    <header class="text-white pt-10 pb-10 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <div class="container w-11/12 max-w-6xl mx-auto py-5 px-4 pt-12 flex flex-col justify-center items-center min-h-[70vh] rounded-lg"> 
            <h1 class="font-['Arial Black'] mb-1 text-4xl md:text-6xl text-shadow-lg" data-aos="fade-up" data-aos-delay="200">INFINITEC 2025</h1>
            <h2 class="text-xl md:text-3xl mt-0 font-light" data-aos="fade-up" data-aos-delay="300">Informatics Frontier and Technology Competition</h2>
            <p class="italic text-lg max-w-2xl mt-4" data-aos="fade-up" data-aos-delay="400">"Pusat Kolaborasi, Inovasi, dan Kompetisi Teknologi untuk Pelajar Sulawesi Barat."</p>
            
            <a href="/kompetisi" 
               class="inline-block bg-yellow-400 text-gray-800 py-4 px-8 font-bold rounded mt-8 transition hover:bg-yellow-500 shadow-xl text-lg" data-aos="zoom-in" data-aos-delay="700">
                LIHAT DAFTAR KOMPETISI
            </a>
        </div>
    </header>

    <section id="tentang-infinitec" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-right">Apa itu INFINITEC?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                <div data-aos="fade-up">
                    <div class="card-interaktif h-auto w-full bg-white rounded-xl overflow-hidden relative group p-6 shadow-xl hover:shadow-2xl transition duration-500 z-0">
                        <div class="circle absolute h-20 w-20 -top-10 -right-10 rounded-full bg-blue-600 group-hover:scale-[1500%] duration-700 z-[-1]"></div>

                        <h1 class="z-20 font-extrabold text-blue-800 group-hover:text-white duration-500 text-2xl mb-4">
                            VISI KAMI
                        </h1>
                        
                        <p class="text-gray-700 group-hover:text-white duration-500 text-lg">
                            INFINITEC adalah ajang tahunan yang diselenggarakan oleh ISC Unsulbar untuk mendorong semangat inovasi dan kompetisi teknologi di kalangan pelajar SMA/SMK sederajat di Sulawesi Barat. Kami percaya teknologi adalah kunci kemajuan daerah.
                        </p>

                        <a href="#fokus" class="mt-4 inline-block text-blue-600 group-hover:text-white duration-500 text-sm font-semibold">
                            <span class="relative before:h-0.5 before:absolute before:w-full before:content-[''] before:bg-blue-600 group-hover:before:bg-white duration-300 before:bottom-0 before:left-0">
                                Lanjut ke Fokus Kami &rarr;
                            </span>
                        </a>
                    </div>
                </div>
                
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="card-interaktif h-auto w-full bg-white rounded-xl overflow-hidden relative group p-6 shadow-xl hover:shadow-2xl transition duration-500 z-0">
                        <div class="circle absolute h-20 w-20 -top-10 -right-10 rounded-full bg-blue-600 group-hover:scale-[1500%] duration-700 z-[-1]"></div>

                        <h1 class="z-20 font-extrabold text-blue-800 group-hover:text-white duration-500 text-2xl mb-4">
                            FOKUS KAMI
                        </h1>
                        
                        <ul class="check-list space-y-2 text-gray-700 group-hover:text-white duration-500 text-lg">
                            <li>Mengembangkan bakat menulis ilmiah berbasis teknologi.</li>
                            <li>Meningkatkan sportivitas melalui kompetisi *e-sport*.</li>
                            <li>Menciptakan ide-ide solutif untuk masalah lokal.</li>
                            <li>Membangun jaringan antar pelajar inovatif.</li>
                        </ul>
                        
                        <a href="/kompetisi" class="mt-4 inline-block text-blue-600 group-hover:text-white duration-500 text-sm font-semibold">
                            <span class="relative before:h-0.5 before:absolute before:w-full before:content-[''] before:bg-blue-600 group-hover:before:bg-white duration-300 before:bottom-0 before:left-0">
                                Lihat Semua Kompetisi &rarr;
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            
        </div>
    </section>

    <footer class="bg-white bg-opacity-95 text-gray-700 py-4 mt-16 shadow-inner">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 flex justify-center items-center">
            <p class="text-sm opacity-90 text-center"> 
                &copy; Copyright Informatics Study Club. All Rights Reserved
            </p>
        </div>
    </footer>

    <a href="#" id="back-to-top" class="fixed bottom-5 right-5 z-50 p-3 rounded-md bg-yellow-400 text-black shadow-xl transition-opacity duration-300 opacity-0 invisible hover:bg-blue-700" aria-label="Kembali ke atas">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </a>

    @vite('resources/js/app.js')
    
</body>
</html>