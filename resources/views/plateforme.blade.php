@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'La Plateforme Citoyenne | Outils d\'analyse et de participation pour le Bénin - MBRC')

@section('meta_description', 'Découvrez la plateforme citoyenne MBRC : formations civiques gratuites, ateliers citoyens, débats apaisés et outils de participation pour comprendre et analyser les enjeux du Bénin.')

@section('meta_keywords', 'plateforme citoyenne bénin, outils participation citoyenne, formation civique en ligne, ateliers citoyens bénin, débats citoyens, analyse politique bénin, think tank béninois, méthode réflexion citoyenne')

@section('canonical', route('plateforme'))

@section('og_title', 'La Plateforme Citoyenne | Outils et méthodes pour le Bénin')
@section('og_description', 'Accédez aux outils de participation citoyenne, formations civiques et ateliers pour comprendre les enjeux du Bénin.')
@section('og_image', asset('images/og-plateforme.jpg'))

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
      "name": "La Plateforme",
      "item": "{{ route('plateforme') }}"
    }
  ]
}
</script>
@endpush

@section('content')
<!-- Fonctionnement Général -->
<section class="section section-light" itemscope itemtype="https://schema.org/Service">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">La Plateforme</span>
            </nav>

            <h1 class="page-title" itemprop="name">
                Comment fonctionne la <strong>plateforme citoyenne</strong> MBRC : Outils et méthodes de <strong>participation citoyenne</strong>
            </h1>

            <p class="page-description" itemprop="description">
                Découvrez notre méthode de travail, nos <strong>outils de participation citoyenne</strong> et comment vous pouvez participer activement à la <strong>réflexion citoyenne</strong> pour le développement du Bénin.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; margin-bottom: var(--space-lg);">
                La MBRC fonctionne comme un espace numérique de référence, pensé pour connecter les Béninois du pays et de la <strong>diaspora béninoise</strong> dans une véritable révolution intellectuelle en réseau. Dans un contexte où la <strong>compréhension citoyenne</strong> devient essentielle, la <strong>plateforme citoyenne</strong> offre un lieu structuré, sérieux et accessible où chacun peut apprendre, réfléchir et contribuer au développement du pays.
            </p>

            <div class="content-grid">
                <article class="content-card" style="background: rgba(0, 140, 59, 0.03);">
                    <h3 class="content-title" style="color: var(--green-primary);">La Neutralité</h3>
                    <p class="content-text">
                        La <strong>plateforme citoyenne</strong> n'appartient à aucun parti et n'obéit à aucune orientation politique ou idéologique. Elle garantit un espace où seules comptent la connaissance, la vérité des faits et l'intérêt général.
                    </p>
                </article>

                <article class="content-card" style="background: rgba(252, 209, 22, 0.03);">
                    <h3 class="content-title" style="color: var(--yellow-dark);">La Rigueur</h3>
                    <p class="content-text">
                        Chaque information diffusée est vérifiée, structurée et expliquée avec précision. Notre engagement est de produire un savoir sérieux à travers l'<strong>analyse politique</strong> rigoureuse, loin des approximations ou des discours émotionnels.
                    </p>
                </article>

                <article class="content-card" style="background: rgba(232, 17, 45, 0.03);">
                    <h3 class="content-title" style="color: var(--red-primary);">L'Accessibilité</h3>
                    <p class="content-text">
                        Tous les citoyens béninois doivent pouvoir comprendre les thèmes abordés. La MBRC s'adresse à tous, sans distinction de niveau académique, pour une <strong>participation citoyenne</strong> inclusive.
                    </p>
                </article>

                <article class="content-card" style="background: rgba(0, 140, 59, 0.03);">
                    <h3 class="content-title" style="color: var(--green-primary);">La Sérénité</h3>
                    <p class="content-text">
                        La <strong>plateforme citoyenne</strong> est un environnement apaisé : pas de polémique, pas d'invectives, pas de confrontation émotionnelle. La raison et le respect guident les <strong>débats citoyens</strong>.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Méthode de Réflexion -->
<section class="section" itemscope itemtype="https://schema.org/HowTo">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Méthode de Réflexion</span>
            <h2 class="section-title" itemprop="name">Notre démarche de <strong>réflexion citoyenne</strong> : 5 étapes pour la <strong>participation citoyenne</strong></h2>
            <p class="section-description" itemprop="description">
                Une méthode exigeante, inspirée des grands <strong>think tanks</strong> internationaux, conçue pour permettre à chaque Béninois de comprendre les enjeux à travers l'<strong>éducation civique</strong> et l'<strong>analyse politique</strong>.
            </p>
        </div>

        <div class="manifeste-grid">
            <article class="content-card" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                <div class="manifeste-number" style="background: var(--green-primary); color: white;" aria-hidden="true">01</div>
                <h3 class="content-title" itemprop="name">Comprendre</h3>
                <p class="content-text" itemprop="text">
                    Avant de débattre, de juger ou de proposer, il faut comprendre. La MBRC commence par un travail minutieux de collecte d'informations fiables, d'<strong>analyse politique</strong> des réformes et textes publics, d'étude des décisions institutionnelles, et de vulgarisation claire.
                </p>
                <p class="content-text" style="font-weight: 600; color: var(--green-primary);">
                    Notre objectif : rendre intelligible ce qui est souvent opaque grâce à l'<strong>éducation civique</strong>.
                </p>
            </article>

            <article class="content-card" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                <div class="manifeste-number" style="background: var(--yellow-primary); color: white;" aria-hidden="true">02</div>
                <h3 class="content-title" itemprop="name">Débattre</h3>
                <p class="content-text" itemprop="text">
                    Une fois l'information comprise, elle doit être partagée et confrontée dans le respect. Nous organisons des <strong>débats citoyens</strong> apaisés, des échanges modérés, des sessions de <strong>réflexion collective</strong>. Tous les profils peuvent exprimer leur point de vue.
                </p>
                <p class="content-text" style="font-weight: 600; color: var(--yellow-dark);">
                    Le but : enrichir la compréhension collective, pas gagner un débat.
                </p>
            </article>

            <article class="content-card" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                <div class="manifeste-number" style="background: var(--red-primary); color: white;" aria-hidden="true">03</div>
                <h3 class="content-title" itemprop="name">Produire</h3>
                <p class="content-text" itemprop="text">
                    De cette <strong>réflexion citoyenne</strong> émergent des productions de qualité : notes de synthèse, études analytiques, dossiers thématiques, propositions citoyennes, recommandations éclairées, <strong>analyses prospectives</strong>.
                </p>
                <p class="content-text" style="font-weight: 600; color: var(--red-primary);">
                    La MBRC devient un <strong>laboratoire d'idées</strong> capable de formuler des orientations responsables pour le Bénin.
                </p>
            </article>

            <article class="content-card" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                <div class="manifeste-number" style="background: var(--green-primary); color: white;" aria-hidden="true">04</div>
                <h3 class="content-title" itemprop="name">Transmettre</h3>
                <p class="content-text" itemprop="text">
                    La transmission est au cœur de notre mission. Nous transmettons les connaissances produites, des <strong>formations citoyennes</strong>, des modules d'<strong>éducation civique</strong>, des <strong>ateliers citoyens</strong> et masterclasses, des programmes pédagogiques pour les jeunes.
                </p>
                <p class="content-text" style="font-weight: 600; color: var(--green-primary);">
                    L'objectif : élever le niveau de compréhension nationale et préparer la génération future.
                </p>
            </article>

            <article class="content-card" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                <div class="manifeste-number" style="background: var(--yellow-primary); color: white;" aria-hidden="true">05</div>
                <h3 class="content-title" itemprop="name">Consulter</h3>
                <p class="content-text" itemprop="text">
                    La MBRC fait de la <strong>consultation citoyenne</strong> un pilier fondamental. Grâce à des <strong>outils numériques de participation</strong> et des rencontres régulières, nous permettons à chaque citoyen béninois de donner son avis, proposer des idées, évaluer des pistes de réflexion, exprimer des préoccupations.
                </p>
                <p class="content-text" style="font-weight: 600; color: var(--yellow-dark);">
                    Résultat : une expression réelle du peuple, sans intermédiaire.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- Ateliers & Tables rondes -->
<section class="section section-light" itemscope itemtype="https://schema.org/EducationalOrganization">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Activités</span>
            <h2 class="section-title" itemprop="name"><strong>Ateliers citoyens</strong> & Tables rondes : Espaces de <strong>participation citoyenne active</strong></h2>
            <p class="section-description">
                Le cœur vivant de la <strong>plateforme citoyenne</strong> : des espaces de travail, d'échange, d'apprentissage et de production intellectuelle où les citoyens contribuent à la <strong>réflexion nationale</strong>.
            </p>
        </div>

        <div class="mission-grid">
            <article class="mission-card" itemscope itemtype="https://schema.org/Course">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Ateliers Citoyens</h3>
                <p class="mission-text" itemprop="description">
                    Sessions pédagogiques guidées pour rendre intelligible ce qui est complexe : <strong>analyse politique</strong> de réformes, compréhension des institutions, lecture de textes publics, vulgarisation d'enjeux économiques et sociaux du Bénin.
                </p>
                <ul class="mission-list">
                    <li>Apprentissage collectif structuré</li>
                    <li>Outils d'analyse critique solides</li>
                    <li>Compréhension concrète des enjeux</li>
                </ul>
            </article>

            <article class="mission-card featured" itemscope itemtype="https://schema.org/Event">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Tables Rondes Thématiques</h3>
                <p class="mission-text" itemprop="description">
                    Rencontres de profils variés (experts, professeurs, professionnels, <strong>diaspora béninoise</strong>, acteurs de terrain) pour aborder en profondeur un thème précis à travers des <strong>débats citoyens</strong> constructifs.
                </p>
                <ul class="mission-list">
                    <li>Introduction thématique structurée</li>
                    <li>Confrontation d'idées respectueuse</li>
                    <li>Formulation de propositions collectives</li>
                </ul>
            </article>

            <article class="mission-card">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Intelligence Collective</h3>
                <p class="mission-text">
                    Groupes d'études, cercles de discussion, sessions d'<strong>analyse guidée</strong>, travaux de <strong>réflexion citoyenne</strong> en équipe. Chacun apporte son expérience, son expertise, ses questions et ses idées pour le développement du Bénin.
                </p>
                <ul class="mission-list">
                    <li>Petits laboratoires citoyens</li>
                    <li>Analyses riches et structurées</li>
                    <li>Diversité représentative</li>
                </ul>
            </article>
        </div>

        <div style="margin-top: var(--space-2xl); max-width: 800px; margin-left: auto; margin-right: auto;">
            <div class="content-card" style="background: rgba(0, 140, 59, 0.05); border: 2px solid var(--green-primary);">
                <h3 class="content-title" style="text-align: center; color: var(--green-primary);">Finalité des Ateliers et Tables Rondes</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--space-md); margin-top: var(--space-md);">
                    <div style="text-align: center; margin-bottom: 35px;">
                        <strong style="color: var(--gray-900);">✓ Apprendre en groupe</strong>
                        <p style="font-size: 0.9375rem; color: var(--gray-600); margin-top: 0.5rem;">Pédagogie claire et participative</p>
                    </div>
                    <div style="text-align: center; margin-bottom: 35px;">
                        <strong style="color: var(--gray-900);">✓ Confronter sans conflit</strong>
                        <p style="font-size: 0.9375rem; color: var(--gray-600); margin-top: 0.5rem;">Transformer le désaccord en richesse</p>
                    </div>
                    <div style="text-align: center; margin-bottom: 35px;">
                        <strong style="color: var(--gray-900);">✓ Valoriser la diversité</strong>
                        <p style="font-size: 0.9375rem; color: var(--gray-600); margin-top: 0.5rem;">Chaque expérience compte</p>
                    </div>
                    <div style="text-align: center; margin-bottom: 35px;">
                        <strong style="color: var(--gray-900);">✓ Produire des propositions</strong>
                        <p style="font-size: 0.9375rem; color: var(--gray-600); margin-top: 0.5rem;">Analyses et orientations structurées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formations Citoyennes -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Formation Citoyenne</span>
            <h2 class="section-title"><strong>Formations citoyennes gratuites</strong> : <strong>Éducation civique</strong> pour tous les Béninois</h2>
            <p class="section-description">
                Des programmes pédagogiques modernes, accessibles et structurés, destinés à tous les citoyens béninois pour préparer une nouvelle génération lucide, disciplinée, patriote et capable de servir le Bénin avec compétence.
            </p>
        </div>

        <div class="plateforme-valeurs-grid">
            <article class="valeur-card">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Modules d'Éducation Civique</h3>
                <p class="valeur-text">
                    Les bases indispensables : comprendre ses droits et devoirs, saisir les principes de la République, connaître le fonctionnement de l'État et de la décentralisation au Bénin.
                </p>
            </article>

            <article class="valeur-card">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Formations sur les Institutions</h3>
                <p class="valeur-text">
                    Expliquer la Constitution béninoise, le rôle du Parlement, du gouvernement, de la justice et des institutions indépendantes. Comment lire un texte de loi, un budget, une réforme.
                </p>
            </article>

            <article class="valeur-card">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Pensée Critique</h3>
                <p class="valeur-text">
                    Dans un monde saturé d'informations, développer l'<strong>analyse critique</strong> des faits, identifier les sources fiables, distinguer opinion et réalité, raisonner avec rigueur.
                </p>
            </article>

            <article class="valeur-card">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Enjeux Économiques et Sociaux</h3>
                <p class="valeur-text">
                    Comprendre l'économie nationale béninoise, la fiscalité, les finances publiques, les problématiques sociales, les dynamiques culturelles et identitaires, les enjeux environnementaux.
                </p>
            </article>

            <article class="valeur-card">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Formation de la Jeunesse</h3>
                <p class="valeur-text">
                    Programmes spécifiques : leadership civique, responsabilité citoyenne, engagement communautaire, techniques de prise de parole, préparation à l'<strong>analyse politique</strong>.
                </p>
            </article>

            <article class="valeur-card">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Objectif Final</h3>
                <p class="valeur-text">
                    Préparer une nouvelle élite citoyenne béninoise : des hommes et des femmes informés, éthiques, courageux, disciplinés, capables de défendre le bien commun et de comprendre le pays avant de le servir.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- Séminaires & Universités d'été -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Événements Annuels</span>
            <h2 class="section-title">Séminaires nationaux & Universités d'été MBRC</h2>
        </div>

        <div class="content-grid" style="margin-bottom: 50px">
            <article class="content-card">
                <div class="content-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="content-title">Séminaires Nationaux</h3>
                <p class="content-text">
                    Un rendez-vous annuel de <strong>réflexion citoyenne</strong> profonde qui rassemble citoyens engagés, chercheurs, experts, professionnels, <strong>diaspora béninoise</strong>, étudiants et jeunes leaders.
                </p>
                <ul class="mission-list">
                    <li>Panels de discussion thématiques</li>
                    <li>Sessions d'analyse approfondie</li>
                    <li>Ateliers méthodologiques</li>
                    <li>Présentation de travaux MBRC</li>
                    <li>Rencontres intergénérationnelles</li>
                </ul>
            </article>

            <article class="content-card featured">
                <div class="content-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="content-title">Université d'Été MBRC</h3>
                <p class="content-text">
                    Une <strong>formation citoyenne</strong> intensive pour préparer et former de jeunes citoyens désireux de comprendre le fonctionnement de la République et de maîtriser les enjeux nationaux.
                </p>
                <ul class="mission-list">
                    <li>Cours et modules intensifs</li>
                    <li>Ateliers pratiques et simulations</li>
                    <li>Rencontres avec acteurs de référence</li>
                    <li>Programme "Génération éclairée"</li>
                </ul>
            </article>
        </div>

        <div style="margin-top: var(--space-2xl); max-width: 800px; margin: 0 auto; text-align: center;">
            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; font-weight: 600; color: var(--green-primary);">
                Ces événements ont pour ambition de renforcer l'unité citoyenne, renouer avec la pédagogie publique, créer une culture d'<strong>analyse</strong> sérieuse, connecter les Béninois du pays et de la <strong>diaspora</strong>, et former une génération d'acteurs capables de penser le Bénin avec lucidité et discipline intellectuelle.
            </p>
        </div>
    </div>
</section>

<!-- Comment Participer -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Participation</span>
            <h2 class="section-title">Comment participer à la <strong>plateforme citoyenne</strong> ?</h2>
            <p class="section-description">
                Plusieurs niveaux d'<strong>engagement civique</strong> sont possibles selon votre disponibilité et vos envies.
            </p>
        </div>

        <div class="histoire-layout">
            <div class="histoire-content">
                <h3 class="content-title">Observer</h3>
                <p class="content-text">
                    Suivez nos publications, assistez à nos événements, restez informé de nos travaux. Aucune obligation, vous consultez ce qui vous intéresse.
                </p>

                <h3 class="content-title" style="margin-top: 2rem;">Contribuer</h3>
                <p class="content-text">
                    Proposez des idées, posez des questions, partagez votre expérience. Participez aux discussions en ligne, réagissez aux publications.
                </p>

                <h3 class="content-title" style="margin-top: 2rem;">Co-construire</h3>
                <p class="content-text">
                    Rejoignez un groupe de <strong>réflexion citoyenne</strong>, participez à la rédaction d'analyses, aidez à organiser des événements. Devenez acteur de la <strong>plateforme</strong>.
                </p>

                <div class="histoire-cta" style="margin-top: 3rem;">
                    <a href="{{ route('rejoindre') }}" class="btn btn-primary btn-lg" aria-label="Rejoindre la plateforme citoyenne">
                        <span>Commencer maintenant</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="histoire-timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">Étape 1</div>
                        <h4>Inscription</h4>
                        <p>Créez votre compte membre en quelques minutes</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">Étape 2</div>
                        <h4>Exploration</h4>
                        <p>Découvrez les domaines et les groupes qui vous intéressent</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">Étape 3</div>
                        <h4>Engagement</h4>
                        <p>Rejoignez un groupe ou participez à votre premier événement</p>
                    </div>
                </div>

                <div class="timeline-item active">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">Étape 4</div>
                        <h4>Contribution</h4>
                        <p>Partagez vos idées et participez activement à la réflexion</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intelligence Collective -->
<section class="section section-light">
    <div class="container">
        <div class="cta-box" role="region" aria-label="Appel à l'action">
            <div class="cta-content">
                <h2 class="cta-title">L'intelligence collective au service du Bénin</h2>
                <p class="cta-description">
                    Ensemble, nous sommes plus intelligents, plus créatifs, plus pertinents. La MBRC est une <strong>plateforme citoyenne</strong> qui valorise chaque contribution, petite ou grande. Aucun citoyen ne détient seul la vérité, mais chacun détient une partie de la solution pour le développement du Bénin.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('apropos') }}" class="btn btn-white btn-lg" aria-label="En savoir plus sur la MBRC">
                    <span>En savoir plus</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
