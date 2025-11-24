@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'Domaines de Réflexion Citoyenne | 12 Enjeux Stratégiques du Bénin - MBRC')

@section('meta_description', '12 domaines de réflexion citoyenne pour penser le Bénin : gouvernance béninoise, économie, éducation, société, santé, culture. Analyses approfondies des enjeux du Bénin.')

@section('meta_keywords', 'domaines réflexion bénin, gouvernance béninoise, enjeux bénin, économie bénin, éducation béninoise, développement bénin, thématiques citoyennes, analyses enjeux bénin')

@section('canonical', route('domaines'))

@section('og_title', '12 Domaines de Réflexion Citoyenne | Enjeux Stratégiques du Bénin')
@section('og_description', 'Découvrez les 12 domaines de réflexion citoyenne de la MBRC : gouvernance, économie, éducation et tous les enjeux du développement béninois.')
@section('og_image', asset('images/og-domaines.jpg'))

{{-- Breadcrumb Schema --}}
@push('breadcrumb_schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Accueil",
      "item": "{{ route('home') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Domaines de Réflexion",
      "item": "{{ route('domaines') }}"
    }
  ]
}
</script>
@endpush

{{-- ItemList Schema for Domains --}}
@push('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Domaines de Réflexion Citoyenne MBRC",
  "description": "Les 12 domaines thématiques de réflexion citoyenne pour analyser les enjeux du Bénin",
  "numberOfItems": 12,
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Gouvernance & Institutions",
      "description": "Analyse de la gouvernance béninoise et des institutions démocratiques"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Économie & Développement",
      "description": "Enjeux économiques et développement durable du Bénin"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Éducation & Jeunesse",
      "description": "Système éducatif et formation de la jeunesse béninoise"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Société & Cohésion sociale",
      "description": "Cohésion sociale et dynamiques sociétales au Bénin"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Santé",
      "description": "Système de santé publique et accès aux soins"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "Culture & Patrimoine",
      "description": "Patrimoine culturel et identité béninoise"
    },
    {
      "@type": "ListItem",
      "position": 7,
      "name": "Environnement",
      "description": "Enjeux environnementaux et développement durable"
    },
    {
      "@type": "ListItem",
      "position": 8,
      "name": "Technologie & Numérique",
      "description": "Transformation digitale et innovation au Bénin"
    },
    {
      "@type": "ListItem",
      "position": 9,
      "name": "Diaspora & Relations internationales",
      "description": "Mobilisation de la diaspora béninoise et diplomatie"
    },
    {
      "@type": "ListItem",
      "position": 10,
      "name": "Justice & Droits citoyens",
      "description": "Système judiciaire et État de droit"
    },
    {
      "@type": "ListItem",
      "position": 11,
      "name": "Sécurité & Cohésion nationale",
      "description": "Sécurité publique et stabilité nationale"
    },
    {
      "@type": "ListItem",
      "position": 12,
      "name": "Vision & Prospectives futures",
      "description": "Prospective et planification stratégique pour le Bénin"
    }
  ]
}
</script>
@endpush

@section('content')
<!-- Page Hero -->
<section class="section section-light" itemscope itemtype="https://schema.org/WebPage">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">Domaines de Réflexion</span>
            </nav>

            <h1 class="page-title" itemprop="name">
                12 <strong>Domaines de réflexion</strong> pour penser les <strong>enjeux du Bénin</strong>
            </h1>

            <p class="page-description" itemprop="description">
                Des thématiques structurées qui couvrent l'ensemble des <strong>enjeux</strong> de notre société béninoise. Chaque <strong>domaine</strong> fait l'objet d'analyses approfondies, d'<strong>ateliers citoyens</strong> et de productions collectives.
            </p>
        </div>
    </div>
</section>

<!-- Domaines Grid -->
<section class="section">
    <div class="container">
        <div style="display: flex; flex-direction: column; gap: var(--space-2xl);">

            <!-- Domaine 1: Gouvernance -->
            <article class="content-card" id="gouvernance" style="border-left: 4px solid var(--green-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0;" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">1. <strong>Gouvernance</strong> & Institutions Béninoises</h3>
                        <p class="content-text" itemprop="text">
                            La solidité d'un pays dépend avant tout de la qualité de ses institutions. Quand les règles du jeu deviennent floues, quand la séparation des pouvoirs s'affaiblit, quand les citoyens ne comprennent plus comment les décisions sont prises, la confiance nationale s'effrite.
                        </p>
                        <p class="content-text">
                            Le Bénin traverse une période où les réformes institutionnelles, souvent techniques et peu expliquées, ont un impact direct sur la vie démocratique. Ce <strong>domaine de réflexion</strong> vise donc à éclairer le fonctionnement réel de l'État, analyser les transformations institutionnelles et renforcer la culture publique afin que chaque citoyen sache comment son pays est <strong>gouverné</strong>.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--green-primary);">Thèmes abordés :</strong> Constitution, séparation des pouvoirs, décentralisation, transparence administrative, mécanismes de contrôle
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 2: Économie -->
            <article class="content-card" id="economie" style="border-left: 4px solid var(--yellow-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0; background: rgba(252, 209, 22, 0.1);" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">2. <strong>Économie</strong> & Développement du Bénin</h3>
                        <p class="content-text" itemprop="text">
                            L'<strong>économie</strong> est le moteur de la prospérité nationale — mais elle reste complexe, méconnue et souvent mal expliquée au citoyen. Dans un pays où la jeunesse constitue la majorité de la population, où l'informel tient une place centrale et où l'innovation progresse, comprendre les mécanismes <strong>économiques</strong> devient essentiel.
                        </p>
                        <p class="content-text">
                            L'ambition de ce <strong>domaine</strong> est de rendre accessibles les <strong>enjeux du développement</strong>, aider à décrypter les décisions <strong>économiques</strong> et proposer des pistes pour une croissance inclusive, durable et équilibrée. Face à un capitalisme sauvage qui fragilise les familles et détruit les solidarités, nous défendons un modèle où l'<strong>économie</strong> sert la population béninoise.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--yellow-dark);">Thèmes abordés :</strong> Fiscalité, entrepreneuriat, secteur informel, investissements, commerce international, politique budgétaire
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 3: Éducation -->
            <article class="content-card" id="education" style="border-left: 4px solid var(--green-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0;" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">3. <strong>Éducation</strong> & Jeunesse Béninoise</h3>
                        <p class="content-text" itemprop="text">
                            Aucun pays ne peut se développer durablement sans une jeunesse formée, confiante et bien entourée. L'<strong>éducation</strong> reste l'un des fondements les plus fragiles et les plus stratégiques du Bénin. Entre défis pédagogiques, manque de moyens, évolution des métiers et pression démographique, il devient essentiel d'offrir une <strong>réflexion</strong> sérieuse sur le système <strong>éducatif</strong>.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> vise à analyser les forces et faiblesses du modèle actuel, proposer des réformes, et préparer une génération capable de relever les défis <strong>économiques</strong>, sociaux et technologiques du futur.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--green-primary);">Thèmes abordés :</strong> Système éducatif, formation professionnelle, insertion des jeunes, orientation, enseignement supérieur
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 4: Société -->
            <article class="content-card" id="societe" style="border-left: 4px solid var(--red-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0; background: rgba(232, 17, 45, 0.1);" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">4. Société & Cohésion Sociale</h3>
                        <p class="content-text" itemprop="text">
                            La société béninoise évolue rapidement : urbanisation, transformation du travail, pression <strong>économique</strong>, évolution des familles, montée des inégalités... Dans ces bouleversements, la cohésion nationale est mise à l'épreuve.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> permet de comprendre les tensions, d'identifier les fractures sociales émergentes, d'étudier les dynamiques communautaires et de réfléchir à des solutions pour préserver l'unité, la solidarité et le vivre-ensemble, indispensables à la stabilité du Bénin.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--red-primary);">Thèmes abordés :</strong> Inégalités, solidarité, inclusion sociale, famille, genre, dialogue intergénérationnel
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 5: Santé -->
            <article class="content-card" id="sante" style="border-left: 4px solid var(--green-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0;" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">5. Santé Publique au Bénin</h3>
                        <p class="content-text" itemprop="text">
                            La santé publique est un pilier silencieux mais déterminant du <strong>développement</strong> national. Un pays ne peut prospérer avec un système de santé fragile, inégal ou saturé.
                        </p>
                        <p class="content-text">
                            Face aux défis sanitaires, au manque d'infrastructures, aux difficultés d'accès aux soins et aux <strong>enjeux</strong> de prévention, ce <strong>domaine</strong> analyse la situation réelle du système de santé et propose des pistes pour améliorer durablement la prise en charge des populations béninoises.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--green-primary);">Thèmes abordés :</strong> Système de santé, accès aux soins, prévention, infrastructures sanitaires, couverture universelle
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 6: Culture -->
            <article class="content-card" id="culture" style="border-left: 4px solid var(--yellow-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0; background: rgba(252, 209, 22, 0.1);" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">6. Culture & Patrimoine Béninois</h3>
                        <p class="content-text" itemprop="text">
                            La culture est le socle de l'identité d'un peuple. Dans un monde globalisé où les repères se diluent, préserver la richesse culturelle béninoise n'est pas seulement un devoir moral — c'est un <strong>enjeu</strong> stratégique.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> étudie les forces de notre patrimoine, la vitalité artistique, la transmission intergénérationnelle et le rôle de la culture dans la construction d'une nation forte, confiante et respectée dans le monde.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--yellow-dark);">Thèmes abordés :</strong> Patrimoine culturel, arts, langues nationales, industries créatives, tourisme culturel
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 7: Environnement -->
            <article class="content-card" id="environnement" style="border-left: 4px solid var(--green-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0;" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">7. Environnement et <strong>Développement</strong> Durable</h3>
                        <p class="content-text" itemprop="text">
                            Le Bénin fait face à des défis environnementaux majeurs : pollution, gestion des déchets, pression démographique, risques climatiques, fragilisation des écosystèmes. La question écologique n'est plus un sujet secondaire : elle conditionne la santé, l'agriculture, la sécurité alimentaire, et le <strong>développement économique</strong>.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> vise à anticiper ces risques, comprendre les <strong>enjeux</strong> écologiques et proposer des stratégies durables pour protéger les générations futures.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--green-primary);">Thèmes abordés :</strong> Changement climatique, gestion des déchets, ressources naturelles, biodiversité, agriculture durable
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 8: Technologie -->
            <article class="content-card" id="technologie" style="border-left: 4px solid var(--red-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0; background: rgba(232, 17, 45, 0.1);" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">8. Technologie & Numérique au Bénin</h3>
                        <p class="content-text" itemprop="text">
                            Le numérique transforme le monde à grande vitesse — et le Bénin ne peut rester en marge de cette révolution. Il influence l'<strong>éducation</strong>, l'<strong>économie</strong>, l'administration, l'emploi, la sécurité et la citoyenneté.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> analyse les opportunités offertes par les technologies, les risques (fracture numérique, cybersécurité), et les moyens de faire du digital un levier d'égalité et d'innovation pour le <strong>développement</strong> du Bénin.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--red-primary);">Thèmes abordés :</strong> Transformation digitale, innovation, inclusion numérique, cybersécurité, e-gouvernement
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 9: Diaspora -->
            <article class="content-card" id="diaspora" style="border-left: 4px solid var(--green-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0;" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">9. <strong>Diaspora</strong> Béninoise & Relations Internationales</h3>
                        <p class="content-text" itemprop="text">
                            La <strong>diaspora béninoise</strong> constitue un atout majeur : compétences, ressources, réseaux, influence internationale. Mais elle reste encore insuffisamment intégrée aux stratégies nationales de <strong>développement</strong>.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> étudie comment mobiliser cette force humaine, comment construire une diplomatie moderne et comment renforcer le rayonnement du Bénin à l'étranger.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--green-primary);">Thèmes abordés :</strong> Mobilisation de la diaspora, diplomatie, coopération internationale, rayonnement culturel
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 10: Justice -->
            <article class="content-card" id="justice" style="border-left: 4px solid var(--yellow-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0; background: rgba(252, 209, 22, 0.1);" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">10. Justice & Droits Citoyens</h3>
                        <p class="content-text" itemprop="text">
                            Une justice forte garantit un pays stable ; une justice faible fragilise la paix sociale. Ce <strong>domaine de réflexion</strong> a pour rôle d'analyser la qualité du système judiciaire, la protection des droits fondamentaux, l'équité de l'accès à la justice, et l'indépendance des institutions.
                        </p>
                        <p class="content-text">
                            L'objectif est clair : réfléchir à la manière de bâtir un véritable État de droit au service du citoyen béninois.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--yellow-dark);">Thèmes abordés :</strong> Système judiciaire, droits humains, accès à la justice, État de droit, libertés publiques
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 11: Sécurité -->
            <article class="content-card" id="securite" style="border-left: 4px solid var(--red-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0; background: rgba(232, 17, 45, 0.1);" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">11. Sécurité & Cohésion Nationale</h3>
                        <p class="content-text" itemprop="text">
                            La sécurité n'est pas seulement une affaire de police ou d'armée — c'est un pilier de la cohésion nationale. Face aux défis sécuritaires modernes (criminalité, tensions sociales, risques régionaux, catastrophes), le Bénin doit renforcer ses capacités d'anticipation et de protection.
                        </p>
                        <p class="content-text">
                            Ce <strong>domaine</strong> s'intéresse aux politiques de sécurité, à la résilience des communautés, et à la stabilité territoriale du Bénin.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--red-primary);">Thèmes abordés :</strong> Sécurité publique, défense, gestion des crises, prévention des conflits, résilience
                        </div>
                    </div>
                </div>
            </article>

            <!-- Domaine 12: Vision -->
            <article class="content-card" id="vision" style="border-left: 4px solid var(--green-primary);" itemscope itemtype="https://schema.org/Article">
                <div style="display: flex; align-items: start; gap: var(--space-lg);">
                    <div class="domaine-icon" style="flex-shrink: 0;" aria-hidden="true">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div style="flex: 1;">
                        <h3 class="content-title" itemprop="headline">12. Vision & Prospectives Futures du Bénin</h3>
                        <p class="content-text" itemprop="text">
                            Penser le Bénin sur 5 ans est nécessaire ; le penser sur 30 ans est indispensable. Ce <strong>domaine</strong> projette la nation dans l'avenir : tendances démographiques, technologies émergentes, transformations du travail, <strong>enjeux</strong> climatiques, évolution des institutions, compétitivité internationale.
                        </p>
                        <p class="content-text">
                            Il offre des scénarios de long terme pour aider la nation à anticiper, planifier et se préparer au <strong>développement</strong> futur.
                        </p>
                        <div style="margin-top: var(--space-md);">
                            <strong style="color: var(--green-primary);">Thèmes abordés :</strong> Prospective, scénarios d'avenir, planification stratégique, anticipation des tendances
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section-light">
    <div class="container">
        <div class="cta-box" role="region" aria-label="Appel à l'action">
            <div class="cta-content">
                <h2 class="cta-title">Un <strong>domaine</strong> vous intéresse ?</h2>
                <p class="cta-description">
                    Rejoignez un <strong>groupe de réflexion</strong> et contribuez à l'analyse des <strong>enjeux</strong> du Bénin qui vous tiennent à cœur.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-white btn-lg" aria-label="Rejoindre un groupe de réflexion">
                    <span>Rejoindre un groupe</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
