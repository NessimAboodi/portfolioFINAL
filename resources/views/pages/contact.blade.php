@extends('layouts.app')

@section('title', 'Contact - Portfolio | BTS SIO SLAM')

@section('content')
    <section class="page-header">
        <h1>Me contacter</h1>
    </section>

    <section class="card" style="max-width: 600px; margin: 0 auto;">
        <form id="contactForm" method="POST" action="/contact" novalidate>
            @csrf
            <label for="name">Nom</label>
            <input id="name" name="name" type="text" required placeholder="Votre nom" />

            <label for="email">Email</label>
            <input id="email" name="email" type="email" required placeholder="votre.email@example.com" />

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required placeholder="Votre message..."></textarea>

            <div style="display:flex;gap:.5rem;margin-top:.6rem">
                <button type="submit" class="cta">Envoyer</button>
                <button type="reset" style="background:transparent;border:1px solid rgba(255,255,255,0.06);padding:.5rem;border-radius:8px;color:inherit">Réinitialiser</button>
            </div>
        </form>
    </section>
@endsection
