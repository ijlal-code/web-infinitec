// File: resources/js/app.js

import './bootstrap';
import './menu';
import './kembali';
import './glitch-changer';

// Import AOS
import AOS from 'aos';

// --- VARIABEL GLOBAL UNTUK MELACAK KOMPETISI YANG AKTIF ---
let activeCompetitionType = null; // Tambahkan variabel global ini

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
    
    // KONDISI BARU: JIKA KOMPETISI YANG SAMA DITEKAN LAGI, HANYA SCROLL, JANGAN RESET AOS
    if (type === activeCompetitionType) {
        const detailsWrapper = document.getElementById('lomba-details-wrapper');
        // Scroll smoothly to the details section (only scroll, no content/AOS changes)
        if (detailsWrapper) {
            const offset = detailsWrapper.offsetTop - 100; 
            window.scrollTo({
                top: offset, 
                behavior: 'smooth'
            });
        }
        return; // Hentikan eksekusi fungsi di sini
    }
    
    // ID diubah di kompetisi.blade.php menjadi *-content
    const lktiDetails = document.getElementById('lkti-details-content');
    const codingwarDetails = document.getElementById('codingwar-details-content'); 
    const mlDetails = document.getElementById('ml-details-content');
    const detailsWrapper = document.getElementById('lomba-details-wrapper');

    const allDetails = [lktiDetails, codingwarDetails, mlDetails].filter(el => el != null);
    
    // 1. Reset AOS state for ALL detail content blocks before showing the new one
    // Ini memastikan AOS akan mentrigger animasi lagi saat refreshHard dipanggil,
    // (Hanya jika berpindah dari kompetisi yang berbeda)
    allDetails.forEach(detail => {
        // Hapus class AOS untuk mereset status animasi dari SEMUA elemen ber-data-aos
        const aosElements = detail.querySelectorAll('[data-aos]');
        aosElements.forEach(el => {
            el.classList.remove('aos-init', 'aos-animate');
        });
    });

    // 2. Hide all main content blocks
    allDetails.forEach(detail => {
        detail.classList.add('hidden');
    });

    // 3. Show selected content block
    let activeDetail;
    if (type === 'lkti' && lktiDetails) {
        lktiDetails.classList.remove('hidden');
        activeDetail = lktiDetails;
    } else if (type === 'codingwar' && codingwarDetails) {
        codingwarDetails.classList.remove('hidden');
        activeDetail = codingwarDetails;
    } else if (type === 'ml' && mlDetails) {
        mlDetails.classList.remove('hidden');
        activeDetail = mlDetails;
    }

    // 4. Force AOS to re-evaluate after showing the content
    // Dipanggil setelah semua elemen ter-reset dan detail konten telah ditampilkan.
    setTimeout(() => { 
        if (typeof AOS !== 'undefined') {
            AOS.refreshHard(); 
        }
    }, 50);

    // 5. Scroll smoothly to the details section
    if (detailsWrapper) {
        const offset = detailsWrapper.offsetTop - 100; 
        window.scrollTo({
            top: offset, 
            behavior: 'smooth'
        });
    }

    // 6. PERBARUI VARIABEL AKTIF
    activeCompetitionType = type;
}


// --- INISIALISASI UTAMA ---
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
    });
    
    // Set activeCompetitionType menjadi null di awal
    activeCompetitionType = null; // PENTING: Pastikan ini disetel

    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
        mobileMenu.classList.remove('menu-open'); 
    }

    // Sembunyikan semua detail di awal dan mereset AOS
    const lktiDetails = document.getElementById('lkti-details-content');
    const codingwarDetails = document.getElementById('codingwar-details-content');
    const mlDetails = document.getElementById('ml-details-content');
    
    // Menerapkan initial reset untuk memastikan animasi tampil saat pertama kali tombol ditekan
    const allDetailsInitial = [lktiDetails, codingwarDetails, mlDetails].filter(el => el != null);
    allDetailsInitial.forEach(detail => {
        detail.classList.add('hidden'); 
        
        // Reset AOS state for initial load too
        const aosElements = detail.querySelectorAll('[data-aos]');
        aosElements.forEach(el => {
            el.classList.remove('aos-init', 'aos-animate');
        });
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

        // Hubungkan event listener ke tombol tab atas
        academicButton.addEventListener('click', () => activateTab('academic'));
        nonAcademicButton.addEventListener('click', () => activateTab('non-academic'));
        
        // Hubungkan event listener ke tombol "Lihat Ketentuan & Syarat" di dalam card
        const showDetailButtons = document.querySelectorAll('.show-details-btn'); 

        if (showDetailButtons.length > 0) { 
            showDetailButtons.forEach(button => { 
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = button.dataset.target; 
                    showCompetitionDetails(target);
                });
            });
        }
    }

    // --- START: Logika Modal QR Code (Dinamis) ---
    const shareModal = document.getElementById('share-modal');
    // Ambil semua tombol share
    const openModalBtnLKTI = document.getElementById('open-share-modal-lkti');
    const openModalBtnML = document.getElementById('open-share-modal-ml');
    const openModalBtnCodingWar = document.getElementById('open-share-modal-codingwar'); 
    
    const closeModalBtn = document.getElementById('close-share-modal');
    const copyLinkBtn = document.getElementById('copy-link-btn');
    const copyMessageEl = document.getElementById('copy-message');
    // Ambil elemen dinamis di modal
    const modalCompNameEl = document.getElementById('modal-comp-name');
    const modalDescCompNameEl = document.getElementById('modal-desc-comp-name');
    const modalQrImageEl = document.getElementById('modal-qr-image');

    // Fungsi untuk setup dan membuka modal
    function setupModal(button) {
        if (!shareModal || !copyLinkBtn || !modalCompNameEl || !modalDescCompNameEl || !modalQrImageEl) return; 

        const link = button.dataset.link;
        const competitionName = button.dataset.competition;
        const qrSrc = button.dataset.qrSrc; 
        
        // 1. Update Modal Content
        copyLinkBtn.dataset.link = link;
        modalCompNameEl.textContent = competitionName;
        // Penyesuaian teks deskripsi
        modalDescCompNameEl.textContent = competitionName === 'LKTI' ? 'Lomba Karya Tulis Ilmiah' : (competitionName === 'Coding War' ? 'Kompetisi Pemrograman Coding War' : competitionName + ' Championship');
        
        modalQrImageEl.src = qrSrc; 

        // 2. Buka Modal
        shareModal.classList.remove('hidden', 'opacity-0');
        shareModal.classList.add('opacity-100');
    }


    if (closeModalBtn && copyLinkBtn) {
        // Attach listener for all share buttons
        if (openModalBtnLKTI) {
            openModalBtnLKTI.addEventListener('click', () => setupModal(openModalBtnLKTI));
        }
        if (openModalBtnML) {
            openModalBtnML.addEventListener('click', () => setupModal(openModalBtnML));
        }
        if (openModalBtnCodingWar) {
            openModalBtnCodingWar.addEventListener('click', () => setupModal(openModalBtnCodingWar));
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