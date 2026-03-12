@extends('layouts.app')

@section('title', 'Compétences - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        .page-header { text-align: center; padding: 2rem 0; margin-bottom: 2rem; }
        .page-header h1 { font-size: clamp(1.8rem, 4vw, 2.8rem); margin: 0 0 1.5rem; color: #e6eef6; }
        .intro { color: var(--muted); line-height: 1.6; margin-bottom: 2rem; text-align: center; font-size: 1.05em; max-width: 800px; margin-left: auto; margin-right: auto; }
        .button-group { display: flex; gap: 1rem; justify-content: center; margin-bottom: 3rem; flex-wrap: wrap; }
        .btn { padding: 0.75rem 1.5rem; background: var(--accent); color: #052029; border: none; border-radius: 8px; font-size: 0.95rem; font-weight: 600; cursor: pointer; transition: transform 0.2s, opacity 0.2s; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-icon { display: inline-block; width: 18px; height: 18px; }
        .competences-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; margin-bottom: 3rem; }
        .competence-card { background: white; padding: 2rem 1.5rem; border-radius: 16px; display: flex; align-items: center; justify-content: center; min-height: 90px; }
        .competence-card-title { color: #1a202c; font-size: 0.95rem; font-weight: 500; text-align: center; }
        .image-section { margin: 3rem auto 2rem; text-align: center; max-width: 900px; }
        .main-image { width: 90%; max-width: 850px; border-radius: 16px; margin-bottom: 2rem; display: block; margin-left: auto; margin-right: auto; cursor: pointer; transition: transform 0.3s ease; }
        .main-image:hover { transform: scale(1.02); }
        /* Modal styles */
        .modal { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.95); justify-content: center; align-items: center; }
        .modal.active { display: flex; }
        .modal-content { max-width: 90%; max-height: 90%; object-fit: contain; border-radius: 12px; }
        .modal-close, .modal-prev, .modal-next { position: absolute; background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.2); color: white; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10000; font-size: 2rem;}
        .modal-close { top: 20px; right: 20px; }
        .modal-prev { left: 20px; top: 50%; transform: translateY(-50%); }
        .modal-next { right: 20px; top: 50%; transform: translateY(-50%); }
        @media (max-width: 760px) { .competences-grid { grid-template-columns: 1fr; } }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <h1>Compétences BTS SIO</h1>
        <p class="intro">
            La formation de BTS SIO m'a permis d'acquérir des compétences en support et en déploiement de systèmes informatiques. Ce bloc couvre des compétences transversales aux deux options (SLAM et SISR).
        </p>

        <div class="button-group">
            <button id="downloadBtn" class="btn">
                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                Découvrir le Tableau de synthèse
            </button>
            <a href="{{ url('/experiences/stages') }}" class="btn">Stage</a>
        </div>

        <div class="competences-grid">
            <div class="competence-card"><div class="competence-card-title">B1.1 – Gérer le patrimoine informatique.</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.2 – Répondre aux incidents et aux demandes d'assistance et d'évolution.</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.3 – Développer la présence en ligne de l'organisation.</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.4 – Travailler en mode projet.</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.5 – Mettre à disposition des utilisateurs un service informatique.</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.6 – Organiser son développement professionnel.</div></div>
        </div>
    </div>

    <div class="image-section">
        <img src="{{ asset('images/Table.PNG') }}" alt="Tableau de synthèse 1" class="main-image">
        <img src="{{ asset('images/table2.png') }}" alt="Tableau de synthèse 2" class="main-image">
    </div>

    <div id="imageModal" class="modal">
        <button class="modal-close" aria-label="Fermer">&times;</button>
        <button class="modal-prev" aria-label="Image précédente">‹</button>
        <button class="modal-next" aria-label="Image suivante">›</button>
        <img class="modal-content" id="modalImage" src="" alt="">
    </div>
@endsection

@section('extra-js')
    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const closeBtn = document.querySelector('.modal-close');
        const prevBtn = document.querySelector('.modal-prev');
        const nextBtn = document.querySelector('.modal-next');
        const images = document.querySelectorAll('.main-image');
        let currentIndex = 0;

        images.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                modalImg.src = img.src; modalImg.alt = img.alt;
                modal.classList.add('active'); document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() { modal.classList.remove('active'); document.body.style.overflow = ''; }
        function showPrevImage() { currentIndex = (currentIndex - 1 + images.length) % images.length; modalImg.src = images[currentIndex].src; }
        function showNextImage() { currentIndex = (currentIndex + 1) % images.length; modalImg.src = images[currentIndex].src; }

        closeBtn.addEventListener('click', closeModal);
        prevBtn.addEventListener('click', showPrevImage);
        nextBtn.addEventListener('click', showNextImage);
        modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
    </script>
@endsection
