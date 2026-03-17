@extends('layouts.app')

@section('title', 'Mes Projets - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        .page-header { text-align: center; padding: 2rem 0; margin-bottom: 2rem; }
        .page-header h1 { font-size: clamp(1.8rem, 4vw, 2.8rem); margin: 0 0 1.5rem; color: #e6eef6; }
        .intro { color: var(--muted); line-height: 1.6; margin-bottom: 2rem; text-align: center; font-size: 1.05em; max-width: 800px; margin-left: auto; margin-right: auto; }

        /* Grille des projets */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
            max-width: 1100px;
            margin: 0 auto 4rem;
        }

        .project-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid #e2e8f0;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 35px rgba(0,0,0,0.1);
        }

        /* Espace pour l'image du projet */
        .project-image {
            width: 100%;
            height: 200px;
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            border-bottom: 1px solid #e2e8f0;
            /* Remplacer par background-image: url(...) quand vous aurez une capture d'écran */
        }

        .project-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .project-title { color: #0f172a; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.75rem; }
        .project-desc { color: #475569; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem; flex-grow: 1; }

        .tech-stack { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1.5rem; }
        .tech-tag { background: #e0f2fe; color: #0284c7; padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.75rem; font-weight: 600; }

        .project-links { margin-top: auto; }
        .btn-github {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.2rem;
            background: #1e293b;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            transition: background-color 0.2s;
            width: 100%;
            justify-content: center;
        }
        .btn-github:hover { background: #0f172a; }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <h1>Mes Projets</h1>
        <p class="intro">
            Découvrez les applications et sites web que j'ai conçus et développés. Chaque projet est une occasion de mettre en pratique mes compétences et d'apprendre de nouvelles technologies.
        </p>
    </div>

    <div class="projects-grid">

        <div class="project-card">
            <div class="project-image">
                <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div class="project-content">
                <h2 class="project-title">CinéForAll</h2>
                <p class="project-desc">
                    Application web complète de gestion de cinéma. Elle inclut un espace client pour la consultation des films et la réservation de billets, ainsi qu'un panel d'administration pour gérer les salles, les programmations et les films.
                </p>
                <div class="tech-stack">
                    <span class="tech-tag">Laravel 11</span>
                    <span class="tech-tag">PHP</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Blade</span>
                </div>
                <div class="project-links">
                    <a href="https://github.com/alexgiur/projet_cineforall" target="_blank" class="btn-github">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        Code source sur GitHub
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
