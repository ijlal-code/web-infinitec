<x-layouts.app title="HOME | INFINITEC">

    {{-- Menggunakan komponen Nav, set activePage=home dan link Daftar --}}
  <x-slot name="nav">
    <x-nav activePage="home" 
           buttonText="DAFTAR LOMBA" 
           buttonLink="/kompetisi" />
</x-slot>

<x-slot name="footer">
    <x-footer class="mt-16" />
</x-slot>

<x-slot name="backToTop">
    <x-back-to-top />
</x-slot>
    
    <header class="text-white pt-10 pb-10 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <div class="container w-11/12 max-w-6xl mx-auto py-5 px-4 pt-12 flex flex-col justify-center items-center min-h-[70vh] rounded-lg"> 
            {{-- KODE YANG SUDAH DIMODIFIKASI --}}
<h1 class="font-arial-black mb-1 text-4xl md:text-6xl text-shadow-lg" data-aos="fade-up" data-aos-delay="200">
    <x-glitch-text 
        text="WELCOME TO" 
        :words="['INFINITEC', '2025']" 
        duration="2000"
        {{-- GANTI parent-class --}}
        parent-class="font-arial-black text-4xl md:text-6xl"
    />
</h1>
            {{-- AKHIR MODIFIKASI --}}
            
            <p class="italic text-lg max-w-2xl mt-4" data-aos="fade-up" data-aos-delay="400">"Pusat Kolaborasi, Inovasi, dan Kompetisi Teknologi untuk Pelajar Sulawesi Barat."</p>
            
          {{-- GANTI TOMBOL LAMA DENGAN SHIMMER BUTTON --}}
<div data-aos="zoom-in" data-aos-delay="700" class="mt-8">
    <x-shimmer-button
        href="/kompetisi"
        text="LIHAT DAFTAR KOMPETISI"
    />
</div>
{{-- AKHIR PENGGANTIAN TOMBOL --}}
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
                            <li>Meningkatkan sportivitas melalui kompetisi e-sport.</li>
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

    <section id="dokumentasi" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Dokumentasi Kegiatan Sebelumnya</h2>
            
            {{-- File: resources/views/home.blade.php (Bagian Dokumentasi) --}}

<div class="grid grid-cols-1 md:grid-cols-3 gap-10 justify-items-center">
    
    {{-- Contoh Kartu 1: INFINITEC 2024 --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <x-flip-card 
            year="2024"
            title="INFINITEC 2024"
            description="Deskripsi"
            image="/backgrounds/home.jpg"       {{-- GAMBAR DEPAN (Thumbnail) --}}
            hover-image="/backgrounds/hal2.jpg"  {{-- GAMBAR BELAKANG (Detail/Hover) --}}
            
        />
    </div>
    
    {{-- Contoh Kartu 2: Pekan IT 2023 --}}
    <div data-aos="fade-up" data-aos-delay="300">
        <x-flip-card 
            year="2023"
            title="INFINITEC 2023"
            description="Deskripsi"
            image="/backgrounds/home.jpg"       {{-- GAMBAR DEPAN (Thumbnail) --}}
            hover-image="/backgrounds/hal2.jpg" 
            
        />
    </div>

    {{-- Contoh Kartu 3: Seminar 2022 --}}
    <div data-aos="fade-up" data-aos-delay="500">
        <x-flip-card 
            year="2022"
            title="INFINITEC 2022"
            description="Deskripsi"
            image="/backgrounds/home.jpg"   
            hover-image="/backgrounds/hal2.jpg" 
            
        />
    </div>
</div>
            
        </div>
    </section>

</x-layouts.app>