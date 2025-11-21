@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                Réfléchir ensemble.<br>
                <span class="gradient-text">Comprendre ensemble.</span><br>
                Pour reconstruire un patriotisme fort et rendre au peuple béninois sa voix souveraine.
            </h1>

            <p class="hero-description">
                Une plateforme citoyenne indépendante pour éclairer les enjeux d'aujourd'hui, former notre jeunesse, et préparer le Bénin aux défis de demain.
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

<!-- Message d'ouverture -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pourquoi la MBRC ?</span>
            <h2 class="section-title">Un espace né d'un besoin</h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="content-card" style="background: rgba(0, 140, 59, 0.03); border-color: var(--green-primary);">
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                    De nombreux Béninois traversent aujourd'hui un sentiment d'inquiétude et d'incompréhension. La récente modification de la Constitution, réalisée sans véritable espace de consultation citoyenne, a laissé beaucoup de personnes avec un goût d'amertume : celui de voir des décisions importantes se prendre sans que la population ne soit réellement associée au débat.
                </p>
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                    Dans le pays, comme au sein de la diaspora, beaucoup expriment une gêne, une tristesse, parfois un découragement. Non pas par hostilité ou par conflit, mais parce qu'ils ont le sentiment que la vie publique s'éloigne peu à peu de la voix des citoyens.
                </p>
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; font-weight: 600; color: var(--gray-900);">
                    C'est précisément dans ce besoin de clarté, de dialogue et de sérénité que s'inscrit la MBRC.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section">
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
                <p class="mission-text">Éclairer les citoyens sur les enjeux du pays, sans simplisme ni langue de bois.</p>
                <ul class="mission-list">
                    <li>Analyses rigoureuses et accessibles</li>
                    <li>Décryptage des réformes et institutions</li>
                    <li>Lutte contre la désinformation</li>
                </ul>
            </div>

            <div class="mission-card featured">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Rassembler</h3>
                <p class="mission-text">Rassembler des profils différents autour d'un même intérêt : le Bénin.</p>
                <ul class="mission-list">
                    <li>Diplômés et non-diplômés</li>
                    <li>Jeunes, seniors, secteur public et privé</li>
                    <li>Citoyens du pays et de la diaspora</li>
                </ul>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Transmettre</h3>
                <p class="mission-text">Transmettre des connaissances et une culture citoyenne solide à la jeune génération.</p>
                <ul class="mission-list">
                    <li>Formations citoyennes gratuites</li>
                    <li>Ateliers pédagogiques</li>
                    <li>Outils de compréhension</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- À qui s'adresse la MBRC -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pour Tous les Béninois</span>
            <h2 class="section-title">Cette maison citoyenne a besoin de toutes les forces du pays</h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; text-align: center; margin-bottom: var(--space-xl);">
                Elle s'adresse à chaque Béninoise et chaque Béninois :
            </p>

            <div class="valeurs-grid">
                <div class="valeur-card">
                    <div class="valeur-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Professionnels</h3>
                    <p class="valeur-text">Diplômés, spécialistes, salariés du privé ou du public</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Entrepreneurs</h3>
                    <p class="valeur-text">Commerçants, travailleurs indépendants et artisans</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Jeunesse</h3>
                    <p class="valeur-text">Étudiants, enseignants et jeunes en recherche</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Diaspora</h3>
                    <p class="valeur-text">Membres de la diaspora ou vivant au pays</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Tous les profils</h3>
                    <p class="valeur-text">Chômeurs, ouvriers, techniciens, personnes sans qualification formelle</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Attachés au Bénin</h3>
                    <p class="valeur-text">Il suffit d'être attaché au Bénin, sincèrement, profondément</p>
                </div>
            </div>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; text-align: center; margin-top: var(--space-xl); font-weight: 600; color: var(--green-primary);">
                Chacun possède une expérience unique, une vision précieuse, une compréhension personnelle de la réalité béninoise. Le Bénin ne peut être compris que si toutes ses voix sont entendues.
            </p>
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
