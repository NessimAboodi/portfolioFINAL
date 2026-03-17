@extends('layouts.app')

@section('title', 'Contact - Portfolio | BTS SIO SLAM')

@section('content')
    <section class="page-header">
        <h1>Me contacter</h1>
        <p class="muted" style="max-width: 600px; margin: 0.5rem auto 2rem;">
            N'hésitez pas à me contacter pour toute demande d'information ou proposition de collaboration.
        </p>
    </section>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; max-width: 900px; margin: 0 auto;">

        <a href="mailto:nessim.aboodi@gmail.com" class="card" style="text-align: center; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: transform 0.2s;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1rem;">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <h3 style="color: var(--muted); font-size: 1.1rem; margin-bottom: 0.5rem; font-weight: normal;">Email</h3>
            <p style="color: var(--accent); font-size: 1.1rem; margin: 0; font-weight: bold;">nessim.aboodi@gmail.com</p>
        </a>

        <a href="tel:+33656689921" class="card" style="text-align: center; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: transform 0.2s;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1rem;">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <h3 style="color: var(--muted); font-size: 1.1rem; margin-bottom: 0.5rem; font-weight: normal;">Téléphone</h3>
            <p style="color: var(--accent); font-size: 1.1rem; margin: 0; font-weight: bold;">06 56 68 99 21</p>
        </a>

        <a href="https://www.linkedin.com/in/nessim-aboodi-48a9aa38a/" target="_blank" class="card" style="text-align: center; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: transform 0.2s;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1rem;">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                <rect x="2" y="9" width="4" height="12"></rect>
                <circle cx="4" cy="4" r="2"></circle>
            </svg>
            <h3 style="color: var(--muted); font-size: 1.1rem; margin-bottom: 0.5rem; font-weight: normal;">LinkedIn</h3>
            <p style="color: var(--accent); font-size: 1.1rem; margin: 0; font-weight: bold;">Voir mon profil</p>
        </a>

        <a href="https://github.com/NessimAboodi" target="_blank" class="card" style="text-align: center; text-decoration: none; display: flex; flex-direction: column; align-items: center; transition: transform 0.2s;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1rem;">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
            </svg>
            <h3 style="color: var(--muted); font-size: 1.1rem; margin-bottom: 0.5rem; font-weight: normal;">GitHub</h3>
            <p style="color: var(--accent); font-size: 1.1rem; margin: 0; font-weight: bold;">github.com/NessimAboodi</p>
        </a>

    </div>
@endsection
