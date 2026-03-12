@extends('layouts.app')

@section('title', 'Veille - Portfolio | BTS SIO SLAM')

@section('extra-css')
    <style>
        .veille-grid { display: grid; gap: 1.5rem; margin-top: 2rem; }
        .veille-card { background: var(--card); padding: 1.8rem; border-radius: var(--radius); box-shadow: 0 6px 18px rgba(2, 6, 23, 0.6); border-left: 4px solid var(--accent); transition: transform 0.3s ease; }
        .veille-card:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(6, 182, 212, 0.3); }
        .veille-card h2 { color: var(--accent); font-size: 1.5rem; margin-bottom: 1rem; }
        .veille-card h3 { color: #e6eef6; font-size: 1.1rem; margin-top: 1.5rem; margin-bottom: 0.8rem; font-weight: 600; }
        .source-link { display: inline-flex; padding: 0.6rem 1.2rem; background: linear-gradient(135deg, var(--accent), #7c3aed); color: white; border-radius: 8px; font-weight: 600; text-decoration: none; margin-top: 1rem; }
        .tag { display: inline-block; padding: 0.3rem 0.8rem; background: rgba(6, 182, 212, 0.15); color: var(--accent); border-radius: 20px; font-size: 0.85rem; margin-right: 0.5rem; margin-bottom: 0.5rem; }
    </style>
@endsection

@section('content')
    <section class="page-header">
        <h1>Veille technologique</h1>
        <p class="muted" style="max-width: 700px; margin: 0 auto;">Suivi des tendances et innovations en cybersécurité, intelligence artificielle et développement.</p>
    </section>

    <div class="veille-grid">
        <article class="veille-card">
            <h2>L'IA au service des cyberattaques : nouvelles menaces 2025</h2>
            <div class="tags-container"><span class="tag">Intelligence Artificielle</span><span class="tag">Cybersécurité</span></div>
            <h3>Synthèse de la tendance</h3>
            <p>Les cybercriminels exploitent désormais l'intelligence artificielle pour sophistiquer leurs attaques...</p>
            <a href="https://www.itforbusiness.fr/cybersecurite-en-2025-ia-au-coeur-des-menaces-bots-emergentes-88039" class="source-link" target="_blank">Consulter la source →</a>
        </article>

        <article class="veille-card">
            <h2>Architecture Zero Trust : le nouveau paradigme de sécurité</h2>
            <div class="tags-container"><span class="tag">Architecture</span><span class="tag">Zero Trust</span></div>
            <h3>Synthèse de la tendance</h3>
            <p>Le modèle Zero Trust remplace l'approche traditionnelle de sécurité périmétrique...</p>
            <a href="https://www.csb.school/tendances-cybersecurite-2025-innovations-defis-et-opportunites/" class="source-link" target="_blank">Consulter la source →</a>
        </article>
    </div>
@endsection
