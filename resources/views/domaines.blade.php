@extends('layouts.app')

@section('title', 'Domaines de Réflexion')

@section('content')
<!-- Page Hero -->
{{-- <section class="page-hero">
</section> --}}

<!-- Domaines Grid -->
<section class="section">
    <div class="container">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Domaines de Réflexion</span>
            </nav>
            <h1 class="page-title">12 Domaines pour Penser le Bénin</h1>
            <p class="page-description">
                Des thématiques structurées qui couvrent l'ensemble des enjeux de notre société.
            </p>
        </div>
    </div>

        <div class="domaines-grid">
            <div class="domaine-card" id="gouvernance">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Gouvernance & Institutions</h3>
                <p class="domaine-description">Comprendre le fonctionnement de l'État, la séparation des pouvoirs, le rôle des institutions.</p>
            </div>

            <div class="domaine-card" id="economie">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Économie & Développement</h3>
                <p class="domaine-description">Analyser les dynamiques économiques, l'emploi, l'entrepreneuriat et les modèles de développement.</p>
            </div>

            <div class="domaine-card" id="education">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Éducation & Jeunesse</h3>
                <p class="domaine-description">Réfléchir à l'école, à la formation, aux parcours des jeunes et aux compétences pour l'avenir.</p>
            </div>

            <div class="domaine-card" id="societe">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Société & Cohésion sociale</h3>
                <p class="domaine-description">Interroger les liens sociaux, le vivre-ensemble et les moyens de renforcer la cohésion nationale.</p>
            </div>

            <div class="domaine-card" id="sante">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Santé</h3>
                <p class="domaine-description">Examiner le système de santé, la prévention, l'accès aux soins et le bien-être des populations.</p>
            </div>

            <div class="domaine-card" id="culture">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Culture & Patrimoine</h3>
                <p class="domaine-description">Mettre en valeur l'histoire, les langues, les arts et le patrimoine matériel et immatériel du Bénin.</p>
            </div>

            <div class="domaine-card" id="environnement">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Environnement</h3>
                <p class="domaine-description">Comprendre les enjeux de ressources naturelles, de pollution et de développement durable.</p>
            </div>

            <div class="domaine-card" id="technologie">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Technologie & Numérique</h3>
                <p class="domaine-description">Explorer la transformation numérique, l'innovation et la place des technologies dans l'économie.</p>
            </div>

            <div class="domaine-card" id="diaspora">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Diaspora & Relations internationales</h3>
                <p class="domaine-description">Mettre en lumière les liens entre le Bénin et le reste du monde, le rôle de la diaspora.</p>
            </div>

            <div class="domaine-card" id="justice">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Justice & Droits citoyens</h3>
                <p class="domaine-description">Comprendre le système judiciaire, l'accès au droit et les questions de justice sociale.</p>
            </div>

            <div class="domaine-card" id="securite">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Sécurité & Cohésion nationale</h3>
                <p class="domaine-description">Réfléchir à la stabilité, à la confiance et à la construction d'une paix durable.</p>
            </div>

            <div class="domaine-card" id="vision">
                <div class="domaine-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Vision & Prospectives futures</h3>
                <p class="domaine-description">Imaginer différents scénarios d'avenir pour le pays en croisant tendances et innovations.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-content">
                <h2 class="cta-title">Un domaine vous intéresse ?</h2>
                <p class="cta-description">
                    Rejoignez un groupe de réflexion et contribuez à l'analyse des enjeux qui vous tiennent à cœur.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-white btn-lg">
                    <span>Rejoindre un groupe</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
