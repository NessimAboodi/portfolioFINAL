@extends('layouts.app')

@section('title', 'Stages - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        .stage-header { text-align: center; margin-bottom: 2rem; }
        .stage-dates { display: inline-block; background: linear-gradient(135deg, rgba(6, 182, 212, 0.15), rgba(124, 58, 237, 0.15)); color: var(--accent); padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 600; margin-top: 1rem; border: 1px solid rgba(6, 182, 212, 0.3); }
        .intro-grid { display: grid; grid-template-columns: 1.3fr 1fr; gap: 2rem; align-items: center; margin-bottom: 1.5rem; }
        .company-logo { background: linear-gradient(135deg, rgba(6, 182, 212, 0.05), rgba(124, 58, 237, 0.05)); border-radius: 12px; padding: 2rem; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(6, 182, 212, 0.2); height: 300px; }
        .company-logo img { width: 100%; height: 100%; object-fit: contain; }
        .tools-box { background: linear-gradient(135deg, rgba(6, 182, 212, 0.08), rgba(124, 58, 237, 0.05)); padding: 1.5rem; border-radius: var(--radius); border-left: 4px solid var(--accent); margin: 1.5rem 0; }
        .project-item { display: grid; grid-template-columns: 1.4fr 1fr; gap: 2.5rem; align-items: center; margin-bottom: 3rem; padding: 2rem; background: linear-gradient(135deg, rgba(6, 182, 212, 0.03), rgba(124, 58, 237, 0.02)); border-radius: var(--radius); border: 1px solid rgba(255, 255, 255, 0.05); }
        .project-reverse { grid-template-columns: 1fr 1.4fr; }
        .project-reverse .project-image { order: 2; } .project-reverse .project-text { order: 1; }
        .project-image { border-radius: 12px; height: 350px; overflow: hidden; }
        .project-image img { width: 100%; height: 100%; object-fit: cover; }
        .tech-badges { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.2rem; }
        .badge { padding: 0.4rem 0.9rem; background: linear-gradient(135deg, rgba(6, 182, 212, 0.12), rgba(124, 58, 237, 0.08)); border: 1px solid rgba(6, 182, 212, 0.3); border-radius: 20px; font-size: 0.85rem; color: var(--accent); }
        @media (max-width: 760px) { .intro-grid, .project-item, .project-reverse { grid-template-columns: 1fr; } .project-reverse .project-image { order: unset; } .project-reverse .project-text { order: unset; } }
    </style>
@endsection

@section('content')
    <section class="page-header">
        <h1>Mes Stages</h1>
        <p style="text-align: center; color: var(--muted); max-width: 800px; margin: 0 auto 2.5rem; font-size: 1.05rem; line-height: 1.7;">Découvrez mes expériences de stage durant ma formation en BTS SIO SLAM.</p>
    </section>

    <article class="card">
        <div class="stage-header">
            <h2>Mon 1er Stage</h2>
            <div class="stage-dates">26/05/2025 au 4/07/2025</div>
        </div>

        <div class="intro-grid">
            <div class="intro-text">
                <p>J'ai réalisé mon premier stage à <strong>Espace Mobile</strong> situé à <strong>Lyon</strong>...</p>
                <div class="tech-badges">
                    <span class="badge">HTML5</span><span class="badge">CSS3</span><span class="badge">JavaScript</span><span class="badge">PHP</span>
                </div>
            </div>
            <div class="company-logo">
                <img src="{{ asset('images/company-logo.png') }}" alt="Logo Espace Mobile">
            </div>
        </div>
        <div class="tools-box"><strong>Outils utilisés :</strong> Brave et PHPStorm.</div>
    </article>

    <article class="card">
        <h2 style="text-align: center; margin-bottom: 2rem; font-size: 2rem;">Projets Réalisés</h2>

        <div class="project-item">
            <div class="project-image"><img src="{{ asset('images/site1.PNG') }}" alt="Développement De Site"></div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Développement De Site</h3>
                <p>J'ai conçu et développé ce site entièrement en HTML et CSS...</p>
                <div class="tech-badges"><span class="badge">HTML</span><span class="badge">Css</span><span class="badge">PHP</span><span class="badge">SQL</span></div>
            </div>
        </div>

        <div class="project-item project-reverse">
            <div class="project-image"><img src="{{ asset('images/Contact.png') }}" alt="Page De Contact"></div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Page De Contact avec Base de Données</h3>
                <p>J'ai développé une page de contact complète en intégrant une base de données SQL via WAMP Server...</p>
                <div class="tech-badges"><span class="badge">SQL</span><span class="badge">WAMP</span><span class="badge">MySQL</span><span class="badge">PHP</span></div>
            </div>
        </div>

        <div class="project-item">
            <div class="project-image"><img src="{{ asset('images/Phone.jpg') }}" alt="Réparation"></div>
            <div class="project-text">
                <h3 style="color: var(--accent); margin-bottom: 1rem;">Service de réparation pour téléphones, ordinateurs et Mac</h3>
                <p>J'ai développé une expertise complète dans la réparation de smartphones...</p>
                <div class="tech-badges"><span class="badge">Diagnostic</span><span class="badge">Écrans</span><span class="badge">Réparation</span></div>
            </div>
        </div>
    </article>
@endsection
