@extends('layouts.app')

@section('title', 'Accueil - Portfolio | BTS SIO SLAM')

@section('content')
    <section style="display: flex; align-items: center; justify-content: space-between; gap: 2rem; margin-bottom: 5rem; flex-wrap: wrap; padding-top: 2rem;">
        <div style="flex: 1; min-width: 300px;">
            <h1 style="font-size: clamp(2rem, 5vw, 3.5rem); margin-bottom: 0.5rem; text-align: left;">
                Bonjour, je suis <span style="color: var(--accent);">NESSIM ABOODI</span>
            </h1>
            <h2 style="font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1.5rem; color: #e6eef6; font-weight: 500;">
                Développeur Web & Mobile
            </h2>
            <p class="muted" style="max-width: 600px; margin-bottom: 2.5rem; font-size: 1.15rem; line-height: 1.6;">
                Étudiant passionné par le développement, j'apprends à concevoir des solutions numériques innovantes. Bienvenue sur mon portfolio !
            </p>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="/projets" class="cta">Voir mes Projets</a>
                <a href="/contact" class="cta" style="background: transparent; border: 1px solid var(--accent); color: var(--accent);">
                    Me Contacter
                </a>
            </div>
        </div>

        <div style="flex-shrink: 0; text-align: center;">
            <div style="width: 280px; height: 280px; border-radius: 50%; border: 4px solid var(--accent); overflow: hidden; box-shadow: 0 0 30px rgba(6, 182, 212, 0.2);">
                <img src="/Images/votre-photo.jpg" alt="Nessim Aboodi" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </section>

    <section style="margin-bottom: 5rem;">
        <h2 style="text-align: center; margin-bottom: 4rem; font-size: 2.2rem; font-weight: 700;">
            <span style="border-bottom: 3px solid var(--accent); padding-bottom: 10px;">Mon Parcours</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 4rem; max-width: var(--maxw); margin: 0 auto;">

            <div style="position: relative; border-left: 2px solid rgba(255,255,255,0.1); padding-left: 20px;">
                <h3 style="color: var(--accent); margin-bottom: 2.5rem; display: flex; align-items: center; gap: 0.8rem; font-size: 1.5rem; margin-left: -35px;">
                    <span style="background: var(--bg); padding: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        </svg>
                    </span>
                    Formation
                </h3>

                <div class="card" style="margin-bottom: 2.5rem; position: relative;">
                    <div style="position: absolute; left: -31px; top: 20px; width: 20px; height: 20px; border-radius: 50%; background: var(--accent); box-shadow: 0 0 10px var(--accent);"></div>
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <img src="/Images/ort.png" alt="ORT Lyon" style="width: 55px; height: 55px; object-fit: contain; background: white; border-radius: 8px; padding: 3px;">
                        <div>
                            <h4 style="margin: 0; font-size: 1.2rem; color: #fff;">BTS SIO option SLAM</h4>
                            <p style="color: var(--accent); font-weight: 600; margin: 0.2rem 0;">ORT Lyon</p>
                            <p class="muted" style="font-size: 0.9rem; margin-bottom: 0.5rem;">2023 - 2025</p>
                            <p style="font-size: 0.95rem; line-height: 1.5;">Spécialisation en Solutions Logicielles et Applications Métiers.</p>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-bottom: 2.5rem; position: relative;">
                    <div style="position: absolute; left: -31px; top: 20px; width: 20px; height: 20px; border-radius: 50%; background: var(--muted);"></div>
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <img src="/Images/lamache.png" alt="Lycée La Mache" style="width: 55px; height: 55px; object-fit: contain; background: white; border-radius: 8px; padding: 3px;">
                        <div>
                            <h4 style="margin: 0; font-size: 1.2rem; color: #fff;">Bac Pro SN (Systèmes Numériques)</h4>
                            <p style="color: var(--muted); font-weight: 600; margin: 0.2rem 0;">Lycée La Mache</p>
                            <p class="muted" style="font-size: 0.9rem; margin-bottom: 0.5rem;">Option RISC (Réseaux Informatiques)</p>
                            <p style="font-size: 0.95rem; line-height: 1.5;">Apprentissage des infrastructures réseaux et systèmes communicants.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="position: relative; border-left: 2px solid rgba(255,255,255,0.1); padding-left: 20px;">
                <h3 style="color: var(--accent); margin-bottom: 2.5rem; display: flex; align-items: center; gap: 0.8rem; font-size: 1.5rem; margin-left: -35px;">
                    <span style="background: var(--bg); padding: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        </svg>
                    </span>
                    Expérience Professionnelle
                </h3>

                <div class="card" style="margin-bottom: 2.5rem; position: relative;">
                    <div style="position: absolute; left: -31px; top: 20px; width: 20px; height: 20px; border-radius: 50%; background: var(--accent); box-shadow: 0 0 10px var(--accent);"></div>
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <img src="/Images/cafecremelogo.PNG" alt="Stage" style="width: 55px; height: 55px; object-fit: contain; background: white; border-radius: 8px;">
                        <div>
                            <h4 style="margin: 0; font-size: 1.2rem; color: #fff;">Stage Développeur Web</h4>
                            <p style="color: var(--accent); font-weight: 600; margin: 0.2rem 0;">Café Crème</p>
                            <p class="muted" style="font-size: 0.9rem;">Janvier - Février 2025-2026</p>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-bottom: 2.5rem; position: relative;">
                    <div style="position: absolute; left: -31px; top: 20px; width: 20px; height: 20px; border-radius: 50%; background: var(--muted);"></div>
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <img src="/Images/company-logo.png" alt="Stage" style="width: 55px; height: 55px; object-fit: contain; background: white; border-radius: 8px;">
                        <div>
                            <h4 style="margin: 0; font-size: 1.2rem; color: #fff;">Stage Informatique</h4>
                            <p style="color: var(--muted); font-weight: 600; margin: 0.2rem 0;">Espace Mobile</p>
                            <p class="muted" style="font-size: 0.9rem;">Mai - Juin 2025</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
