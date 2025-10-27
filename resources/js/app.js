// File: resources/js/app.js

import './bootstrap';
import './menu';
import './kembali';
import './glitch-changer';

// Import AOS
import AOS from 'aos';

// --- FUNGSI AKTIVASI TAB (PENGGANTI AOS) ---
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
    academicDetail.classList.add('hidden');
    nonAcademicDetail.classList.add('hidden');
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

// --- INISIALISASI UTAMA ---

document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
    });

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

        // Hubungkan event listener ke tombol
        academicButton.addEventListener('click', () => activateTab('academic'));
        nonAcademicButton.addEventListener('click', () => activateTab('non-academic'));
    }
});