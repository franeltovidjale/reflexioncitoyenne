@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'Réflexion Citoyenne | Plateforme citoyenne béninoise pour comprendre, analyser et agir')

@section('meta_description', 'Réflexion Citoyenne est une plateforme béninoise indépendante dédiée à l\'analyse, la formation civique, la participation citoyenne et la réflexion collective. Un espace pour les Béninois du pays et de la diaspora.')

@section('meta_keywords', 'réflexion citoyenne, maison bénin citoyenne, éducation civique bénin, analyse politique bénin, plateforme citoyenne bénin, citoyenneté béninoise, patriotisme béninois, think tank bénin, formation citoyenne bénin, participation citoyenne bénin, diaspora béninoise, gouvernance béninoise')

@section('canonical', route('home'))

@section('og_title', 'Réflexion Citoyenne | Plateforme citoyenne béninoise')
@section('og_description', 'Rejoignez la communauté citoyenne béninoise pour comprendre les enjeux, analyser les réformes et participer activement au développement du Bénin.')
@section('og_image', asset('images/og-home.jpg'))

{{-- Breadcrumb Schema pour Google --}}
@push('breadcrumb_schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Accueil",
    "item": "{{ route('home') }}"
  }]
}
</script>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero" itemscope itemtype="https://schema.org/WPHeader">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content">
            {{-- H1 principal avec mots-clés --}}
            <h1 class="hero-title" itemprop="headline">
                Réfléchir ensemble pour une <span class="gradient-text">citoyenneté béninoise éclairée</span><br>
                Reconstruire un patriotisme fort et rendre au peuple béninois sa voix souveraine
            </h1>

            <p class="hero-description" itemprop="description">
                Une <strong>plateforme citoyenne indépendante</strong> pour éclairer les enjeux d'aujourd'hui, former notre jeunesse à la <strong>participation citoyenne</strong>, et préparer le Bénin aux défis de demain à travers l'<strong>éducation civique</strong> et l'<strong>analyse politique</strong>.
            </p>

            <div class="hero-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-primary btn-lg" aria-label="Rejoindre la communauté citoyenne béninoise">
                    <span>Rejoindre la communauté</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('apropos') }}" class="btn btn-outline btn-lg" aria-label="Découvrir notre vision citoyenne">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Découvrir notre vision</span>
                </a>
            </div>

            <!-- Stats avec sémantique -->
            <div class="hero-stats" role="region" aria-label="Statistiques de la plateforme">
                <div class="stat-item">
                    <div class="stat-value">12</div>
                    <div style="font-weight: bold" class="stat-label">Domaines de réflexion citoyenne</div>
                </div>
                <div class="stat-divider" aria-hidden="true"></div>
                <div class="stat-item">
                    <div class="stat-value">100%</div>
                    <div style="font-weight: bold" class="stat-label">Neutre & non partisan</div>
                </div>
                <div class="stat-divider" aria-hidden="true"></div>
                <div class="stat-item">
                    <div class="stat-value">∞</div>
                    <div style="font-weight: bold" class="stat-label">Contributions citoyennes possibles</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" aria-hidden="true">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
    </div>
</section>

<!-- Message d'ouverture - Mots-clés: participation citoyenne, consultation citoyenne -->
<section class="section section-light" itemscope itemtype="https://schema.org/Article">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pourquoi la MBRC ?</span>
            <h2 class="section-title" itemprop="headline">Un espace de réflexion citoyenne né d'un besoin de <strong>participation citoyenne</strong></h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="content-card" style="background: rgba(0, 140, 59, 0.03); border-color: var(--green-primary);" itemprop="articleBody">
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                    De nombreux Béninois traversent aujourd'hui un sentiment d'inquiétude et d'incompréhension face aux réformes institutionnelles. La récente modification de la Constitution, réalisée sans véritable espace de <strong>consultation citoyenne</strong>, a laissé beaucoup de personnes avec un goût d'amertume : celui de voir des décisions importantes se prendre sans que la population ne soit réellement associée au débat démocratique.
                </p>
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                    Dans le pays, comme au sein de la <strong>diaspora béninoise</strong>, beaucoup expriment une gêne, une tristesse, parfois un découragement. Non pas par hostilité ou par conflit, mais parce qu'ils ont le sentiment que la vie publique s'éloigne peu à peu de la voix des citoyens.
                </p>
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; font-weight: 600; color: var(--gray-900);">
                    C'est précisément dans ce besoin de clarté, de dialogue et de sérénité que s'inscrit la <strong>Maison Béninoise de Réflexion Citoyenne (MBRC)</strong> — un <strong>think tank citoyen</strong> indépendant dédié à la compréhension des enjeux publics.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section - Mots-clés: éducation civique, formation citoyenne, analyse politique -->
<section class="section" itemscope itemtype="https://schema.org/Service">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Notre Mission Citoyenne</span>
            <h2 class="section-title" itemprop="name">Éclairer, Rassembler, Transmettre : Une mission d'<strong>éducation civique</strong> et de <strong>formation citoyenne</strong></h2>
            <p class="section-description" itemprop="description">
                La MBRC n'est ni un parti ni une organisation militante. C'est une <strong>maison de réflexion citoyenne</strong>, un <strong>think tank béninois</strong> où l'analyse précède la réaction, où la connaissance précède le jugement.
            </p>
        </div>

        <div class="mission-grid">
            <article class="mission-card" itemscope itemtype="https://schema.org/Service">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Éclairer par l'<strong>analyse politique</strong></h3>
                <p class="mission-text" itemprop="description">
                    Éclairer les citoyens béninois sur les enjeux du pays à travers une <strong>analyse politique rigoureuse</strong>, sans simplisme ni langue de bois.
                </p>
                <ul class="mission-list">
                    <li>Analyses politiques rigoureuses et accessibles</li>
                    <li>Décryptage des réformes institutionnelles</li>
                    <li>Lutte contre la désinformation</li>
                </ul>
            </article>

            <article class="mission-card featured" itemscope itemtype="https://schema.org/Service">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Rassembler tous les Béninois</h3>
                <p class="mission-text" itemprop="description">
                    Rassembler la <strong>jeunesse béninoise</strong>, la <strong>diaspora béninoise</strong> et tous les profils autour d'un même intérêt : le Bénin.
                </p>
                <ul class="mission-list">
                    <li>Diplômés et non-diplômés</li>
                    <li>Jeunes, seniors, secteur public et privé</li>
                    <li>Citoyens du pays et diaspora béninoise</li>
                </ul>
            </article>

            <article class="mission-card" itemscope itemtype="https://schema.org/Service">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Transmettre l'<strong>éducation civique</strong></h3>
                <p class="mission-text" itemprop="description">
                    Transmettre des connaissances et une culture citoyenne solide à la jeune génération à travers la <strong>formation citoyenne</strong>.
                </p>
                <ul class="mission-list">
                    <li>Formations citoyennes gratuites</li>
                    <li>Ateliers pédagogiques d'éducation civique</li>
                    <li>Outils de compréhension institutionnelle</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- À qui s'adresse la MBRC - Mots-clés: citoyenneté béninoise, patriotisme béninois -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pour Tous les Béninois</span>
            <h2 class="section-title">Cette maison de <strong>réflexion citoyenne</strong> a besoin de toutes les forces du pays pour renforcer la <strong>citoyenneté béninoise</strong></h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; text-align: center; margin-bottom: var(--space-xl);">
                Elle s'adresse à chaque Béninoise et chaque Béninois attaché au <strong>patriotisme béninois</strong> et à l'engagement citoyen :
            </p>

            <div class="valeurs-grid">
                <article class="valeur-card">
                    <div class="valeur-icon" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Professionnels</h3>
                    <p class="valeur-text">Diplômés, spécialistes, salariés du privé ou du public engagés pour la citoyenneté</p>
                </article>

                <article class="valeur-card">
                    <div class="valeur-icon" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Entrepreneurs</h3>
                    <p class="valeur-text">Commerçants, travailleurs indépendants et artisans du développement du Bénin</p>
                </article>

                <article class="valeur-card">
                    <div class="valeur-icon" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Jeunesse Béninoise</h3>
                    <p class="valeur-text">Étudiants, enseignants et jeunes en quête d'éducation civique</p>
                </article>

                <article class="valeur-card">
                    <div class="valeur-icon" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Diaspora Béninoise</h3>
                    <p class="valeur-text">Membres de la diaspora béninoise connectés aux réalités du pays</p>
                </article>

                <article class="valeur-card">
                    <div class="valeur-icon" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Tous les profils</h3>
                    <p class="valeur-text">Chômeurs, ouvriers, techniciens — tous acteurs de la participation citoyenne</p>
                </article>

                <article class="valeur-card">
                    <div class="valeur-icon" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="valeur-title">Patriotes Béninois</h3>
                    <p class="valeur-text">Attachés au patriotisme béninois, sincèrement et profondément</p>
                </article>
            </div>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; text-align: center; margin-top: var(--space-xl); font-weight: 600; color: var(--green-primary);">
                Chacun possède une expérience unique pour contribuer à la <strong>réflexion citoyenne</strong>. Le Bénin ne peut être compris que si toutes ses voix sont entendues dans le débat démocratique.
            </p>
        </div>
    </div>
</section>

<!-- Domaines Section - Mots-clés: gouvernance béninoise -->
<section class="section" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Domaines d'Analyse</span>
            <h2 class="section-title" itemprop="name">12 Domaines de Réflexion Citoyenne : <strong>gouvernance béninoise</strong>, économie, éducation et plus</h2>
            <p class="section-description" itemprop="description">
                Des thématiques structurées qui couvrent l'ensemble des enjeux de notre société : de la <strong>gouvernance béninoise</strong> au développement économique.
            </p>
        </div>

        <div class="domaines-grid">
            <a href="{{ route('domaines') }}#gouvernance" class="domaine-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="1">
                <div class="domaine-icon gouvernance" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="domaine-title" itemprop="name">Gouvernance Béninoise</h3>
                <p class="domaine-description">Institutions, transparence et responsabilité publique</p>
            </a>

            <a href="{{ route('domaines') }}#economie" class="domaine-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="2">
                <div class="domaine-icon economie" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="domaine-title" itemprop="name">Économie & Développement</h3>
                <p class="domaine-description">Développement du Bénin et entrepreneuriat</p>
            </a>

            <a href="{{ route('domaines') }}#education" class="domaine-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="3">
                <div class="domaine-icon education" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="domaine-title" itemprop="name">Éducation Civique</h3>
                <p class="domaine-description">Formation citoyenne et jeunesse béninoise</p>
            </a>

            <a href="{{ route('domaines') }}#societe" class="domaine-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="4">
                <div class="domaine-icon societe" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="domaine-title" itemprop="name">Cohésion Sociale</h3>
                <p class="domaine-description">Société béninoise et vivre-ensemble</p>
            </a>

            <a href="{{ route('domaines') }}" class="domaine-card view-all" aria-label="Voir tous les domaines de réflexion citoyenne">
                <div class="view-all-content">
                    <span class="view-all-text">+8 autres domaines</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
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
        <div class="cta-box" role="region" aria-label="Appel à l'action">
            <div class="cta-content">
                <h2 class="cta-title">Prêt à rejoindre la <strong>communauté citoyenne béninoise</strong> ?</h2>
                <p class="cta-description">
                    Rejoignez des centaines de citoyens engagés dans la <strong>réflexion citoyenne</strong> et l'action pour un Bénin meilleur à travers la <strong>participation citoyenne</strong>.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-white btn-lg" aria-label="Devenir membre de la plateforme citoyenne">
                    <span>Devenir membre</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-ghost-white btn-lg" aria-label="Contacter la Maison Béninoise de Réflexion Citoyenne">
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
            <h2 class="section-title">Ce que disent nos membres de la <strong>plateforme citoyenne</strong></h2>
        </div>

        <div class="testimonials-grid">
            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">
                    ★★★★★
                </div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "La MBRC m'a permis de comprendre les enjeux de mon pays avec une profondeur que je n'avais jamais atteinte. Les analyses sont rigoureuses et accessibles."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">AM</div>
                    <div>
                        <div class="author-name" itemprop="name">Anselme M.</div>
                        <div class="author-role">Membre depuis 2024</div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">
                    ★★★★★
                </div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "En tant que membre de la diaspora béninoise, la MBRC me permet de rester connectée aux réalités du Bénin et de contribuer à distance. C'est une initiative essentielle pour la participation citoyenne."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">SD</div>
                    <div>
                        <div class="author-name" itemprop="name">Sophie D.</div>
                        <div class="author-role">Diaspora - Paris</div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">
                    ★★★★★
                </div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "Les formations citoyennes organisées par la MBRC m'ont ouvert les yeux sur le fonctionnement de nos institutions. Un espace de dialogue rare et précieux pour l'éducation civique."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">JK</div>
                    <div>
                        <div class="author-name" itemprop="name">Jean K.</div>
                        <div class="author-role">Jeune entrepreneur</div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
