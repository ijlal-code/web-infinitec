<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMPETISI | INFINITEC 2025</title>

    @vite('resources/css/hal2.css')

</head>
<body class="font-sans text-gray-800 pt-12">

    <nav id="main-nav" class="bg-white shadow-md fixed top-0 w-full z-50 transition-all duration-300">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">

            <a href="/" class="text-blue-600 font-extrabold text-lg flex items-center">
                INFINITEC
            </a>

            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
                <a href="/kompetisi" class="text-blue-600 font-extrabold transition">Kompetisi</a>

                <a href="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" target="_blank" class="text-gray-800 bg-yellow-400 px-3 py-1 rounded hover:bg-yellow-500 font-semibold transition shadow-sm">
                    DAFTAR
                </a>
            </div>

            <button id="menu-button" class="md:hidden text-gray-700 focus:outline-none p-1 rounded hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 bg-white">
            <a href="/" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Home</a>
            <a href="/kompetisi" class="block py-2 px-4 text-blue-600 font-extrabold transition">Kompetisi</a>
            <a href="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" target="_blank" class="block py-2 px-4 text-white bg-blue-600 hover:bg-blue-700 text-center font-semibold">DAFTAR SEKARANG</a>
        </div>
    </nav>

    <header class="text-white pt-10 pb-10 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <div class="container w-11/12 max-w-6xl mx-auto py-5 px-4 pt-12 rounded-lg">
            <h1 class="font-['Arial Black'] mb-1 text-3xl md:text-5xl" data-aos="fade-up" data-aos-delay="200">KOMPETISI INFINITEC 2025</h1>
            <h2 class="text-xl md:text-2xl mt-0" data-aos="fade-up" data-aos-delay="300">Bidang Akademik & Non-Akademik</h2>
            <p class="italic text-lg" data-aos="fade-up" data-aos-delay="400">Pilih tantanganmu, raih prestasimu!</p>

            <a href="#lkti"
               class="inline-block bg-yellow-400 text-gray-800 py-4 px-8 font-bold rounded mt-5 transition hover:bg-yellow-500 shadow-lg" data-aos="zoom-in" data-aos-delay="700">
                LIHAT DETAIL
            </a>
        </div>
    </header>

    <section id="lkti" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 text-center">
            <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-right">BIDANG KOMPETISI</h2>

            <div class="flex justify-center space-x-6 mb-12" data-aos="fade-up">
    {{-- Tombol Academic Baru --}}
    <button id="tab-academic" class="comp-tab-btn-new transition-all active-tab">
        ACADEMIC
    </button>

    {{-- Tombol Non-Academic Baru --}}
    <button id="tab-non-academic" class="comp-tab-btn-new transition-all">
        NON-ACADEMIC
    </button>
</div>

          <div class="flex justify-center">

    {{-- Kartu Generic (State Awal) --}}
    <div id="generic-comp-card" class="bg-blue-900 border-4 border-yellow-400 rounded-xl p-8 max-w-lg shadow-2xl transition-all" data-aos="zoom-in" data-aos-delay="100">
        <h3 class="font-['Arial Black'] text-yellow-400 text-3xl mb-2">INFINITEC COMPETITION</h3>
        <p class="text-white text-lg mb-4">Pilih kategori di atas untuk melihat detail lomba yang sesuai.</p>
        <p class="text-gray-300 text-sm">
            Lomba Akademik berfokus pada inovasi dan karya ilmiah (LKTI), sedangkan Non-Akademik berfokus pada kompetisi E-Sport (Mobile Legends).
        </p>
    </div>

    {{-- Tab Detail Academic BARU (Uiverse Card - LKTI) --}}
    <div id="academic-detail-tab" class="hidden w-full flex justify-center card-initial-hidden">
        <a href="#timeline" class="w-full max-w-md">
            <div
                class="w-full h-80 duration-500 group overflow-hidden relative rounded bg-blue-900 text-neutral-50 p-6 flex flex-col justify-evenly shadow-2xl mx-auto"

            >
                {{-- Blur elements (Blue/Sky theme) --}}
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-sky-700 right-1 -bottom-24"
                ></div>
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 bg-indigo-500 right-12 bottom-12"
                ></div>
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 bg-indigo-600 right-1 -top-12"
                ></div>
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-24 h-24 bg-sky-500 rounded-full group-hover:-translate-x-12"
                ></div>

                <div class="z-10 flex flex-col justify-evenly w-full h-full text-left">
                    <span class="text-2xl font-black uppercase text-yellow-400">LKTI Competition</span>
                    <p class="text-blue-200 text-base">
                        Lomba Karya Tulis Ilmiah (LKTI) mengundang siswa untuk menyajikan solusi kreatif berbasis teknologi dan riset.
                    </p>
                    <button
                        class="hover:bg-neutral-200 bg-yellow-400 rounded text-blue-900 font-extrabold w-full p-3 transition duration-300 shadow-md"
                    >
                        Lihat Jadwal & Ketentuan
                    </button>
                </div>
            </div>
        </a>
    </div>

    {{-- Tab Detail Non-Academic BARU (Uiverse Card - Mobile Legends) --}}
    <div id="non-academic-detail-tab" class="hidden w-full flex justify-center card-initial-hidden">
        <a href="#contact" class="w-full max-w-md">
            <div
                class="w-full h-80 duration-500 group overflow-hidden relative rounded bg-red-800 text-neutral-50 p-6 flex flex-col justify-evenly shadow-2xl mx-auto"
               
            >
                {{-- Blur elements (Red/Orange/Pink theme) --}}
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-red-600 right-1 -bottom-24"
                ></div>
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 bg-pink-500 right-12 bottom-12"
                ></div>
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 bg-red-700 right-1 -top-12"
                ></div>
                <div
                    class="absolute blur duration-500 group-hover:blur-none w-24 h-24 bg-pink-700 rounded-full group-hover:-translate-x-12"
                ></div>

                <div class="z-10 flex flex-col justify-evenly w-full h-full text-left">
                    <span class="text-2xl font-black uppercase text-yellow-400">Mobile Legends</span>
                    <p class="text-yellow-400 text-base font-bold">
                        COMING SOON! Ajang kompetisi E-Sport Mobile Legends akan segera dibuka. Siapkan tim terbaikmu!
                    </p>
                    <button
                        class="hover:bg-neutral-200 bg-neutral-50 rounded text-red-800 font-extrabold w-full p-3 transition duration-300 shadow-md"
                    >
                        Nantikan Detail
                    </button>
                </div>
            </div>
        </a>
    </div>
</div>

    </section>


    <section id="timeline" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Jadwal Penting LKTI</h2>

            <div class="timeline-card-wrapper max-w-4xl mx-auto">

                <div class="relative timeline-left" data-aos="fade-right" data-aos-delay="100">
                    <article class="timeline-card mb-12">
                        <div class="mb-2 flex items-center gap-x-2 text-xs">
                            <time class="timeline-badge yellow" datetime="2025-10-18">
                                18 Okt - 30 Nov 2025
                            </time>
                            <a class="timeline-badge blue" href="#syarat">
                                Pendaftaran
                            </a>
                        </div>
                        <h3 class="group relative">
                            <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                Pendaftaran & Pengumpulan Fullpaper
                            </span>
                        </h3>
                        <p class="text-sm mt-3 leading-6 text-gray-700">
                            Waktu pengumpulan karya tulis ilmiah (fullpaper) dan kelengkapan berkas wajib.
                        </p>
                    </article>
                </div>

                <div class="relative timeline-right" data-aos="fade-left" data-aos-delay="200">
                    <article class="timeline-card mb-12">
                         <div class="mb-2 flex items-center gap-x-2 text-xs">
                            <time class="timeline-badge yellow" datetime="2025-12-01">
                                1 - 10 Desember 2025
                            </time>
                            <a class="timeline-badge blue" href="#">
                                Penilaian
                            </a>
                        </div>
                        <h3 class="group relative">
                            <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                Penilaian Karya oleh Dewan Juri
                            </span>
                        </h3>
                        <p class="text-sm mt-3 leading-6 text-gray-700">
                            Proses seleksi ketat untuk menentukan finalis yang berhak maju ke tahap presentasi.
                        </p>
                    </article>
                </div>

                <div class="relative timeline-left" data-aos="fade-right" data-aos-delay="300">
                    <article class="timeline-card mb-12">
                        <div class="mb-2 flex items-center gap-x-2 text-xs">
                            <time class="timeline-badge yellow" datetime="2025-12-11">
                                11 & 13 Desember 2025
                            </time>
                            <a class="timeline-badge blue" href="#">
                                Finalis
                            </a>
                        </div>
                        <h3 class="group relative">
                            <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                Pengumuman Finalis & Technical Meeting
                            </span>
                        </h3>
                        <p class="text-sm mt-3 leading-6 text-gray-700">
                            Finalis akan diumumkan, diikuti Technical Meeting untuk persiapan presentasi.
                        </p>
                    </article>
                </div>

                <div class="relative timeline-right" data-aos="fade-left" data-aos-delay="400">
                    <article class="timeline-card mb-12">
                         <div class="mb-2 flex items-center gap-x-2 text-xs">
                            <time class="timeline-badge yellow" datetime="2025-12-14">
                                14 - 17 Desember 2025
                            </time>
                            <a class="timeline-badge blue" href="#">
                                Presentasi
                            </a>
                        </div>
                        <h3 class="group relative">
                            <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                Pengumpulan PPT & Presentasi Final
                            </span>
                        </h3>
                        <p class="text-sm mt-3 leading-6 text-gray-700">
                            Finalis mempresentasikan karya di hadapan dewan juri.
                        </p>
                    </article>
                </div>

                <div class="relative timeline-left" data-aos="fade-right" data-aos-delay="500">
                    <article class="timeline-card mb-12">
                        <div class="mb-2 flex items-center gap-x-2 text-xs">
                            <time class="timeline-badge yellow" datetime="2025-12-18">
                                18 Desember 2025
                            </time>
                            <a class="timeline-badge blue" href="#">
                                Pengumuman
                            </a>
                        </div>
                        <h3 class="group relative">
                            <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                Pengumuman Pemenang
                            </span>
                        </h3>
                        <p class="text-sm mt-3 leading-6 text-gray-700">
                            Puncak acara: Pengumuman juara dan penyerahan hadiah.
                        </p>
                    </article>
                </div>

            </div> </div>
    </section>

    <section id="tema" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Tema & Hadiah LKTI</h2>
            <p class="text-center mb-8 text-white" data-aos="fade-up" data-aos-delay="100">Pilih salah satu dari subtema berikut untuk ide kreatifmu:</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                <div class="card bg-white p-5 rounded-lg shadow-md bg-opacity-90" data-aos="flip-left">
                    <h4 class="text-blue-600 font-bold text-lg mb-4">Subtema Pilihan</h4>
                    <ul class="check-list">
                        <li>Aplikasi Digital</li>
                        <li>Teknologi Usaha Lokal</li>
                        <li>Teknologi Hijau</li>
                        <li>Pertanian Modern</li>
                        <li>Teknologi Kesehatan</li>
                    </ul>
                    <p class="text-center mt-6">
                        <a href="https://bit.ly/lkti-infinitec-2025" target="_blank"
                           class="inline-block bg-blue-600 text-white py-2 px-5 font-bold rounded transition hover:bg-blue-700">
                            Buku Panduan
                        </a>
                    </p>
                </div>

                <div class="card bg-white p-5 rounded-lg shadow-md lg:col-span-2 bg-opacity-90" data-aos="flip-right" data-aos-delay="200">
                    <h4 class="text-green-600 font-bold text-lg mb-4">Biaya Pendaftaran & Hadiah</h4>
                    <p>Biaya Pendaftaran: Rp50.000 / Tim</p>
                    <p>Transfer ke:</p>
                    <p class="font-bold text-xl my-2">Bank BRI: 0047 0107 2191 508</p>
                    <p>(a.n. Puput Yunita)</p>
                    <hr class="my-4">
                    <p class="font-semibold mb-2">Hadiah Pemenang:</p>
                    <ol class="list-decimal list-inside ml-4">
                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="syarat" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Ketentuan LKTI</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                <div class="card bg-white p-5 rounded-lg shadow-md lg:col-span-2 bg-opacity-90" data-aos="fade-right">
                    <h4 class="text-blue-600 font-bold text-lg mb-4">Kriteria Peserta LKTI</h4>
                    <ul class="check-list">
                        <li>Peserta siswa aktif SMA/SMK/Sederajat (dibuktikan dengan Kartu Tanda Siswa/Kartu Sekolah).</li>
                        <li>Setiap tim terdiri dari 2 orang, dengan 1 orang sebagai Ketua Tim dan 1 orang sebagai Anggota.</li>
                        <li>Peserta harus berasal dari sekolah yang sama, namun boleh dari jurusan berbeda.</li>
                        <li>Anggota tim dapat berasal dari kelas 10, 11, atau 12.</li>
                    </ul>
                </div>

                <div class="card bg-white p-5 rounded-lg shadow-md bg-opacity-90" data-aos="fade-left" data-aos-delay="200">
                    <h4 class="text-blue-600 font-bold text-lg mb-4">Berkas Wajib Upload LKTI</h4>
                    <ul class="check-list">
                        <li>Buku panduan yang sudah ditandatangani</li>
                        <li>Scan Kartu Pelajar seluruh anggota</li>
                        <li>Bukti publikasi (reborn & pamphlet dibagikan ke 3 grup + IG Story)</li>
                        <li class="font-bold">File Fullpaper PDF</li>
                        <li>Bukti Pembayaran (Rp50.000)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


   <section id="contact" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 text-center">

            <h2 class="font-['Arial Black'] text-white mb-16 text-2xl md:text-3xl" data-aos="fade-up">CONTACT US</h2>

            <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">

                    <div class="group-hover:duration-400 relative rounded-2xl w-72 h-auto bg-blue-800 text-gray-50 flex flex-col justify-center items-start p-6 before:-skew-x-12 before:rounded-2xl before:absolute before:content-[''] before:bg-blue-600 before:right-3 before:top-0 before:w-72 before:h-full before:-z-10">

                        <h4 class="text-xl font-bold mb-4 text-yellow-400">Narahubung Lomba</h4>

                        <div class="space-y-2 text-lg text-left w-full">
                            <p class="text-yellow-400 font-bold underline mb-1">LKTI</p>
                            <p>Hayat: <strong class="text-white">0812-6416-7744</strong></p>
                            <p>Nirwana: <strong class="text-white">0852-1621-4198</strong></p>
                            <hr class="my-2 border-gray-500">
                            <p class="text-yellow-400 font-bold underline mb-1">Mobile Legends</p>
                            <p>[Nama Kontak ML]: <strong class="text-white">**[Nomor Kontak ML]**</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-20 text-sm text-white" data-aos="fade-up" data-aos-delay="300">
                <a href="https://isc.unsulbar.ac.id" target="_blank" class="text-yellow-400 mx-2 hover:underline">Website ISC</a> |
                <a href="https://instagram.com/isc.unsulbar" target="_blank" class="text-yellow-400 mx-2 hover:underline">Instagram: @isc.unsulbar</a>
            </p>
        </div>
    </section>

    <footer class="bg-white bg-opacity-95 text-gray-700 py-4">
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
