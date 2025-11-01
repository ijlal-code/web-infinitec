// File: resources/js/app.js

import './bootstrap';
import './menu';
import './kembali';
import './glitch-changer';

// Import AOS
import AOS from 'aos';

// --- FUNGSI AKTIVASI TAB (PREVIEW CARD) ---
function activateTab(type) {
    const academicButton = document.getElementById('tab-academic');
    const nonAcademicButton = document.getElementById('tab-non-academic');
    const genericCard = document.getElementById('generic-comp-card');
    const academicDetail = document.getElementById('academic-detail-tab');
    const nonAcademicDetail = document.getElementById('non-academic-detail-tab');
    
    if (!academicButton || !nonAcademicButton || !genericCard) return;

    // 1. Reset semua
    academicButton.classList.remove('active-tab'); 
    nonAcademicButton.classList.remove('active-tab');
    
    // Sembunyikan semua detail & hapus animasi (agar bisa dipicu lagi)
    academicDetail.classList.add('hidden', 'card-initial-hidden');
    nonAcademicDetail.classList.add('hidden', 'card-initial-hidden');
    genericCard.classList.add('hidden');
    
    // Hapus class animasi kustom dari kedua tab
    academicDetail.classList.remove('animate-fade-in-up');
    nonAcademicDetail.classList.remove('animate-fade-in-up');

    // 2. Aktifkan tab yang dipilih
    if (type === 'academic') {
        academicButton.classList.add('active-tab');
        academicDetail.classList.remove('hidden');
        
        // PENTING: Tambahkan class animasi kustom setelah card ditampilkan
        // Timeout 50ms memastikan DOM sempat diperbarui sebelum animasi dipicu
        setTimeout(() => {
             academicDetail.classList.add('animate-fade-in-up');
        }, 50);

    } else if (type === 'non-academic') {
        nonAcademicButton.classList.add('active-tab');
        nonAcademicDetail.classList.remove('hidden');
        
        // PENTING: Tambahkan class animasi kustom setelah card ditampilkan
        setTimeout(() => {
             nonAcademicDetail.classList.add('animate-fade-in-up');
        }, 50);

    } else {
        // Tampilkan Generic Card saat type='none' (Untuk state awal)
        genericCard.classList.remove('hidden');
    }
}

// --- FUNGSI TAMPILKAN DETAIL LOMBA UTAMA ---
function showCompetitionDetails(type) {
    const lktiDetails = document.getElementById('lkti-details');
    const mlDetails = document.getElementById('ml-details');
    const detailsWrapper = document.getElementById('lomba-details-wrapper');
    
    // 1. Hide all main content blocks
    if (lktiDetails) lktiDetails.classList.add('hidden');
    if (mlDetails) mlDetails.classList.add('hidden');

    // 2. Show selected content block
    if (type === 'lkti' && lktiDetails) {
        lktiDetails.classList.remove('hidden');
    } else if (type === 'ml' && mlDetails) {
        mlDetails.classList.remove('hidden');
    }

    // 3. Scroll smoothly to the details section
    if (detailsWrapper) {
        // Menggunakan window.scrollTo jika elemen terlalu tinggi
        const offset = detailsWrapper.offsetTop - 100; // Offset 100px dari atas agar tidak tertutup nav
        window.scrollTo({
            top: offset, 
            behavior: 'smooth'
        });
    }
}


// --- INISIALISASI UTAMA ---

document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
    });

    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
        // Ini MENGATASI masalah menu yang sudah terbuka di halaman Kompetisi.
        // Memastikan ia tertutup (max-height: 0) di awal.
        mobileMenu.classList.remove('menu-open'); 
    }

    // Sembunyikan semua detail di awal (kecuali default LKTI)
    const lktiDetails = document.getElementById('lkti-details');
    const mlDetails = document.getElementById('ml-details');
    if (lktiDetails) lktiDetails.classList.remove('hidden'); 
    if (mlDetails) mlDetails.classList.add('hidden');

    // Atur state awal kartu detail
    const academicDetail = document.getElementById('academic-detail-tab');
    const nonAcademicDetail = document.getElementById('non-academic-detail-tab');
    if(academicDetail) academicDetail.classList.add('card-initial-hidden');
    if(nonAcademicDetail) nonAcademicDetail.classList.add('card-initial-hidden');


    // Panggil event listeners untuk tombol tab
    const academicButton = document.getElementById('tab-academic');
    const nonAcademicButton = document.getElementById('tab-non-academic');

    if (academicButton && nonAcademicButton) {
        // Atur state awal: Tampilkan Generic Card saat halaman pertama kali dimuat
        activateTab('none'); 

        // Hubungkan event listener ke tombol tab atas
        academicButton.addEventListener('click', () => activateTab('academic'));
        nonAcademicButton.addEventListener('click', () => activateTab('non-academic'));
        
        // Hubungkan event listener ke tombol "Lihat Ketentuan & Syarat" di dalam card
        const showLktiBtn = document.getElementById('show-lkti-details');
        const showMlBtn = document.getElementById('show-ml-details');

        if (showLktiBtn) {
            showLktiBtn.addEventListener('click', (e) => {
                e.preventDefault();
                showCompetitionDetails('lkti');
            });
        }
        
        if (showMlBtn) {
            showMlBtn.addEventListener('click', (e) => {
                e.preventDefault();
                showCompetitionDetails('ml');
            });
        }
    }

    // --- START: Logika Modal QR Code (Dinamis) ---
    const shareModal = document.getElementById('share-modal');
    // Ambil semua tombol share
    const openModalBtnLKTI = document.getElementById('open-share-modal-lkti');
    const openModalBtnML = document.getElementById('open-share-modal-ml');
    
    const closeModalBtn = document.getElementById('close-share-modal');
    const copyLinkBtn = document.getElementById('copy-link-btn');
    const copyMessageEl = document.getElementById('copy-message');
    // Ambil elemen dinamis di modal
    const modalCompNameEl = document.getElementById('modal-comp-name');
    const modalDescCompNameEl = document.getElementById('modal-desc-comp-name');
    const modalQrImageEl = document.getElementById('modal-qr-image'); // <-- Ambil elemen gambar

    // Fungsi untuk setup dan membuka modal
    function setupModal(button) {
        // Cek semua elemen penting, termasuk elemen gambar
        if (!shareModal || !copyLinkBtn || !modalCompNameEl || !modalDescCompNameEl || !modalQrImageEl) return; 

        const link = button.dataset.link;
        const competitionName = button.dataset.competition;
        const qrSrc = button.dataset.qrSrc; // <-- Ambil sumber QR dari tombol
        
        // 1. Update Modal Content
        copyLinkBtn.dataset.link = link;
        modalCompNameEl.textContent = competitionName;
        // Penyesuaian teks deskripsi
        modalDescCompNameEl.textContent = competitionName === 'LKTI' ? 'Lomba Karya Tulis Ilmiah' : competitionName + ' Championship';
        
        modalQrImageEl.src = qrSrc; // <-- SET SUMBER GAMBAR QR

        // 2. Buka Modal
        shareModal.classList.remove('hidden', 'opacity-0');
        shareModal.classList.add('opacity-100');
    }


    if (closeModalBtn && copyLinkBtn) {
        // Attach listener for LKTI button
        if (openModalBtnLKTI) {
            openModalBtnLKTI.addEventListener('click', () => setupModal(openModalBtnLKTI));
        }

        // Attach listener for MLBB button
        if (openModalBtnML) {
            openModalBtnML.addEventListener('click', () => setupModal(openModalBtnML));
        }

        // Tutup Modal
        closeModalBtn.addEventListener('click', () => {
            shareModal.classList.remove('opacity-100');
            shareModal.classList.add('opacity-0');
            setTimeout(() => {
                shareModal.classList.add('hidden');
                copyMessageEl.classList.add('hidden'); 
            }, 300);
        });

        // Logika Salin Link
        copyLinkBtn.addEventListener('click', () => {
            const link = copyLinkBtn.dataset.link;
            if (!link) return;
            
            navigator.clipboard.writeText(link).then(() => {
                copyMessageEl.classList.remove('hidden');
                setTimeout(() => {
                    copyMessageEl.classList.add('hidden');
                }, 2000);
            }).catch(err => {
                console.error('Gagal menyalin link: ', err);
                alert('Gagal menyalin link. Silakan salin manual: ' + link);
            });
        });
        
        // Tambahkan fungsi untuk menutup modal jika klik di luar card
        shareModal.addEventListener('click', (e) => {
            if (e.target.id === 'share-modal') {
                 closeModalBtn.click();
            }
        });
    }
    // --- END: Logika Modal QR Code (Dinamis) ---
});