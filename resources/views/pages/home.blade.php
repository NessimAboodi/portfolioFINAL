@extends('layouts.app')

@section('title', 'Accueil - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        .hero { text-align: center; padding: 4rem 0; margin-bottom: 3rem; }
        .hero h1 { font-size: clamp(2.5rem, 5vw, 4rem); margin: 0 0 1rem; background: linear-gradient(135deg, var(--accent), #7c3aed); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 700; }
        .hero-subtitle { font-size: clamp(1rem, 2vw, 1.3rem); color: var(--muted); max-width: 700px; margin: 0 auto 2rem; line-height: 1.8; }
        .hero .cta { margin-top: 1rem; }
        .about-section { margin-bottom: 3rem; scroll-margin-top: 2rem; }
        .about-content { background: var(--card); padding: 2rem; border-radius: var(--radius); box-shadow: 0 6px 18px rgba(2, 6, 23, 0.6); max-width: 900px; margin: 0 auto; }
        .about-content p { margin-bottom: 1.2rem; color: #d1dae3; line-height: 1.7; }
        .about-content p:last-child { margin-bottom: 0; }
        .competences-section { margin-bottom: 3rem; }
        .section-intro { text-align: center; color: var(--muted); max-width: 800px; margin: 0 auto 2.5rem; font-size: 1.05rem; }
        .competences-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem; margin-top: 2rem; }
        .competence-card { background: var(--card); padding: 2rem; border-radius: var(--radius); box-shadow: 0 6px 18px rgba(2, 6, 23, 0.6); border: 1px solid rgba(255, 255, 255, 0.05); transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
        .competence-card:hover { transform: translateY(-5px); box-shadow: 0 12px 28px rgba(6, 182, 212, 0.2); border-color: rgba(6, 182, 212, 0.3); }
        .competence-card h3 { color: var(--accent); margin: 0 0 1rem; font-size: 1.3rem; font-weight: 600; }
        .competence-card p { color: var(--muted); line-height: 1.7; margin: 0; }
        .section-title { text-align: center; font-size: clamp(2rem, 4vw, 2.8rem); margin: 0 0 1rem; font-weight: 700; }
        @media (max-width: 760px) { .competences-grid { grid-template-columns: 1fr; } .hero { padding: 2.5rem 0; } }
    </style>
@endsection

@section('content')
    <section class="hero">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p class="hero-subtitle">Étudiant en BTS SIO Option SLAM passionné et créatif, spécialisé dans le développement d'applications et de solutions numériques innovantes. Découvrez mon parcours, mes compétences et mes réalisations.</p>
        <a href="#about-section" class="cta"><span>En savoir plus</span><span aria-hidden="true">↓</span></a>
    </section>

    <section id="about-section" class="about-section">
        <h2 class="section-title">À propos de moi</h2>
        <div class="about-content">
            <p>Passionné par le développement web et les nouvelles technologies, je suis un professionnel polyvalent avec une solide expérience dans la conception et la réalisation de projets numériques innovants.</p>
            <p>Actuellement étudiant de 2ème année en BTS SIO option SLAM, j'ai développé une expertise approfondie dans plusieurs langages de programmation et frameworks modernes. Mon approche combine technique et créativité pour créer des solutions qui répondent aux besoins réels des utilisateurs.</p>
            <p>Toujours en quête d'amélioration continue, je m'investis dans la veille technologique et la formation pour rester à la pointe des dernières innovations du secteur. Mon objectif est de contribuer à des projets qui ont un impact positif et durable.</p>
        </div>
    </section>

    <section class="competences-section">
        <h2 class="section-title">Compétences BTS SIO B1</h2>
        <p class="section-intro">Retrouvez ici les compétences clés du bloc B1 du BTS SIO option SLAM, axées sur le développement d'applications et la programmation.</p>

        <div class="competences-grid">
            <div class="competence-card">
                <h3>Développer des composants</h3>
                <p>Conception et programmation d'algorithmes, développement de composants logiciels réutilisables avec des langages orientés objet.</p>
            </div>
            <div class="competence-card">
                <h3>Gérer des données</h3>
                <p>Conception de bases de données relationnelles (SQL), manipulation de données (requêtes complexes, procédures stockées, optimisation).</p>
            </div>
            <div class="competence-card">
                <h3>Développer des interfaces</h3>
                <p>Création d'interfaces utilisateur ergonomiques et responsive avec HTML, CSS, JavaScript et frameworks modernes.</p>
            </div>
            <div class="competence-card">
                <h3>Intégrer des services web</h3>
                <p>Conception et consommation d'API REST/SOAP, intégration de services tiers, gestion de l'authentification et des échanges de données.</p>
            </div>
            <div class="competence-card">
                <h3>Assurer la qualité du code</h3>
                <p>Tests unitaires et d'intégration, utilisation d'outils de versionning (Git), mise en place de bonnes pratiques de développement et documentation.</p>
            </div>
            <div class="competence-card">
                <h3>Déployer des applications</h3>
                <p>Configuration d'environnements de développement et production, déploiement d'applications web, gestion des dépendances et mise en production.</p>
            </div>
        </div>
    </section>
@endsection
