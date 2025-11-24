@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'Espace Membres | Communauté citoyenne béninoise active - MBRC')

@section('meta_description', 'Rejoignez l\'espace membres de Réflexion Citoyenne : forum citoyen, groupes de réflexion, formations gratuites et réseau de citoyens engagés pour le développement du Bénin.')

@section('meta_keywords', 'espace membres mbrc, communauté citoyenne bénin, réseau citoyens béninois, forum citoyen bénin, groupes réflexion citoyenne, formations citoyennes gratuites, engagement civique bénin, participation citoyenne active')

@section('canonical', route('membres'))

@section('og_title', 'Espace Membres | Communauté citoyenne béninoise - MBRC')
@section('og_description', 'Accédez à l\'espace membres MBRC : forum citoyen, groupes de réflexion, formations gratuites et ressources exclusives pour citoyens engagés.')
@section('og_image', asset('images/og-membres.jpg'))

{{-- Breadcrumb Schema pour Google --}}
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
      "name": "Espace Membres",
      "item": "{{ route('membres') }}"
    }
  ]
}
</script>
@endpush

{{-- Organization Schema avec membership --}}
@push('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Espace Membres Citoyen",
  "provider": {
    "@type": "Organization",
    "name": "Réflexion Citoyenne - MBRC"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Bénin"
  },
  "audience": {
    "@type": "PeopleAudience",
    "audienceType": "Citoyens béninois engagés"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "XOF",
    "availability": "https://schema.org/InStock"
  }
}
</script>
@endpush

@section('content')
<!-- Hero Section -->
<section class="section" itemscope itemtype="https://schema.org/WebPageElement">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">Espace Membres</span>
            </nav>

            {{-- H1 unique avec mots-clés principaux --}}
            <h1 class="page-title" itemprop="name">
                Espace Membres MBRC : Rejoignez la <strong>communauté citoyenne béninoise</strong> active
            </h1>

            <p class="page-description" itemprop="description">
                Un espace dédié aux membres actifs de la <strong>communauté citoyenne</strong> pour échanger, collaborer et contribuer à la <strong>réflexion citoyenne</strong> et au développement du Bénin.
            </p>
        </div>
    </div>
</section>

<!-- Fonctionnalités Membres - Mots-clés: forum citoyen, groupes réflexion -->
<section class="section" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Fonctionnalités de l'Espace Membres</span>
            <h2 class="section-title" itemprop="name">
                Outils et espaces pour la <strong>participation citoyenne active</strong>
            </h2>
            <p class="section-description">
                Profitez d'un <strong>forum citoyen</strong>, de <strong>groupes de réflexion</strong> thématiques et d'outils collaboratifs pour renforcer votre <strong>engagement civique</strong>.
            </p>
        </div>

        <div class="mission-grid">
            <article class="mission-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Service">
                <meta itemprop="position" content="1">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Profil Membre Personnalisé</h3>
                <p class="mission-text" itemprop="description">
                    Un espace personnel pour gérer vos informations, suivre vos contributions à la <strong>réflexion citoyenne</strong> et vos domaines d'intérêt dans la <strong>communauté citoyenne béninoise</strong>.
                </p>
                <ul class="mission-list">
                    <li>Tableau de bord personnalisé de participation</li>
                    <li>Historique de vos contributions citoyennes</li>
                    <li>Gestion des préférences thématiques</li>
                </ul>
            </article>

            <article class="mission-card featured" itemprop="itemListElement" itemscope itemtype="https://schema.org/Service">
                <meta itemprop="position" content="2">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Forum Citoyen Béninois</h3>
                <p class="mission-text" itemprop="description">
                    Un <strong>forum citoyen</strong> structuré où les discussions de la <strong>communauté citoyenne</strong> sont organisées par thème et modérées dans le respect des valeurs démocratiques.
                </p>
                <ul class="mission-list">
                    <li>Discussions thématiques par domaine citoyen</li>
                    <li>Modération bienveillante et respectueuse</li>
                    <li>Espace sécurisé de participation citoyenne</li>
                </ul>
            </article>

            <article class="mission-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Service">
                <meta itemprop="position" content="3">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Groupes de Réflexion Citoyenne</h3>
                <p class="mission-text" itemprop="description">
                    Rejoignez ou créez des <strong>groupes de réflexion</strong> organisés par domaine pour produire des analyses citoyennes et contribuer au développement du Bénin.
                </p>
                <ul class="mission-list">
                    <li>Travail collaboratif entre citoyens engagés</li>
                    <li>Outils de co-écriture et analyse collective</li>
                    <li>Validation collective des propositions</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- Ressources Exclusives - Mots-clés: formation citoyenne, ressources pédagogiques -->
<section class="section section-light" itemscope itemtype="https://schema.org/EducationalOrganization">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Accès Exclusif Membres</span>
            <h2 class="section-title" itemprop="name">
                Ressources exclusives pour les membres de la <strong>communauté citoyenne</strong>
            </h2>
            <p class="section-description">
                Accédez à des <strong>formations citoyennes</strong>, documents de travail et outils pédagogiques réservés aux membres actifs de la plateforme.
            </p>
        </div>

        <div class="content-grid">
            <article class="content-card" itemscope itemtype="https://schema.org/CreativeWork">
                <div class="content-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="content-title" itemprop="name">Documents de Travail Citoyens</h3>
                <p class="content-text" itemprop="description">
                    Accédez aux documents de travail, synthèses avancées et contenus pédagogiques exclusifs pour approfondir votre compréhension des enjeux béninois.
                </p>
            </article>

            <article class="content-card" itemscope itemtype="https://schema.org/CreativeWork">
                <div class="content-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <h3 class="content-title" itemprop="name">Contribution aux Analyses Citoyennes</h3>
                <p class="content-text" itemprop="description">
                    Participez à la co-écriture de notes, rapports et dossiers sur les enjeux béninois avec accompagnement méthodologique de la <strong>communauté citoyenne</strong>.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- Avantages Membres - Mots-clés: réseau citoyens, engagement civique -->
<section class="section" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pourquoi devenir membre ?</span>
            <h2 class="section-title" itemprop="name">
                Les avantages de rejoindre le <strong>réseau de citoyens béninois engagés</strong>
            </h2>
            <p class="section-description">
                Devenez membre de la plus grande <strong>communauté citoyenne béninoise</strong> et bénéficiez de <strong>formations citoyennes gratuites</strong>, d'un réseau actif et de reconnaissance de vos contributions.
            </p>
        </div>

        <div class="valeurs-grid">
            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="position" content="1">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Formations Citoyennes Gratuites</h3>
                <p class="valeur-text" itemprop="description">
                    Accès à toutes nos <strong>formations citoyennes</strong> et ateliers pédagogiques d'<strong>éducation civique</strong> pour renforcer votre <strong>engagement civique</strong>.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="position" content="2">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Réseau de Citoyens Béninois Actifs</h3>
                <p class="valeur-text" itemprop="description">
                    Connectez-vous avec d'autres <strong>citoyens béninois engagés</strong> partout au Bénin et dans la <strong>diaspora béninoise</strong> pour échanger et collaborer.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="position" content="3">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Votre Voix Citoyenne Entendue</h3>
                <p class="valeur-text" itemprop="description">
                    Vos contributions à la <strong>réflexion citoyenne</strong> sont valorisées et prises en compte dans nos analyses et nos propositions pour le développement du Bénin.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="position" content="4">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Reconnaissance de l'Engagement Civique</h3>
                <p class="valeur-text" itemprop="description">
                    Certificats de participation et reconnaissance officielle de vos contributions à la <strong>communauté citoyenne béninoise</strong> et au développement national.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-light">
    <div class="container">
        <div class="cta-box" role="region" aria-label="Rejoindre la communauté">
            <div class="cta-content">
                <h2 class="cta-title">
                    Prêt à rejoindre la <strong>communauté citoyenne béninoise</strong> ?
                </h2>
                <p class="cta-description">
                    Inscrivez-vous gratuitement et accédez immédiatement au <strong>forum citoyen</strong>, aux <strong>groupes de réflexion</strong> et aux <strong>formations citoyennes</strong>.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('rejoindre') }}" class="btn btn-primary btn-lg" aria-label="Devenir membre de la communauté citoyenne">
                    <span>Devenir membre gratuitement</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-lg" aria-label="Contacter l'équipe MBRC">
                    <span>Nous contacter</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
