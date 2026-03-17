@extends('layouts.app')

@section('title', 'Stages - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        /* Styles et animations (identiques au Stage 2) */
        .stage-header { text-align: center; margin-bottom: 2rem; }
        .stage-dates {
            display: inline-block;
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.15), rgba(124, 58, 237, 0.15));
            color: var(--accent);
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 1rem;
            border: 1px solid rgba(6, 182, 212, 0.3);
            box-shadow: 0 0 15px rgba(6, 182, 212, 0.1);
        }

        .intro-grid { display: grid; grid-template-columns: 1.3fr 1fr; gap: 2rem; align-items: center; margin-bottom: 1.5rem; }

        .company-logo {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.05), rgba(124, 58, 237, 0.05));
            border-radius: 12px; padding: 2rem; display: flex; align-items: center; justify-content: center;
            border: 1px solid rgba(6, 182, 212, 0.2); height: 300px; cursor: pointer;
            box-shadow: 0 8px 24px rgba(6, 182, 212, 0.2); transition: all 0.3s ease;
        }
        .company-logo:hover {
            transform: translateY(-5px); box-shadow: 0 12px 32px rgba(6, 182, 212, 0.3); border-color: rgba(6, 182, 212, 0.4);
        }
        .company-logo img { width: 100%; height: 100%; object-fit: contain; transition: transform 0.5s ease; }
        .company-logo:hover img { transform: scale(1.05); }

        .tools-box {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.08), rgba(124, 58, 237, 0.05));
            padding: 1.5rem; border-radius: var(--radius); border-left: 4px solid var(--accent); margin: 1.5rem 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .tools-box:hover { transform: translateX(5px); box-shadow: 0 5px 15px rgba(6, 182, 212, 0.1); }

        .project-item {
            display: grid; grid-template-columns: 1.4fr 1fr; gap: 2.5rem; align-items: center; margin-bottom: 3rem;
            padding: 2rem; background: rgba(255, 255, 255, 0.02); border-radius: var(--radius);
            border: 1px solid rgba(255, 255, 255, 0.05); transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
        }
        .project-item:hover {
            transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4), 0 0 20px rgba(6, 182, 212, 0.1);
            border-color: rgba(6, 182, 212, 0.3);
        }

        .project-reverse { grid-template-columns: 1fr 1.4fr; }

        .project-image { border-radius: 12px; overflow: hidden; cursor: pointer; box-shadow: 0 8px 24px rgba(0,0,0,0.3); height: 350px;}
        .project-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; display: block; }
        .project-image:hover img { transform: scale(1.08); }

        .tech-badges { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.2rem; }
        .badge {
            padding: 0.4rem 0.9rem; background: rgba(6, 182, 212, 0.1); border: 1px solid var(--accent);
            border-radius: 20px; font-size: 0.85rem; color: var(--accent); transition: all 0.3s ease; cursor: default;
        }
        .badge:hover {
            background: var(--accent); color: #052029; transform: translateY(-3px) scale(1.05); box-shadow: 0 4px 10px rgba(6, 182, 212, 0.3);
        }

        /* Animations d'apparition (Scroll Reveal) */
        .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.5, 0, 0, 1); }
        .reveal.active { opacity: 1; transform: translateY(0); }

        /* Styles de la modale (Pop-up) */
        .modal { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.95); justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease; }
        .modal.active { display: flex; opacity: 1; }
        .modal-content { max-width: 90%; max-height: 90%; object-fit: contain; border-radius: 12px; transform: scale(0.95); transition: transform 0.3s ease; }
        .modal.active .modal-content { transform: scale(1); }
        .modal-close, .modal-prev, .modal-next { position: absolute; background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.2); color: white; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10000; font-size: 2rem; transition: background 0.3s, transform 0.3s; }
        .modal-close:hover, .modal-prev:hover, .modal-next:hover { background: var(--accent); color: #052029; transform: scale(1.1); border-color: var(--accent); }
        .modal-close { top: 20px; right: 20px; }
        .modal-prev { left: 20px; top: 50%; transform: translateY(-50%); }
        .modal-next { right: 20px; top: 50%; transform: translateY(-50%); }

        @media (max-width: 760px) {
            .intro-grid, .project-item, .project-reverse { grid-template-columns: 1fr; }
            .project-reverse .project-text { order: 1; }
            .project-reverse .project-image { order: 2; }
        }
    </style>
@endsection

@section('content')
    <section class="page-header reveal">
        <h1>Mes Stages</h1>
        <p style="text-align: center; color: var(--muted); max-width: 800px; margin: 0 auto 2.5rem; font-size: 1.05rem; line-height: 1.7;">
            Découvrez mes expériences de stage durant ma formation en BTS SIO SLAM.
        </p>
    </section>

    <article class="card reveal">
        <div class="stage-header">
            <h2>Mon 1er Stage</h2>
            <div class="stage-dates">26/05/2025 au 4/07/2025</div>
        </div>

        <div class="intro-grid">
            <div class="intro-text">
                <p>
                    J'ai réalisé mon premier stage à <strong>Espace Mobile</strong> situé à <strong>Lyon</strong>.
                    Au cours de ce stage dans le département <strong>informatique</strong>, j'ai pu m'intéresser
                    au Service de réparation pour téléphones, ordinateurs et Mac et, améliorer un site de
                    l'entreprise et bien d'autres... Durant ce stage j'ai utilisé plusieurs langages
                    de programmation tels que le <strong>HTML</strong>, <strong>CSS</strong>,
                    <strong>JavaScript</strong> et <strong>PHP</strong>.
                </p>
                <div class="tech-badges">
                    <span class="badge">HTML5</span>
                    <span class="badge">CSS3</span>
                    <span class="badge">JavaScript</span>
                    <span class="badge">PHP</span>
                </div>
            </div>
            <div class="company-logo">
                <img src="{{ asset('images/company-logo.png') }}" alt="Logo Espace Mobile" class="zoomable">
            </div>
        </div>

        <div class="tools-box">
            <strong>Outils utilisés :</strong> Pour ce premier stage j'ai utilisé différents outils et notions. J'ai utilisé <strong>Brave</strong> comme navigateur web pour effectuer les tests en local et <strong>PHPStorm</strong> pour écrire le code.
        </div>
    </article>

    <section>
        <h2 style="text-align: center; margin: 4rem 0 3rem; font-size: 2rem;" class="reveal">Projets Réalisés</h2>

        <div class="project-item reveal">
            <div class="project-image">
                <img src="{{ asset('images/site1.PNG') }}" alt="Développement De Site" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Développement De Site</h3>
                <p>
                    J'ai conçu et développé ce site entièrement en HTML et CSS, afin de créer une interface simple, rapide et adaptée à tous les écrans (ordinateur, tablette et mobile).
                </p>
                <p>
                    Le code HTML structure les différentes sections du site comme la présentation des services, les tarifs et la page de contact tandis que le CSS gère toute la mise en forme visuelle, notamment les couleurs.
                </p>
                <div class="tech-badges">
                    <span class="badge">HTML</span>
                    <span class="badge">CSS</span>
                    <span class="badge">PHP</span>
                    <span class="badge">SQL</span>
                </div>
            </div>
        </div>

        <div class="project-item project-reverse reveal">
            <div class="project-image">
                <img src="{{ asset('images/Contact.png') }}" alt="Page De Contact" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Page De Contact avec Base de Données</h3>
                <p>
                    J'ai développé une page de contact complète en intégrant une base de données SQL via WAMP Server. Ce projet combine HTML, CSS et JavaScript pour le frontend, avec PHP et MySQL pour gérer le backend.
                </p>
                <p>
                    L'utilisation de WAMP (Windows, Apache, MySQL, PHP) m'a permis de créer un environnement de développement local robuste. J'ai conçu une base de données MySQL pour stocker tous les messages des utilisateurs de manière sécurisée et structurée.
                </p>
                <div class="tech-badges">
                    <span class="badge">SQL</span>
                    <span class="badge">WAMP</span>
                    <span class="badge">MySQL</span>
                    <span class="badge">PHP</span>
                </div>
            </div>
        </div>

        <div class="project-item reveal">
            <div class="project-image">
                <img src="{{ asset('images/Phone.jpg') }}" alt="Réparation" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Service de réparation pour téléphones, ordinateurs et Mac</h3>
                <p>
                    J'ai développé une expertise complète dans la réparation de smartphones, tablettes et ordinateurs portables, offrant des solutions rapides et fiables pour tous types de problèmes techniques. Mon service couvre un large éventail d'interventions : remplacement d'écrans cassés, changement de batteries défectueuses, réparation de connecteurs de charge, et bien plus encore.
                </p>
                <p>
                    Le processus commence toujours par un diagnostic complet et gratuit. J’examine attentivement votre appareil, teste ses composants et repère les problèmes matériels ou logiciels.
                </p>
                <div class="tech-badges">
                    <span class="badge">Diagnostic</span>
                    <span class="badge">Écrans</span>
                    <span class="badge">Réparation</span>
                </div>
            </div>
        </div>

        <div class="project-item project-reverse reveal">
            <div class="project-image">
                <img src="{{ asset('images/Service.jpg') }}" alt="Service Client" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Service Client</h3>
                <p>
                    J'ai développé une expertise complète dans l'accompagnement et le conseil technique pour tous vos appareils électroniques. Que vous possédiez un smartphone, une tablette ou un ordinateur portable, je vous offre un service client personnalisé et professionnel pour répondre à tous vos besoins technologiques.
                </p>
                <p>
                    Mon service s'articule autour de trois axes principaux : le diagnostic approfondi de vos appareils, le conseil personnalisé adapté à votre utilisation, et l'accompagnement dans l'achat de nouveaux équipements. Je m'engage à vous fournir des solutions claires et efficaces pour optimiser votre expérience technologique au quotidien.
                </p>
                <div class="tech-badges">
                    <span class="badge">Diagnostic</span>
                    <span class="badge">Conseil</span>
                    <span class="badge">Accompagnement</span>
                    <span class="badge">Vente</span>
                </div>
            </div>
        </div>
    </section>

    <div id="imageModal" class="modal">
        <button class="modal-close" aria-label="Fermer">&times;</button>
        <button class="modal-prev" aria-label="Image précédente">‹</button>
        <button class="modal-next" aria-label="Image suivante">›</button>
        <img class="modal-content" id="modalImage" src="" alt="">
    </div>
@endsection

@section('extra-js')
    <script>
        // ======= 1. LOGIQUE D'ANIMATION AU DÉFILEMENT (SCROLL REVEAL) =======
        document.addEventListener("DOMContentLoaded", function() {
            const reveals = document.querySelectorAll('.reveal');

            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, revealOptions);

            reveals.forEach(reveal => {
                revealOnScroll.observe(reveal);
            });
        });

        // ======= 2. LOGIQUE DE LA MODALE POUR LES IMAGES =======
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const closeBtn = document.querySelector('.modal-close');
        const prevBtn = document.querySelector('.modal-prev');
        const nextBtn = document.querySelector('.modal-next');

        // On sélectionne toutes les images avec la classe zoomable
        const images = document.querySelectorAll('.zoomable');
        let currentIndex = 0;

        images.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                modalImg.src = img.src;
                modalImg.alt = img.alt;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            modalImg.src = images[currentIndex].src;
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            modalImg.src = images[currentIndex].src;
        }

        closeBtn.addEventListener('click', closeModal);
        prevBtn.addEventListener('click', showPrevImage);
        nextBtn.addEventListener('click', showNextImage);

        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (!modal.classList.contains('active')) return;
            if (e.key === 'Escape') closeModal();
            if (e.key === 'ArrowLeft') showPrevImage();
            if (e.key === 'ArrowRight') showNextImage();
        });
    </script>
@endsection
