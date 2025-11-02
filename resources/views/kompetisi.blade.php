<x-layouts.app title="KOMPETISI | INFINITEC 2025" css="hal2">

    {{-- Menggunakan komponen Nav, set activePage=kompetisi dan link Daftar ke Google Form --}}
  <x-slot name="nav">
    <x-nav activePage="kompetisi"
           buttonText="DAFTAR"
           buttonLink="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" />
</x-slot>

<x-slot name="footer">
    <x-footer />
</x-slot>

<x-slot name="backToTop">
    <x-back-to-top />
</x-slot>

    <header class="text-white pt-10 pb-10 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <div class="container w-11/12 max-w-6xl mx-auto py-5 px-4 pt-12 rounded-lg">
            <h1 class="font-['Arial Black'] mb-1 text-3xl md:text-5xl" data-aos="fade-up" data-aos-delay="200">KOMPETISI INFINITEC 2025</h1>
            <h2 class="text-xl md:text-2xl mt-0" data-aos="fade-up" data-aos-delay="300">Bidang Akademik & Non-Akademik</h2>
            <p class="italic text-lg" data-aos="fade-up" data-aos-delay="400">Pilih tantanganmu, raih prestasimu!</p>

            <a href="#lomba-details-wrapper"
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
    <button id="tab-academic" class="comp-tab-btn-new transition-all">
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
    <div id="academic-detail-tab" class=" w-full flex justify-center card-initial-hidden">
        {{-- Ganti A tag dengan DIV --}}
        <div class="w-full max-w-md">
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
                    class="absolute blur duration-500 group-hover:blur-none w-24 h-24 bg-sky-700 rounded-full group-hover:-translate-x-12"
                ></div>

                <div class="z-10 flex flex-col justify-evenly w-full h-full text-left">
                    <span class="text-2xl font-black uppercase text-yellow-400">LKTI Competition</span>
                    <p class="text-blue-200 text-base">
                        Lomba Karya Tulis Ilmiah (LKTI) mengundang siswa untuk menyajikan solusi kreatif berbasis teknologi dan riset.
                    </p>
                    {{-- Ganti button link dengan button ID untuk JS --}}
                    <button
                        id="show-lkti-details"
                        class="hover:bg-neutral-200 bg-yellow-400 rounded text-blue-900 font-extrabold w-full p-3 transition duration-300 shadow-md"
                    >
                        Lihat Ketentuan & Syarat
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Tab Detail Non-Academic BARU (Uiverse Card - Mobile Legends) --}}
    <div id="non-academic-detail-tab" class=" w-full flex justify-center card-initial-hidden">
        {{-- Ganti A tag dengan DIV --}}
        <div class="w-full max-w-md">
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

                    {{-- START: Tambahkan Gambar Logo di sini --}}
    <img
        src="{{ asset('logo/logo-ml.png') }}"
        alt="Logo Mobile Legends Turnamen"
        class="h-20 object-contain mx-auto my-2"
    />
    {{-- END: Tambahkan Gambar Logo --}}


                    <p class="text-yellow-400 text-base font-bold">
                        Ajang kompetisi E-Sport Mobile Legends. Terbuka untuk Umum.
                    </p>
                    {{-- Ganti button link dengan button ID untuk JS --}}
                    <button
                        id="show-ml-details"
                        class="hover:bg-neutral-200 bg-neutral-50 rounded text-red-800 font-extrabold w-full p-3 transition duration-300 shadow-md"
                    >
                        Lihat Ketentuan & Syarat
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>

    {{-- WRAPPER UNTUK KONTEN DETAIL LOMBA YANG BERUBAH --}}
<div id="lomba-details-wrapper">

    {{-- 1. LKTI DETAILS (Content Asli) --}}
    <div id="lkti-details" class="lomba-details-content">

        {{-- Section: Jadwal Penting LKTI (Original) --}}
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
                            {{-- START: Tambahan Kode Dua Tombol Baru untuk LKTI --}}
                            <div class="mt-2 flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-3">
                                {{-- START: Tambahan Kode Dua Tombol Baru untuk LKTI --}}
                            <div class="mt-4 flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-3">
                                {{-- Tombol 1: Daftar Sekarang (Menggunakan Shimmer Button) --}}
                                <x-shimmer-button
                                    href="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" {{-- Menggunakan link pendaftaran utama --}}
                                    text="DAFTAR SEKARANG"
                                    target="_blank"
                                    class="w-full"
                                />

                                {{-- Tombol 2: Bagikan ke Teman (Tombol Biasa untuk memicu Modal) --}}
                                <button
                                  id="open-share-modal-lkti"
                                  data-link="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" {{-- Link pendaftaran LKTI --}}
                                   data-competition="LKTI"
                                   data-qr-src="{{ asset('qr/qr-ml.jpeg') }}" {{-- Tentukan gambar QR untuk LKTI di sini --}}
                                   class="w-full relative inline-flex items-center justify-center overflow-hidden rounded-md bg-blue-600 backdrop-blur-lg px-6 py-2 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-blue-600/50 border border-white/20"
                                      >
                                       <span class="text-lg">
                                      BAGIKAN KE TEMAN
                                     </span>
                                  </button>
                            </div>
                            {{-- END: Tambahan Kode Dua Tombol Baru untuk LKTI --}}
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

        {{-- Section TEMA & HADIAH LKTI (Original) --}}
        <section id="tema" class="py-16">
            <div class="container w-11/12 max-w-6xl mx-auto px-4">
                <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Tema & Hadiah LKTI</h2>
                <p class="text-center mb-8 text-white" data-aos="fade-up" data-aos-delay="100">Pilih salah satu dari subtema berikut untuk ide kreatifmu:</p>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 justify-items-center">

                    {{-- Subtema Pilihan (Single Card) --}}
                    <div data-aos="flip-left" class="w-full">
                        <x-dark-glow-card title="Subtema Pilihan" subtitle="Pilih satu fokus" class="h-auto max-w-full">
                            <ul class="check-list space-y-1">
                                <li class="text-white">Aplikasi Digital</li>
                                <li class="text-white">Teknologi Usaha Lokal</li>
                                <li class="text-white">Teknologi Hijau</li>
                                <li class="text-white">Pertanian Modern</li>
                                <li class="text-white">Teknologi Kesehatan</li>
                            </ul>
                            <p class="text-center mt-6">
                                <a href="https://bit.ly/lkti-infinitec-2025" target="_blank"
                                   class="inline-block bg-blue-600 text-white py-2 px-5 font-bold rounded transition hover:bg-blue-700">
                                    Buku Panduan
                                </a>
                            </p>
                        </x-dark-glow-card>
                    </div>

                    {{-- Biaya Pendaftaran & Hadiah (Larger Card - Diubah agar lebar penuh) --}}
                    <div class="lg:col-span-2 w-full" data-aos="flip-right" data-aos-delay="200">
                        <div class="card m-auto w-full hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 m-4 rounded-lg overflow-hidden relative">
                            <div class="px-8 py-10 text-gray-400">
                                <div class="bg-yellow-500 w-10 h-10 rounded-full rounded-tl-none mb-4 group-hover:-translate-y-1 group-hover:shadow-xl group-hover:shadow-yellow-700 transition-all"></div>
                                <div class="uppercase font-bold text-xl text-white">
                                    Biaya Pendaftaran & Hadiah
                                </div>
                                <div class="mt-8">
                                     <p>Biaya Pendaftaran: Rp50.000 / Tim</p>
                                    <p>Transfer ke:</p>
                                    <p class="font-bold text-xl my-2 text-yellow-400">Bank BRI: 0047 0107 2191 508</p>
                                    <p>(a.n. Puput Yunita)</p>
                                    <hr class="my-4 border-gray-700">
                                    <p class="font-semibold mb-2 text-white">Hadiah Pemenang:</p>
                                    <ol class="list-decimal list-inside ml-4 text-white">
                                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
                            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section KETENTUAN LKTI (Original) --}}
        <section id="syarat" class="py-16">
            <div class="container w-11/12 max-w-6xl mx-auto px-4">
                <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Ketentuan LKTI</h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 justify-items-center">

                    {{-- Kriteria Peserta LKTI (Larger Card - Diubah agar lebar penuh) --}}
                    <div class="lg:col-span-2 w-full" data-aos="fade-right">
                        <div class="card m-auto w-full hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 m-4 rounded-lg overflow-hidden relative">
                            <div class="px-8 py-10 text-gray-400">
                                <div class="bg-yellow-500 w-10 h-10 rounded-full rounded-tl-none mb-4 group-hover:-translate-y-1 group-hover:shadow-xl group-hover:shadow-yellow-700 transition-all"></div>
                                <div class="uppercase font-bold text-xl text-white">
                                    Kriteria Peserta LKTI
                                </div>
                                <div class="mt-8">
                                     <ul class="check-list space-y-1">
                                        <li class="text-white">Peserta siswa aktif SMA/SMK/Sederajat (dibuktikan dengan Kartu Tanda Siswa/Kartu Sekolah).</li>
                                        <li class="text-white">Setiap tim terdiri dari 2 orang, dengan 1 orang sebagai Ketua Tim dan 1 orang sebagai Anggota.</li>
                                        <li class="text-white">Peserta harus berasal dari sekolah yang sama, namun boleh dari jurusan berbeda.</li>
                                        <li class="text-white">Anggota tim dapat berasal dari kelas 10, 11, atau 12.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
                            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
                        </div>
                    </div>

                    {{-- Berkas Wajib Upload LKTI (Single Card) --}}
                    <div data-aos="fade-left" data-aos-delay="200" class="w-full">
                        <x-dark-glow-card title="Berkas Wajib Upload LKTI" subtitle="Dokumen yang harus disiapkan" class="h-auto max-w-full">
                            <ul class="check-list space-y-1">
                                <li class="text-white">Buku panduan yang sudah ditandatangani</li>
                                <li class="text-white">Scan Kartu Pelajar seluruh anggota</li>
                                <li class="text-white">Bukti publikasi (reborn & pamphlet dibagikan ke 3 grup + IG Story)</li>
                                <li class="font-bold text-white">File Fullpaper PDF</li>
                                <li class="text-white">Bukti Pembayaran (Rp50.000)</li>
                            </ul>
                        </x-dark-glow-card>
                    </div>
                </div>
            </div>
        </section>

    </div>
    {{-- AKHIR LKTI DETAILS --}}

    {{-- 2. MLBB (MOBILE LEGENDS) DETAILS (Konten Baru, tersembunyi secara default) --}}
    <div id="ml-details" class="lomba-details-content hidden">

        <section id="ml-jadwal" class="py-16">
            <div class="container w-11/12 max-w-6xl mx-auto px-4">
                <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Jadwal Turnamen E-Sports Championship</h2>

                <div class="timeline-card-wrapper max-w-4xl mx-auto">
                    <div class="relative timeline-left" data-aos="fade-right" data-aos-delay="100">
                        <article class="timeline-card mb-12">
                            <div class="mb-2 flex items-center gap-x-2 text-xs">
                                <time class="timeline-badge yellow" datetime="2025-11-01">1 - 23 November 2025</time>
                                <a class="timeline-badge blue" href="#ml-syarat">Pendaftaran</a>
                            </div>
                            <h3 class="group relative">
                                <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                    Registrasi Tim
                                </span>
                            </h3>
                            <p class="text-sm mt-3 leading-6 text-gray-700">
                                Waktu pendaftaran untuk turnamen Mobile Legends. Terbuka untuk Umum.
                            </p>
                            {{-- START: Tambahan Kode Dua Tombol Baru --}}
                            <div class="mt-4 flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-3">
                                {{-- Tombol 1: Daftar Sekarang (Menggunakan Shimmer Button) --}}
                                <x-shimmer-button
                                    href="https://forms.gle/okvpMqu7xJUG7vy79"
                                    text="DAFTAR SEKARANG"
                                    target="_blank"
                                    class="w-full"
                                />

                                {{-- Tombol 2: Bagikan ke Teman (Tombol Biasa untuk memicu Modal) --}}
                               <button
                id="open-share-modal-ml"
                data-link="https://forms.gle/okvpMqu7xJUG7vy79"
                data-competition="Mobile Legends"
                data-qr-src="{{ asset('qr/qr-ml.jpeg') }}" {{-- Tentukan gambar QR untuk MLBB di sini --}}
                class="w-full relative inline-flex items-center justify-center overflow-hidden rounded-md bg-blue-600 backdrop-blur-lg px-6 py-2 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-blue-600/50 border border-white/20"
            >
                <span class="text-lg">
                    BAGIKAN KE TEMAN
                </span>
            </button>
                            </div>
                            {{-- END: Tambahan Kode Dua Tombol Baru --}}
                        </article>
                    </div>
                    <div class="relative timeline-right" data-aos="fade-left" data-aos-delay="200">
                        <article class="timeline-card mb-12">
                             <div class="mb-2 flex items-center gap-x-2 text-xs">
                                <time class="timeline-badge yellow" datetime="2025-11-29">29 - 30 November 2025</time>
                                <a class="timeline-badge blue" href="#">Pelaksanaan</a>
                            </div>
                            <h3 class="group relative">
                                <span class="group-hover:text-blue-800 text-lg font-black uppercase leading-6 text-gray-900 transition-all duration-500 ease-in-out">
                                    Pelaksanaan Turnamen
                                </span>
                            </h3>
                            <p class="text-sm mt-3 leading-6 text-gray-700">
                                Penyisihan dilaksanakan secara Online.
                                Saat 16 Besar - Final dilaksanakn pada cafe moespace (Belakang pasar oleh oleh).
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="ml-hadiah" class="py-16">
            <div class="container w-11/12 max-w-6xl mx-auto px-4">
                <h2 class="font-['Arial Black'] text-white text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Hadiah & Detail Turnamen MLBB</h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 justify-items-center">

                    {{-- Detail Turnamen --}}
                    <div data-aos="flip-left" class="w-full">
                        <x-dark-glow-card title="Detail Turnamen" subtitle="Informatics E-Sports Championship" class="h-auto max-w-full">
                            <ul class="check-list space-y-1">
                                <li class="text-white">Total Hadiah (Pollprize): **Rp1.200.000**</li>
                                <li class="text-white">Slot Tersedia: **32 Tim**</li>
                                <li class="text-white">Biaya Registrasi: **Rp50.000 / Tim**</li>
                                <li class="text-white">Turnamen ini **Terbuka untuk Umum**</li>
                            </ul>
                        </x-dark-glow-card>
                    </div>

                    {{-- Syarat & Narahubung (Larger Card) --}}
                    <div class="lg:col-span-2 w-full" data-aos="flip-right" data-aos-delay="200">
                        <div class="card m-auto w-full hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 m-4 rounded-lg overflow-hidden relative">
                            <div class="px-8 py-10 text-gray-400">
                                <div class="bg-yellow-500 w-10 h-10 rounded-full rounded-tl-none mb-4 group-hover:-translate-y-1 group-hover:shadow-xl group-hover:shadow-yellow-700 transition-all"></div>
                                <div class="uppercase font-bold text-xl text-white">
                                    Syarat & Narahubung
                                </div>
                                <div class="mt-8">
                                    <p class="font-bold text-lg mb-2 text-yellow-400">Syarat dan Ketentuan:</p>
                                    <ol class="list-decimal list-inside ml-4 text-white">
                                        <li class="mb-1">No Toxic</li>
                                        <li class="mb-1">Tidak boleh Rusuh</li>
                                        <li class="mb-1">No cheat</li>
                                    </ol>
                                    <hr class="my-4 border-gray-700">
                                    <p class="font-bold mb-2 text-yellow-400">Narahubung Pendaftaran:</p>
                                    <ul class="check-list space-y-1 text-white">
                                        <li>Rahmadi: **+62 821-9072-8175**</li>
                                        <li>Nazwa: **+62 823-2362-2522**</li>
                                        <li>Ita: **+62 823-4010-1987**</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
                            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    {{-- AKHIR MLBB DETAILS --}}
    {{-- START: Modal QR Code untuk Berbagi (Dibuat Dinamis) --}}
{{-- Menerapkan kelas CSS 'modal-backdrop-blur' untuk efek buram --}}
<div id="share-modal" class="fixed inset-0 modal-backdrop-blur flex items-center justify-center z-[100] hidden transition-opacity duration-300 opacity-0">
    <div class="bg-blue-900 border-4 border-yellow-400 rounded-xl p-8 max-w-sm w-full text-center shadow-2xl relative" data-aos="zoom-in">
        <button id="close-share-modal" class="absolute top-3 right-3 text-white hover:text-yellow-400 text-2xl">&times;</button>
        <h3 class="font-['Arial Black'] text-yellow-400 text-2xl mb-4">BAGIKAN LINK <span id="modal-comp-name">KOMPETISI</span></h3>
        <p class="text-white mb-6">Scan QR Code di bawah atau salin link untuk mendaftar <span id="modal-desc-comp-name">kompetisi ini</span>.</p>
        
        {{-- QR CODE IMAGE (Diberi ID dan SRC dikosongkan, diisi oleh JS) --}}
        <img 
            id="modal-qr-image"
            src="" 
            alt="QR Code Pendaftaran" 
            class="w-48 h-48 object-contain mx-auto border-4 border-white mb-6"
        />
        
        {{-- Tombol Salin Link (data-link diisi oleh JS) --}}
        <button
            id="copy-link-btn"
            data-link=""
            class="bg-yellow-400 text-blue-900 py-3 px-6 rounded-md font-bold hover:bg-yellow-500 transition-all w-full"
        >
            SALIN LINK
        </button>
        <p id="copy-message" class="text-green-400 mt-2 hidden">Link berhasil disalin!</p>
         </div>
    </div>
    {{-- END: Modal QR Code untuk Berbagi --}}
</div>
{{-- AKHIR WRAPPER LOMBA DETAILS --}}


   <section id="contact" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 text-center">

            <h2 class="font-['Arial Black'] text-white mb-16 text-2xl md:text-3xl" data-aos="fade-up">CONTACT US</h2>

            <div class="flex justify-center" data-aos="fade-up" data-aos-delay="200">
                <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">

                    <div class="group-hover:duration-400 relative rounded-2xl w-72 h-auto bg-blue-800 text-gray-50 flex flex-col justify-center items-start p-6 before:-skew-x-12 before:rounded-2xl before:absolute before:content-[''] before:bg-blue-600 before:right-3 before:top-0 before:w-72 before:h-full before:-z-10">

                        <h4 class="text-xl font-bold mb-4 text-yellow-400">Narahubung Lomba</h4>

                        <div class="space-y-2 text-lg text-left w-full">
                            <p class="text-yellow-400 font-bold underline mb-1">LKTI</p>
                            <p>Hayat: <strong class="text-white">0812-6416-7744</strong></p>
                            <p>Nirwana: <strong class="text-white">0852-1621-4198</strong></p>
                            <hr class="my-2 border-gray-500">
                            <p class="text-yellow-400 font-bold underline mb-1">Mobile Legends</p>
                            {{-- Update kontak ML di bagian bawah sesuai data baru --}}
                            <p>Rahmadi: <strong class="text-white">+62 821-9072-8175</strong></p>
                            <p>Nazwa: <strong class="text-white">+62 823-2362-2522</strong></p>
                            <p>Ita: <strong class="text-white">+62 823-4010-1987</strong></p>
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

</x-layouts.app>
