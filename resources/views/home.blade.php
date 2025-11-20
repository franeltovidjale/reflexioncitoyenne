@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content"> 
            {{-- <div class="hero-badge">
                <svg class="icon-star" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span>Plateforme Citoyenne Indépendante</span>
            </div> --}}

            <h1 class="hero-title">
                Réfléchir ensemble.<br>
                <span class="gradient-text">Comprendre ensemble.</span><br>
                Pour le Bénin.
            </h1>

            <p class="hero-description">
                La Maison Béninoise de Réflexion Citoyenne (MBRC) est une initiative non partisane, née de la volonté de donner aux citoyens un espace sérieux, calme et structuré pour analyser les enjeux qui engagent notre pays.
            </p>

            <div class="hero-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-primary btn-lg">
                    <span>Rejoindre la communauté</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('apropos') }}" class="btn btn-outline btn-lg">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Découvrir notre vision</span>
                </a>
            </div>

            <!-- Stats -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-value">12</div>
                    <div class="stat-label">Domaines de réflexion</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-value">100%</div>
                    <div class="stat-label">Neutre & non partisan</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-value">∞</div>
                    <div class="stat-label">Contributions possibles</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Notre Mission</span>
            <h2 class="section-title">Éclairer, Rassembler, Transmettre</h2>
            <p class="section-description">
                La MBRC n'est ni un parti ni une organisation militante. C'est une maison d'idées, un lieu où la réflexion précède la réaction, où la connaissance précède le jugement.
            </p>
        </div>

        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Éclairer</h3>
                <p class="mission-text">Proposer des analyses claires, pédagogiques et accessibles à tous les citoyens.</p>
                <ul class="mission-list">
                    <li>Publications rigoureuses</li>
                    <li>Études approfondies</li>
                    <li>Décryptages d'actualité</li>
                </ul>
            </div>

            <div class="mission-card featured">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Rassembler</h3>
                <p class="mission-text">Créer des passerelles entre citoyens du pays, des régions et de la diaspora.</p>
                <ul class="mission-list">
                    <li>Forums de discussion</li>
                    <li>Événements citoyens</li>
                    <li>Réseau national et international</li>
                </ul>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Transmettre</h3>
                <p class="mission-text">Préparer la jeune génération à comprendre les enjeux du Bénin d'aujourd'hui et de demain.</p>
                <ul class="mission-list">
                    <li>Formations citoyennes</li>
                    <li>Ateliers pédagogiques</li>
                    <li>Ressources éducatives</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Domaines Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Domaines</span>
            <h2 class="section-title">12 Domaines de Réflexion</h2>
            <p class="section-description">
                Des thématiques structurées qui couvrent l'ensemble des enjeux de notre société.
            </p>
        </div>

        <div class="domaines-grid">
            <a href="{{ route('domaines') }}#gouvernance" class="domaine-card">
                <div class="domaine-icon gouvernance">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Gouvernance</h3>
                <p class="domaine-description">Institutions, transparence et responsabilité</p>
            </a>

            <a href="{{ route('domaines') }}#economie" class="domaine-card">
                <div class="domaine-icon economie">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Économie</h3>
                <p class="domaine-description">Développement et entrepreneuriat</p>
            </a>

            <a href="{{ route('domaines') }}#education" class="domaine-card">
                <div class="domaine-icon education">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Éducation</h3>
                <p class="domaine-description">Formation et jeunesse</p>
            </a>

            <a href="{{ route('domaines') }}#societe" class="domaine-card">
                <div class="domaine-icon societe">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title">Société</h3>
                <p class="domaine-description">Cohésion sociale et vivre-ensemble</p>
            </a>

            <a href="{{ route('domaines') }}" class="domaine-card view-all">
                <div class="view-all-content">
                    <span class="view-all-text">+8 autres domaines</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-content">
                <h2 class="cta-title">Prêt à faire partie du changement ?</h2>
                <p class="cta-description">
                    Rejoignez des centaines de citoyens engagés dans la réflexion et l'action pour un Bénin meilleur.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-white btn-lg">
                    <span>Devenir membre</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-ghost-white btn-lg">
                    <span>Nous contacter</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Témoignages</span>
            <h2 class="section-title">Ce que disent nos membres</h2>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">
                    ★★★★★
                </div>
                <p class="testimonial-text">
                    "La MBRC m'a permis de comprendre les enjeux de mon pays avec une profondeur que je n'avais jamais atteinte. Les analyses sont rigoureuses et accessibles."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">AM</div>
                    <div>
                        <div class="author-name">Anselme M.</div>
                        <div class="author-role">Membre depuis 2024</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">
                    ★★★★★
                </div>
                <p class="testimonial-text">
                    "En tant que membre de la diaspora, la MBRC me permet de rester connectée aux réalités du Bénin et de contribuer à distance. C'est une initiative essentielle."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">SD</div>
                    <div>
                        <div class="author-name">Sophie D.</div>
                        <div class="author-role">Diaspora - Paris</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">
                    ★★★★★
                </div>
                <p class="testimonial-text">
                    "Les formations citoyennes organisées par la MBRC m'ont ouvert les yeux sur le fonctionnement de nos institutions. Un espace de dialogue rare et précieux."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">JK</div>
                    <div>
                        <div class="author-name">Jean K.</div>
                        <div class="author-role">Jeune entrepreneur</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
