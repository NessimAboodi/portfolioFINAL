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
        }
        .intro-grid { display: grid; grid-template-columns: 1.3fr 1fr; gap: 2rem; align-items: center; margin-bottom: 1.5rem; }
        .tools-box {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.08), rgba(124, 58, 237, 0.05));
            padding: 1.5rem;
            border-radius: var(--radius);
            border-left: 4px solid var(--accent);
            margin: 1.5rem 0;
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
        }
        .project-reverse { grid-template-columns: 1fr 1.4fr; }
        .project-image img { border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.3); cursor: pointer; }
        .tech-badges { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.2rem; }
        .badge {
            padding: 0.4rem 0.9rem;
            background: rgba(6, 182, 212, 0.1);
            border: 1px solid var(--accent);
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--accent);
        }
        @media (max-width: 760px) {
            .intro-grid, .project-item, .project-reverse { grid-template-columns: 1fr; }
            .project-reverse .project-text { order: 1; }
            .project-reverse .project-image { order: 2; }
        }
    </style>
@endsection

@section('content')
    <section class="page-header">
        <h1>Stage n°2 : Café Crème</h1>
        <p class="muted">Développement d'une application métier sous Laravel 10</p>
    </section>

    <article class="card">
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
                    <a href="https://cafécrème-lyon.fr" target="_blank"><strong>cafécrème-lyon.fr</strong></a>
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
                <img src="{{ asset('images/image_72259d.png') }}" alt="Interface IONOS - Domaine et PHP 8.4">
            </div>
        </div>

        <div class="tools-box">
            <strong>Environnement technique :</strong> Visual Studio Code pour le développement, WAMP pour les tests locaux, et <strong>IONOS</strong> pour l'hébergement définitif. La communication et le suivi de projet ont été assurés via WhatsApp pour une gestion agile.
        </div>
    </article>

    <section>
        <h2 style="text-align: center; margin: 3rem 0 2rem;">Réalisations majeures</h2>

        <div class="project-item">
            <div class="project-image">
                <img src="{{ asset('images/image_72257e.png') }}" alt="Base de données MySQL">
            </div>
            <div class="project-text">
                <h3>Système de réservation automatisé</h3>
                <p>
                    Implémentation d'une logique métier stricte : calcul dynamique de la capacité (max 20 personnes par créneau) et blocage automatique des réservations après 9h15 pour le jour même.
                </p>
                <p>
                    Gestion des données via une base <strong>MySQL 8.0</strong> hébergée, assurant la persistance des réservations et des stocks.
                </p>
            </div>
        </div>

        <div class="project-item project-reverse">
            <div class="project-image">
                <img src="{{ asset('images/image_72923a.png') }}" alt="Transfert FileZilla">
            </div>
            <div class="project-text">
                <h3>Mise en production sécurisée</h3>
                <p>
                    Déploiement de l'application sur serveur distant via le protocole sécurisé <strong>SFTP</strong> avec le client FileZilla.
                </p>
                <p>
                    Configuration de l'arborescence Laravel sur le serveur (dossiers app, public, routes) et sécurisation des fichiers de configuration environnementaux.
                </p>
            </div>
        </div>

        <div class="project-item">
            <div class="project-image">
                <img src="{{ asset('images/image_7225a0.png') }}" alt="Arborescence Serveur">
            </div>
            <div class="project-text">
                <h3>Administration et Architecture MVC</h3>
                <p>
                    Développement d'un back-office permettant au gérant de modifier la carte en temps réel et de consulter les statistiques de fréquentation.
                </p>
                <p>
                    Respect rigoureux du design pattern <strong>MVC</strong> (Modèle-Vue-Contrôleur) pour garantir la maintenabilité et l'évolution future du code source.
                </p>
            </div>
        </div>
    </section>

    <article class="card">
        <h3>Compétences BTS SIO validées</h3>
        <ul style="color: var(--muted); line-height: 1.8;">
            <li><strong>B1.2</strong> : Conception et développement d'une solution applicative (Laravel).</li>
            <li><strong>B1.3</strong> : Gestion des données (MySQL / phpMyAdmin).</li>
            <li><strong>B2.1</strong> : Installation et configuration d'éléments d'infrastructure (Déploiement IONOS).</li>
            <li><strong>B3.3</strong> : Accompagnement des utilisateurs (Intégration de l'IA Moka).</li>
        </ul>
    </article>
@endsection
