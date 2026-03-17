@extends('layouts.app')

@section('title', 'Compétences - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        .page-header { text-align: center; padding: 2rem 0; margin-bottom: 2rem; }
        .page-header h1 { font-size: clamp(1.8rem, 4vw, 2.8rem); margin: 0 0 1.5rem; color: #e6eef6; }
        .intro { color: var(--muted); line-height: 1.6; margin-bottom: 2rem; text-align: center; font-size: 1.05em; max-width: 800px; margin-left: auto; margin-right: auto; }

        /* Grille de rappel des blocs de compétences */
        .competences-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 3rem; }
        .competence-card { background: white; padding: 1rem; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 60px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .competence-card-title { color: #1a202c; font-size: 0.85rem; font-weight: 600; text-align: center; }

        /* Styles du Tableau de Synthèse */
        .table-section { margin: 3rem 0; }
        .table-container {
            overflow-x: auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border: 1px solid #e2e8f0;
        }
        .competence-table { width: 100%; border-collapse: collapse; min-width: 800px; }
        .competence-table th {
            background-color: #f8fafc;
            color: #475569;
            font-weight: 700;
            padding: 1.25rem 1rem;
            text-align: center;
            border-bottom: 2px solid #e2e8f0;
            font-size: 0.85rem;
        }
        .competence-table th.activity-col { text-align: left; width: 35%; }
        .competence-table td { padding: 1rem; border-bottom: 1px solid #f1f5f9; text-align: center; color: #1e293b; font-size: 0.9rem; }
        .competence-table td:first-child { text-align: left; font-weight: 500; color: #0f172a; }

        /* Styles des catégories */
        .category-row { background-color: #f1f5f9 !important; }
        .category-row td { font-weight: 700 !important; color: var(--accent) !important; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; padding: 0.75rem 1rem; }

        /* Indicateur de compétence validée (X) */
        .check-mark {
            color: #10b981;
            font-weight: 900;
            font-size: 1.2rem;
            display: inline-block;
            background: #ecfdf5;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 50%;
        }

        .btn-back { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.75rem 1.5rem; background: var(--accent); color: #052029; border-radius: 8px; text-decoration: none; font-weight: 600; margin-bottom: 2rem; }

        @media (max-width: 1024px) { .competences-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 640px) { .competences-grid { grid-template-columns: 1fr; } }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <h1>Tableau de Synthèse</h1>
        <p class="intro">
            Retrouvez ici l'ensemble des compétences mobilisées durant mes formations et mes expériences en milieu professionnel. Ce tableau récapitule mes acquis selon le référentiel du BTS SIO.
        </p>

        <div class="competences-grid">
            <div class="competence-card"><div class="competence-card-title">B1.1 – Gérer le patrimoine informatique</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.2 – Répondre aux incidents</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.3 – Présence en ligne</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.4 – Travail en mode projet</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.5 – Service informatique</div></div>
            <div class="competence-card"><div class="competence-card-title">B1.6 – Développement professionnel</div></div>
        </div>
    </div>

    <div class="table-section">
        <div class="table-container">
            <table class="competence-table">
                <thead>
                <tr>
                    <th class="activity-col">Réalisations professionnelles</th>
                    <th>B1.1</th>
                    <th>B1.2</th>
                    <th>B1.3</th>
                    <th>B1.4</th>
                    <th>B1.5</th>
                    <th>B1.6</th>
                </tr>
                </thead>
                <tbody>
                <tr class="category-row">
                    <td colspan="7">Réalisation en cours de formation</td>
                </tr>
                <tr>
                    <td>LinkedIn</td>
                    <td></td><td></td><td></td><td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                </tr>
                <tr>
                    <td>Project Site Vitamines</td>
                    <td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>GitHub</td>
                    <td></td><td></td><td></td><td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                </tr>
                <tr>
                    <td>GLPI</td>
                    <td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>PROJECT CineFORALL</td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                </tr>
                <tr>
                    <td>Project JAVAFX</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>TP21 - Mini Projet Mise en place d'un système informations des VMS</td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td>
                </tr>

                <tr class="category-row">
                    <td colspan="7">Réalisations en milieu professionnel en cours de première année</td>
                </tr>
                <tr>
                    <td>Développement De Site Web - Espace Mobile</td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Page De Contact avec Base de Données</td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Service Réparation & Diagnostic</td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Amélioration du Site Espace Mobile</td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td>
                </tr>

                <tr class="category-row">
                    <td colspan="7">Réalisations en milieu professionnel en cours de seconde année</td>
                </tr>
                <tr>
                    <td>Conception et développement de l'application web de réservation (Laravel)</td>
                    <td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td>
                    <td><span class="check-mark">✓</span></td>
                </tr>
                <tr>
                    <td>Développement du Back-Office et gestion dynamique de la carte</td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>Modélisation et gestion de la base de données (MySQL)</td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Déploiement en production et gestion de l'hébergement (IONOS)</td>
                    <td></td><td></td>
                    <td><span class="check-mark">✓</span></td>
                    <td><span class="check-mark">✓</span></td>
                    <td></td><td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="text-align: center; margin-top: 3rem;">
        <a href="{{ url('/experiences/stages') }}" class="btn-back">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
            Voir les détails des stages
        </a>
    </div>
@endsection
