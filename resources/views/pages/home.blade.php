@extends('layouts.app')

@section('title', 'Accueil - Portfolio | BTS SIO SLAM')

@section('content')
    <section class="page-header" style="margin-bottom: 5rem; text-align: center;">
        <h1 style="font-size: clamp(2rem, 5vw, 3.5rem); margin-bottom: 0.5rem;">
            Bonjour, je suis <span style="color: var(--accent);">NESSIM ABOODI</span>
        </h1>
        <h2 style="font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1.5rem; color: #e6eef6; font-weight: 500;">
            Développeur Web & Mobile
        </h2>
        <p class="muted" style="max-width: 700px; margin: 0 auto 2.5rem; font-size: 1.15rem; line-height: 1.6;">
            Bienvenue sur mon portfolio ! Je suis passionné par la création d'applications web et l'apprentissage de nouvelles technologies. Découvrez ici mes projets, mes compétences et mon parcours.
        </p>

        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="/projets" class="cta">Voir mes Projets</a>
            <a href="/contact" class="cta" style="background: transparent; border: 1px solid var(--accent); color: var(--accent);">
                Me Contacter
            </a>
        </div>
    </section>



    <section style="margin-bottom: 3rem;">
        <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2rem;">Mon Parcours</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; max-width: 1000px; margin: 0 auto;">

            <div>
                <h3 style="color: var(--accent); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.6rem; font-size: 1.3rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                    Formation
                </h3>

                <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--accent); transition: transform 0.2s;">
                    <h4 style="margin: 0 0 0.3rem 0; font-size: 1.2rem;">BTS SIO option SLAM</h4>
                    <p class="muted" style="margin: 0 0 1rem 0;">Lycée [Nom de votre lycée] | 2022 - 2024</p>
                    <p style="font-size: 0.95rem; margin: 0; color: #e6eef6;">
                        Solutions Logicielles et Applications Métiers. Apprentissage du développement web, de la conception de bases de données et de la programmation orientée objet.
                    </p>
                </div>

                <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--muted); transition: transform 0.2s;">
                    <h4 style="margin: 0 0 0.3rem 0; font-size: 1.2rem;">Baccalauréat [Série/Spécialités]</h4>
                    <p class="muted" style="margin: 0 0 1rem 0;">Lycée [Nom de votre lycée] | [Année]</p>
                    <p style="font-size: 0.95rem; margin: 0; color: #e6eef6;">
                        Obtention du baccalauréat. Mention : [Votre mention si vous en avez une].
                    </p>
                </div>
            </div>

            <div>
                <h3 style="color: var(--accent); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.6rem; font-size: 1.3rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                    Expériences Professionnelles
                </h3>

                <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--accent); transition: transform 0.2s;">
                    <h4 style="margin: 0 0 0.3rem 0; font-size: 1.2rem;">Stage Développeur Web (2ème année)</h4>
                    <p class="muted" style="margin: 0 0 1rem 0;">[Nom de l'entreprise] | Janvier - Février 2024</p>
                    <p style="font-size: 0.95rem; margin: 0; color: #e6eef6;">
                        Développement de fonctionnalités sur mesure. Utilisation de technologies comme PHP, Laravel, HTML/CSS et JavaScript. Création et gestion de base de données.
                    </p>
                </div>

                <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--muted); transition: transform 0.2s;">
                    <h4 style="margin: 0 0 0.3rem 0; font-size: 1.2rem;">Stage Informatique (1ère année)</h4>
                    <p class="muted" style="margin: 0 0 1rem 0;">[Nom de l'entreprise] | Mai - Juin 2023</p>
                    <p style="font-size: 0.95rem; margin: 0; color: #e6eef6;">
                        Découverte du milieu professionnel. Participation à la maintenance du parc informatique et création de maquettes pour le site web de l'entreprise.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection
