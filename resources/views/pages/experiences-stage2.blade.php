@extends('layouts.app')

@section('title', 'Stage Café Crème - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        /* Styles spécifiques pour l'affichage des réalisations du stage 2 */
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

        .tools-box {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.08), rgba(124, 58, 237, 0.05));
            padding: 1.5rem;
            border-radius: var(--radius);
            border-left: 4px solid var(--accent);
            margin: 1.5rem 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .tools-box:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(6, 182, 212, 0.1);
        }

        .project-item {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 2.5rem;
            align-items: center;
            margin-bottom: 3rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.02);
            border-radius: var(--radius);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
        }
        .project-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4), 0 0 20px rgba(6, 182, 212, 0.1);
            border-color: rgba(6, 182, 212, 0.3);
        }

        .project-reverse { grid-template-columns: 1fr 1.4fr; }

        /* ======== LA CORRECTION CSS POUR L'IMAGE EST ICI ======== */
        .project-image {
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
            height: 350px; /* Force une hauteur fixe pour toutes les images */
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.2);
        }
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Recadre l'image proprement sans l'écraser */
            transition: transform 0.5s ease;
            display: block;
        }
        .project-image:hover img { transform: scale(1.08); }
        /* ======================================================== */

        .tech-badges { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.2rem; }
        .badge {
            padding: 0.4rem 0.9rem;
            background: rgba(6, 182, 212, 0.1);
            border: 1px solid var(--accent);
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--accent);
            transition: all 0.3s ease;
            cursor: default;
        }
        .badge:hover {
            background: var(--accent);
            color: #052029;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 4px 10px rgba(6, 182, 212, 0.3);
        }

        /* Animations d'apparition (Scroll Reveal) */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Styles de la modale (Pop-up) */
        .modal { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.95); justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease; }
        .modal.active { display: flex; opacity: 1; }
        .modal-content { max-width: 90%; max-height: 90%; object-fit: contain; border-radius: 12px; transform: scale(0.95); transition: transform 0.3s ease; }
        .modal.active .modal-content { transform: scale(1); }
        .modal-close, .modal-prev, .modal-next { position: absolute; background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.2); color: white; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10000; font-size: 2rem; transition: background 0.3s, transform 0.3s; }
        .modal-close:hover, .modal-prev:hover, .modal-next:hover { background: var(--accent); color: #052029; transform: scale(1.1); border-color: var(--accent); }
        .modal-close { top: 20px; right: 20px; }
        .modal-prev { left: 20px; top: 50%; transform: translateY(-50%); }
        .modal-prev:hover { transform: translateY(-50%) scale(1.1); }
        .modal-next { right: 20px; top: 50%; transform: translateY(-50%); }
        .modal-next:hover { transform: translateY(-50%) scale(1.1); }

        @media (max-width: 760px) {
            .intro-grid, .project-item, .project-reverse { grid-template-columns: 1fr; }
            .project-reverse .project-text { order: 1; }
            .project-reverse .project-image { order: 2; }
        }
    </style>
@endsection

@section('content')
    <section class="page-header reveal">
        <h1>Stage n°2 : Café Crème</h1>
        <p class="muted">Développement d'une application métier sous Laravel 10</p>
    </section>

    <article class="card reveal">
        <div class="stage-header">
            <h2>Coffee Shop Artisanal - Lyon 8</h2>
            <div class="stage-dates">05/01/2026 au 13/02/2026 (6 semaines)</div>
        </div>

        <div class="intro-grid">
            <div class="intro-text">
                <p>
                    Au sein de l'entreprise <strong>Café Crème</strong>, j'ai conçu et développé une plateforme web complète permettant d'automatiser la gestion des réservations et d'administrer dynamiquement la carte du restaurant.
                </p>
                <p>
                    Le projet est actuellement en production et accessible en ligne :
                    <a href="https://cafécrème-lyon.fr" target="_blank" style="color: var(--accent); text-decoration: none; border-bottom: 1px dashed var(--accent);"><strong>cafécrème-lyon.fr</strong></a>
                </p>
                <div class="tech-badges">
                    <span class="badge">Laravel 10</span>
                    <span class="badge">PHP 8.4</span>
                    <span class="badge">MySQL</span>
                    <span class="badge">JavaScript</span>
                    <span class="badge">SFTP/SSH</span>
                </div>
            </div>
            <div class="project-image">
                <img src="{{ asset('images/CadreDeTravail.PNG') }}" alt="Café Crème - Cadre de travail" class="zoomable">
            </div>
        </div>

        <div class="tools-box">
            <strong>Environnement technique :</strong> Visual Studio Code pour le développement, WAMP pour les tests locaux, et <strong>IONOS</strong> pour l'hébergement définitif. La communication et le suivi de projet ont été assurés via WhatsApp pour une gestion agile.
        </div>
    </article>

    <section>
        <h2 style="text-align: center; margin: 4rem 0 3rem;" class="reveal">Réalisations majeures</h2>

        <div class="project-item reveal">
            <div class="project-image">
                <img src="{{ asset('images/Reservation.PNG') }}" alt="Système de réservation PHP/MySQL" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Système de réservation automatisé</h3>
                <p>
                    Implémentation d'une logique métier stricte : calcul dynamique de la capacité (max 20 personnes par créneau) et blocage automatique des réservations après 9h15 pour le jour même.
                </p>
                <p>
                    Gestion des données via une base <strong>MySQL 8.0</strong> hébergée, assurant la persistance des réservations et des stocks.
                </p>
            </div>
        </div>

        <div class="project-item project-reverse reveal">
            <div class="project-image">
                <img src="{{ asset('images/Fillzila.png') }}" alt="Transfert FileZilla" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Mise en production sécurisée</h3>
                <p>
                    Déploiement de l'application sur serveur distant via le protocole sécurisé <strong>SFTP</strong> avec le client FileZilla.
                </p>
                <p>
                    Configuration de l'arborescence Laravel sur le serveur (dossiers app, public, routes) et sécurisation des fichiers de configuration environnementaux.
                </p>
            </div>
        </div>

        <div class="project-item reveal">
            <div class="project-image">
                <img src="{{ asset('images/MVC.PNG') }}" alt="Architecture MVC" class="zoomable">
            </div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Administration et Architecture MVC</h3>
                <p>
                    Développement d'un back-office permettant au gérant de modifier la carte en temps réel et de consulter les statistiques de fréquentation.
                </p>
                <p>
                    Respect rigoureux du design pattern <strong>MVC</strong> (Modèle-Vue-Contrôleur) pour garantir la maintenabilité et l'évolution future du code source.
                </p>
            </div>
        </div>
    </section>

    <article class="card reveal" style="margin-top: 2rem;">
        <h3 style="color: var(--accent); margin-bottom: 1.5rem;">Compétences BTS SIO validées</h3>
        <ul style="color: var(--muted); line-height: 1.8; font-size: 1.05rem;">
            <li style="margin-bottom: 0.5rem;"><strong style="color: white;">B1.2</strong> : Conception et développement d'une solution applicative (Laravel).</li>
            <li style="margin-bottom: 0.5rem;"><strong style="color: white;">B1.3</strong> : Gestion des données (MySQL / phpMyAdmin).</li>
            <li style="margin-bottom: 0.5rem;"><strong style="color: white;">B2.1</strong> : Installation et configuration d'éléments d'infrastructure (Déploiement IONOS).</li>
            <li><strong style="color: white;">B3.3</strong> : Accompagnement des utilisateurs (Intégration de l'IA Moka).</li>
        </ul>
    </article>

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
