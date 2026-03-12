/* Portfolio BTS SIO SLAM - JavaScript */

document.addEventListener('DOMContentLoaded', function () {

    // ===== CONTACT FORM VALIDATION =====
    const form = document.getElementById('contactForm');
    if (form) {
        initContactForm();
    }

    // ===== ACCESSIBILITY =====
    initAccessibility();

});

/**
 * Initialize contact form validation
 */
function initContactForm() {
    const form = document.getElementById('contactForm');
    const errorDiv = document.getElementById('formError');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Clear previous errors
        errorDiv.style.color = '';
        errorDiv.textContent = '';

        // Get form values
        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const message = form.message.value.trim();

        // Validate required fields
        if (!name || !email || !message) {
            showError('Veuillez remplir tous les champs.');
            return;
        }

        // Validate email format
        const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        if (!emailRegex.test(email)) {
            showError('Adresse email invalide.');
            return;
        }

        // Success - simulate sending
        showSuccess('Message envoyé avec succès !');
        form.reset();
    });

    function showError(message) {
        errorDiv.style.color = '#ffb4b4';
        errorDiv.textContent = message;
    }

    function showSuccess(message) {
        errorDiv.style.color = 'lightgreen';
        errorDiv.textContent = message;
    }
}

/**
 * Initialize accessibility features
 */
function initAccessibility() {
    // Add visual indicator when user is navigating with keyboard
    window.addEventListener('keydown', function onFirstTab(e) {
        if (e.key === 'Tab') {
            document.body.classList.add('user-is-tabbing');
            window.removeEventListener('keydown', onFirstTab);
        }
    });
}

// Lightbox Gallery
const gallery = document.getElementById('gallery');
if (gallery) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.querySelector('.lightbox-image');
    const closeBtn = document.querySelector('.lightbox-close');
    const prevBtn = document.querySelector('.lightbox-prev');
    const nextBtn = document.querySelector('.lightbox-next');
    const currentCounter = document.getElementById('current');
    const totalCounter = document.getElementById('total');

    let galleryItems = [];
    let currentIndex = 0;

    function initGallery() {
        galleryItems = Array.from(gallery.querySelectorAll('.gallery-item'));
        totalCounter.textContent = galleryItems.length;

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => openLightbox(index));
        });
    }

    function openLightbox(index) {
        currentIndex = index;
        updateLightboxImage();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    function updateLightboxImage() {
        const item = galleryItems[currentIndex];
        const img = item.querySelector('img');
        lightboxImage.src = img.src;
        lightboxImage.alt = img.alt;
        currentCounter.textContent = currentIndex + 1;
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % galleryItems.length;
        updateLightboxImage();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        updateLightboxImage();
    }

    closeBtn.addEventListener('click', closeLightbox);
    nextBtn.addEventListener('click', nextImage);
    prevBtn.addEventListener('click', prevImage);

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });

    initGallery();
}
