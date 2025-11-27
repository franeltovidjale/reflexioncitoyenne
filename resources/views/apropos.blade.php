@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'À Propos de la MBRC | Histoire, Mission et Valeurs - MBRC Bénin')

@section('meta_description', 'Découvrez la Maison Béninoise de Réflexion Citoyenne : histoire, mission, vision et valeurs du MBRC indépendant pour le développement et la participation citoyenne au Bénin.')

@section('meta_keywords', 'à propos mbrc, histoire mbrc, mission citoyenne bénin, MBRC béninois, valeurs patriotisme, vision citoyenne, maison béninoise réflexion, plateforme indépendante bénin')

@section('canonical', route('apropos'))

@section('og_title', 'À Propos de la MBRC | MBRC Béninois')
@section('og_description', 'Découvrez l\'histoire et la mission de la Maison Béninoise de Réflexion Citoyenne, MBRC indépendant pour la participation citoyenne au Bénin.')
@section('og_image', asset('images/og-apropos.jpg'))

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
      "name": "À propos",
      "item": "{{ route('apropos') }}"
    }
  ]
}
</script>
@endpush

@section('content')
<!-- Page Hero -->
<section class="section" itemscope itemtype="https://schema.org/AboutPage">
    <div class="container">
        <div class="page-hero-content" style="margin-bottom: -80px !important">
            <nav class="breadcrumb" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">À propos</span>
            </nav>

            <h3 class="page-title" itemprop="name">
                À propos de la MBRC
            </h3>

            <p class="page-description" itemprop="description">
                Découvrez l'histoire, la <strong>vision citoyenne</strong> et les <strong>valeurs</strong> qui animent la <strong>Maison Béninoise de Réflexion Citoyenne</strong>.
            </p>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="section">
    <div class="container">
        <div class="content-grid">
            <article class="content-card" itemscope itemtype="https://schema.org/Mission">
                <div class="content-icon vision" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h2 class="content-title" itemprop="name">Notre <strong>Vision </strong></h2>
                <p class="content-text" itemprop="description">
                    La MBRC porte une <strong>vision</strong> simple et ambitieuse : bâtir une société béninoise plus éclairée, plus exigeante, plus patriote et plus unie, où chaque citoyen — quel que soit son âge, son statut ou son niveau d'instruction — a les moyens de comprendre les enjeux du pays et d'y contribuer avec lucidité à travers la <strong>participation citoyenne</strong>.
                </p>
                <p class="content-text">
                    Nous imaginons un Bénin où la <strong>citoyenneté</strong> est vécue activement et non subie, où l'information est un droit et non un privilège, où la <strong>réflexion collective</strong> remplace la résignation silencieuse.
                </p>
                <p class="content-text">
                    La MBRC veut être le lieu où se renouvelle l'<strong>élite citoyenne</strong> du pays : une élite non pas fondée sur les titres ou les positions, mais sur la rigueur, la lucidité, la capacité d'<strong>analyse</strong> et l'amour du Bénin.
                </p>
            </article>

            <article class="content-card featured" itemscope itemtype="https://schema.org/Mission">
                <div class="content-icon mission" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h2 class="content-title" itemprop="name">Notre <strong>Mission</strong> </h2>
                <p class="content-text" itemprop="description">
                    La <strong>Maison Béninoise de Réflexion Citoyenne</strong> (MBRC) poursuit une <strong>mission</strong> profonde et structurante : réarmer intellectuellement le citoyen béninois, renforcer son autonomie de pensée et bâtir un espace durable où la compréhension collective guide l'avenir du Bénin.
                </p>
                <h3 style="font-weight: 700; margin-top: 1.5rem; margin-bottom: 0.5rem;">Nos quatre piliers :</h3>
                <ul class="mission-list">
                    <li>Éclairer le citoyen par une information fiable, neutre et accessible</li>
                    <li>Former une génération de <strong>citoyens éclairés</strong>, critiques et responsables</li>
                    <li>Rassembler toutes les forces vives du pays dans un esprit de dialogue</li>
                    <li>Développer un <strong>patriotisme moderne</strong> et défendre le bien commun</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- Manifeste -->
<section class="section section-dark" itemscope itemtype="https://schema.org/CreativeWork">
    <div class="container">
        <div class="manifeste-content">
            {{-- <button type="button"
                onclick="openManifesteModal()"
                class="btn btn-primary"
                style="margin-bottom: var(--space-lg);"
                aria-label="Télécharger le manifeste fondateur">
                Manifeste Fondateur
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </button> --}}
<button type="button"
        onclick="openManifesteModal()"
        class="btn btn-primary manifeste-pulse"
        style="margin-bottom: var(--space-lg);"
        aria-label="Télécharger le manifeste fondateur">
    Manifeste Fondateur
    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
        </path>
    </svg>
</button>

<style>
@keyframes manifestePulse {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.05);
        opacity: 0.9;
    }
}

.manifeste-pulse {
    animation: manifestePulse 2s ease-in-out infinite;
}

.manifeste-pulse:hover {
    animation: none;
}
</style>

            <h2 class="section-title light" itemprop="name">Les principes qui guident  <strong>MBRC</strong></h2>

            <div class="manifeste-grid">
                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">I</div>
                    <h3 itemprop="name">Redonner sens à la <strong>citoyenneté béninoise</strong></h3>
                    <p itemprop="text">
                        Nous affirmons que la <strong>citoyenneté</strong> est un devoir permanent. Elle suppose l'accès à l'information, la capacité de discernement, la compréhension des institutions, et la vigilance face aux enjeux collectifs.
                    </p>
                </article>

                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">II</div>
                    <h3 itemprop="name">Défendre la transparence et la pédagogie</h3>
                    <p itemprop="text">
                        Nous considérons que tout acte public mérite d'être expliqué. La réforme n'a de valeur que si elle est comprise. La décision n'a de légitimité que si elle est intelligible pour tous les citoyens béninois.
                    </p>
                </article>

                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">III</div>
                    <h3 itemprop="name">Construire des espaces sûrs de <strong>dialogue citoyen</strong></h3>
                    <p itemprop="text">
                        Nous refusons la conflictualité, la violence verbale, les attaques personnelles et la polarisation. Nous affirmons que le désaccord ne doit jamais être un motif de rupture, mais un outil de compréhension dans la <strong>participation citoyenne</strong>.
                    </p>
                </article>

                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">IV</div>
                    <h3 itemprop="name">Élever la <strong>jeunesse béninoise</strong></h3>
                    <p itemprop="text">
                        Une nation qui ne forme pas sa jeunesse prépare sa propre fragilisation. Nous nous engageons à transmettre aux jeunes générations la pensée critique, la discipline intellectuelle et le sens de l'histoire à travers l'<strong>éducation civique</strong>.
                    </p>
                </article>

                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">V</div>
                    <h3 itemprop="name">Promouvoir un <strong>patriotisme</strong> exigeant</h3>
                    <p itemprop="text">
                        Le <strong>patriotisme</strong> que nous défendons interroge sans détruire, aime sans aveuglement, protège sans s'opposer, élève sans exclure. Le Bénin mérite un <strong>patriotisme</strong> fondé sur la connaissance et la dignité.
                    </p>
                </article>

                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">VI</div>
                    <h3 itemprop="name">Former une <strong>élite citoyenne</strong> nouvelle</h3>
                    <p itemprop="text">
                        Nous voulons contribuer à faire émerger une <strong>élite citoyenne</strong> fondée sur la compétence, la lucidité, la créativité, l'intégrité et le sens du bien commun. Non une élite de privilèges, mais une élite de valeurs.
                    </p>
                </article>

                <article class="manifeste-item" itemprop="hasPart" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="manifeste-number" aria-hidden="true">VII</div>
                    <h3 itemprop="name">Rassembler les forces vives du Bénin</h3>
                    <p itemprop="text">
                        La MBRC accueille tous les Béninois : du secteur informel ou moderne, du monde rural ou des villes, du privé ou du public, jeunes, adultes ou aînés, du pays ou de la <strong>diaspora béninoise</strong>.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Valeurs -->
<section class="section" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Valeurs</span>
            <h2 class="section-title" itemprop="name">Les <strong>valeurs</strong> qui guident nos actions</h2>
            <p class="section-description">
                Les <strong>valeurs</strong> de la MBRC constituent le socle moral et intellectuel de notre engagement citoyen. Elles orientent nos actions, guident nos choix et définissent l'esprit dans lequel nous construisons cet espace de <strong>réflexion citoyenne</strong>.
            </p>
        </div>

        <div class="valeurs-grid">
            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="1">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">La Vérité et la Transparence</h3>
                <p class="valeur-text">
                    Nous croyons que la vérité est un devoir citoyen et un pilier de la République béninoise. La MBRC s'engage à diffuser une information honnête, vérifiable et compréhensible.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="2">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Le <strong>Patriotisme</strong> Responsable</h3>
                <p class="valeur-text">
                    Notre amour du Bénin s'exprime par la responsabilité, la connaissance et la volonté sincère de servir le pays. Un <strong>patriotisme</strong> serein, exigeant et profondément enraciné dans le bien commun.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="3">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">L'Indépendance et la Neutralité</h3>
                <p class="valeur-text">
                    La MBRC est un <strong>MBRC</strong> libre de contraintes politiques, de pressions partisanes, de toute tentative de récupération. Cette <strong>indépendance</strong> garantit la crédibilité de nos analyses.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="4">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">L'Excellence intellectuelle</h3>
                <p class="valeur-text">
                    Nous valorisons la rigueur, la précision, la cohérence, l'<strong>analyse</strong> profonde. L'excellence n'est pas un luxe : c'est une nécessité pour construire une société éclairée.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="5">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Le Respect et le Dialogue</h3>
                <p class="valeur-text">
                    La MBRC est un espace où la parole circule en paix, où les idées se confrontent sans s'affronter dans le cadre de la <strong>participation citoyenne</strong>. Le respect est une condition essentielle de toute <strong>réflexion collective</strong>.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="6">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">La Transmission et l'<strong>Éducation</strong></h3>
                <p class="valeur-text">
                    Nous croyons que la force d'une nation repose sur la qualité de l'<strong>éducation civique</strong> transmise à ses enfants. La transmission du savoir est un pilier central de notre présence.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="7">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Le Sens du Bien Commun</h3>
                <p class="valeur-text">
                    Le bien commun est notre étoile polaire. Nos réflexions, nos analyses et nos actions doivent toujours servir l'intérêt collectif béninois et non les ambitions personnelles.
                </p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Thing">
                <meta itemprop="position" content="8">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">L'Humilité et la Responsabilité</h3>
                <p class="valeur-text">
                    Nous reconnaissons que personne ne détient toute la vérité. Chaque citoyen béninois apporte une part de lumière. C'est dans cette humilité que naît la responsabilité citoyenne.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- Histoire -->
<section class="section section-light" itemscope itemtype="https://schema.org/Article">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Notre Histoire</span>
            <h2 class="section-title" itemprop="headline">Une initiative citoyen née d’un besoin</h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;text-align: justify;" itemprop="articleBody">
            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                La <strong>Maison Béninoise de Réflexion Citoyenne</strong> (MBRC) est née d'un moment de bascule dans la conscience collective béninoise. Au fil des années, un malaise profond s'est installé : le peuple ne se reconnaît plus réellement dans ses responsables politiques, ni dans les orientations du pouvoir exécutif.
            </p>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                Les décisions publiques, souvent prises sans véritable explication, ont peu à peu éloigné les citoyens des institutions qui devraient les protéger et les représenter. Dans les foyers, les marchés, les ateliers, les écoles, comme au sein de la <strong>diaspora béninoise</strong>, une même inquiétude revenait : « Pourquoi ne sommes-nous plus consultés ? Pourquoi avons-nous l'impression que les choix du pays se font sans nous ? »
            </p>

            <div style="background: rgba(0, 140, 59, 0.05); padding: var(--space-xl); border-radius: var(--radius-xl); border-left: 4px solid var(--green-primary); margin: var(--space-xl) 0;">
                <h3 style="color: var(--green-primary); margin-bottom: var(--space-md);">Le rôle des médias</h3>
                <p class="content-text">
                    Un autre phénomène a contribué à affaiblir la compréhension citoyenne : le recul du rôle critique et pédagogique des médias. Beaucoup d'entre eux, pris entre pressions politiques, contraintes économiques ou dépendances institutionnelles, se sont progressivement éloignés de leur mission première : informer, questionner et éclairer.
                </p>
                <p class="content-text">
                    Cette situation nourrit une forme de propagande involontaire, où la pluralité des voix et la diversité des analyses disparaissent au profit d'un récit unique. Face à ce paysage médiatique affaibli, le citoyen se retrouve souvent seul pour décoder les enjeux.
                </p>
            </div>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; font-weight: 600; color: var(--gray-900);">
                C'est dans ce vide que s'est levée une génération de citoyens — enseignants, artisans, universitaires, fonctionnaires, étudiants, cadres, professionnels du secteur informel, membres de la <strong>diaspora béninoise</strong> — unis par une profonde inquiétude, mais aussi par un immense amour pour le Bénin.
            </p>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                De leurs échanges est née une idée : créer une <strong>plateforme indépendante</strong>, neutre, ouverte à tous, capable d'expliquer les enjeux nationaux, de décrypter les réformes, de clarifier le rôle des institutions, de former la jeunesse, de restaurer la pédagogie citoyenne, et de reconstruire la confiance par la connaissance.
            </p>

            <div style="background: linear-gradient(135deg, var(--green-primary), var(--green-dark)); padding: var(--space-xl); border-radius: var(--radius-xl); color: white; margin-top: var(--space-xl); text-align: center;">
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: var(--space-md);">Ainsi est née la MBRC</h3>
                <p style="font-size: 1.125rem; line-height: 1.8; opacity: 0.95;">
                    Non pas comme un mouvement d'opposition, non comme une réaction impulsive, mais comme un espace sérieux, calme et structuré, entièrement dédié à la compréhension et au bien commun.
                </p>
            </div>

            <div style="margin-top: var(--space-xl); text-align: center;">
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; font-style: italic;">
                    Notre histoire n'est pas celle d'un affrontement. C'est celle d'une reconstruction intellectuelle. D'une volonté de réhabiliter la <strong>réflexion citoyenne</strong> comme fondation du <strong>patriotisme béninois</strong>. D'un engagement pour que le peuple redevienne acteur, et non spectateur, de sa propre République.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Équipe Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Notre Équipe</span>
            <h2 class="section-title">Les filles et fils du Bénin engagés pour le bien commun</h2>
            <p class="section-description">
                Citoyens béninois de tout horizon, unis par la même passion pour le Bénin et la <strong>participation citoyenne</strong>
            </p>
        </div>

        <div class="team-grid">
            <article class="team-card">
                <div class="team-avatar">
                    <div class="avatar-placeholder" aria-hidden="true">AF</div>
                </div>
                <h3 class="team-name">Fondateurs</h3>
                <p class="team-role">Collectif de citoyens engagés</p>
                <p class="team-bio">Un groupe pluriel de Béninois déterminés à créer un espace de <strong>réflexion indépendant</strong>.</p>
            </article>

            <article class="team-card">
                <div class="team-avatar">
                    <div class="avatar-placeholder" aria-hidden="true">CE</div>
                </div>
                <h3 class="team-name">Coordination</h3>
                <p class="team-role">Équipe de bénévoles</p>
                <p class="team-bio">Des professionnels de divers horizons qui donnent de leur temps pour la <strong>communauté citoyenne</strong>.</p>
            </article>

            <article class="team-card">
                <div class="team-avatar">
                    <div class="avatar-placeholder" aria-hidden="true">CM</div>
                </div>
                <h3 class="team-name">Contributeurs</h3>
                <p class="team-role">Experts et analystes</p>
                <p class="team-bio">Des spécialistes qui partagent leurs connaissances pour enrichir nos publications.</p>
            </article>
        </div>

        <div class="team-join">
            <p>Vous souhaitez rejoindre l'équipe du <strong>MBRC</strong> ?</p>
            <a href="{{ route('rejoindre') }}" class="btn btn-primary" aria-label="Rejoindre pour rejoindre l'équipe MBRC">Rejoindre maintenant</a>
        </div>
    </div>
</section>
@endsection
