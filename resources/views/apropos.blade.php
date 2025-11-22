@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<!-- Page Hero -->
<section class="section">
    <div class="container">
        <div class="page-hero-content" style="margin-bottom: -80px !important">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>À propos</span>
            </nav>
            <h1 class="page-title">À propos de la MBRC</h1>
            <p class="page-description">
                Découvrez l'histoire, la vision et les valeurs qui animent la Maison Béninoise de Réflexion Citoyenne.
            </p>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="section">
    <div class="container">
        <div class="content-grid">
            <div class="content-card">
                <div class="content-icon vision">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h2 class="content-title">Notre Vision</h2>
                <p class="content-text">
                    La MBRC porte une vision simple et ambitieuse : bâtir une société béninoise plus éclairée, plus exigeante, plus patriotique et plus unie, où chaque citoyen — quel que soit son âge, son statut ou son niveau d'instruction — a les moyens de comprendre les enjeux du pays et d'y contribuer avec lucidité.
                </p>
                <p class="content-text">
                    Nous imaginons un Bénin où la citoyenneté est vécue activement et non subie, où l'information est un droit et non un privilège, où la réflexion collective remplace la résignation silencieuse.
                </p>
                <p class="content-text">
                    La MBRC veut être le lieu où se renouvelle l'élite citoyenne du pays : une élite non pas fondée sur les titres ou les positions, mais sur la rigueur, la lucidité, la capacité d'analyse et l'amour du Bénin.
                </p>
            </div>

            <div class="content-card featured">
                <div class="content-icon mission">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h2 class="content-title">Notre Mission</h2>
                <p class="content-text">
                    La Maison Béninoise de Réflexion Citoyenne (MBRC) poursuit une mission profonde et structurante : réarmer intellectuellement le citoyen, renforcer son autonomie de pensée et bâtir un espace durable où la compréhension collective guide l'avenir du Bénin.
                </p>
                <h3 style="font-weight: 700; margin-top: 1.5rem; margin-bottom: 0.5rem;">Nos quatre piliers :</h3>
                <ul class="mission-list">
                    <li>Éclairer le citoyen par une information fiable, neutre et accessible</li>
                    <li>Former une génération de citoyens éclairés, critiques et responsables</li>
                    <li>Rassembler toutes les forces vives du pays dans un esprit de dialogue</li>
                    <li>Développer un patriotisme moderne et défendre le bien commun</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Manifeste -->
<section class="section section-dark">
    <div class="container">
        <div class="manifeste-content">
            {{-- <a href="{{ asset('documents/LE MANIFESTE MBRC.pdf') }}"
                class="btn btn-primary"
                download="MBRC-Manifeste.pdf"
                style="margin-bottom: var(--space-lg);">
                Manifeste Fondateur
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </a> --}}


            <button type="button"
                onclick="openManifesteModal()"
                class="btn btn-primary"
                style="margin-bottom: var(--space-lg);">
                Manifeste Fondateur
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </button>

            {{-- <span class="section-badge light">Manifeste Fondateur</span> --}}
            <h2 class="section-title light">Sept principes qui nous guident</h2>

            <div class="manifeste-grid">
                <div class="manifeste-item">
                    <div class="manifeste-number">I</div>
                    <h3>Redonner sens à la citoyenneté</h3>
                    <p>
                        Nous affirmons que la citoyenneté est un devoir permanent. Elle suppose l'accès à l'information, la capacité de discernement, la compréhension des institutions, et la vigilance face aux enjeux collectifs.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">II</div>
                    <h3>Défendre la transparence et la pédagogie</h3>
                    <p>
                        Nous considérons que tout acte public mérite d'être expliqué. La réforme n'a de valeur que si elle est comprise. La décision n'a de légitimité que si elle est intelligible.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">III</div>
                    <h3>Construire des espaces sûrs</h3>
                    <p>
                        Nous refusons la conflictualité, la violence verbale, les attaques personnelles et la polarisation. Nous affirmons que le désaccord ne doit jamais être un motif de rupture, mais un outil de compréhension.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">IV</div>
                    <h3>Élever la jeunesse</h3>
                    <p>
                        Une nation qui ne forme pas sa jeunesse prépare sa propre fragilisation. Nous nous engageons à transmettre aux jeunes générations la pensée critique, la discipline intellectuelle et le sens de l'histoire.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">V</div>
                    <h3>Promouvoir un patriotisme exigeant</h3>
                    <p>
                        Le patriotisme que nous défendons interroge sans détruire, aime sans aveuglement, protège sans s'opposer, élève sans exclure. Le Bénin mérite un patriotisme fondé sur la connaissance et la dignité.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">VI</div>
                    <h3>Former une élite citoyenne nouvelle</h3>
                    <p>
                        Nous voulons contribuer à faire émerger une élite citoyenne fondée sur la compétence, la lucidité, la créativité, l'intégrité et le sens du bien commun. Non une élite de privilèges, mais une élite de valeurs.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">VII</div>
                    <h3>Rassembler les forces vives</h3>
                    <p>
                        La MBRC accueille tous les Béninois : du secteur informel ou moderne, du monde rural ou des villes, du privé ou du public, jeunes, adultes ou aînés, du pays ou de la diaspora.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Valeurs -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Valeurs</span>
            <h2 class="section-title">Les repères qui guident notre action</h2>
            <p class="section-description">
                Les valeurs de la MBRC constituent le socle moral et intellectuel de notre engagement. Elles orientent nos actions, guident nos choix et définissent l'esprit dans lequel nous construisons cet espace citoyen.
            </p>
        </div>

        <div class="valeurs-grid">
            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">La Vérité et la Transparence</h3>
                <p class="valeur-text">
                    Nous croyons que la vérité est un devoir citoyen et un pilier de la République. La MBRC s'engage à diffuser une information honnête, vérifiable et compréhensible.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Le Patriotisme Responsable</h3>
                <p class="valeur-text">
                    Notre amour du Bénin s'exprime par la responsabilité, la connaissance et la volonté sincère de servir le pays. Un patriotisme serein, exigeant et profondément enraciné dans le bien commun.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">L'Indépendance et la Neutralité</h3>
                <p class="valeur-text">
                    La MBRC est un espace libre de contraintes politiques, de pressions partisanes, de toute tentative de récupération. Cette indépendance garantit la crédibilité de nos analyses.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">L'Excellence intellectuelle</h3>
                <p class="valeur-text">
                    Nous valorisons la rigueur, la précision, la cohérence, l'analyse profonde. L'excellence n'est pas un luxe : c'est une nécessité pour construire une société éclairée.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Le Respect et le Dialogue</h3>
                <p class="valeur-text">
                    La MBRC est un espace où la parole circule en paix, où les idées se confrontent sans s'affronter. Le respect est une condition essentielle de toute réflexion collective.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">La Transmission et l'Éducation</h3>
                <p class="valeur-text">
                    Nous croyons que la force d'une nation repose sur la qualité de l'éducation civique transmise à ses enfants. La transmission du savoir est un pilier central de notre présence.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Le Sens du Bien Commun</h3>
                <p class="valeur-text">
                    Le bien commun est notre étoile polaire. Nos réflexions, nos analyses et nos actions doivent toujours servir l'intérêt collectif et non les ambitions personnelles.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">L'Humilité et la Responsabilité</h3>
                <p class="valeur-text">
                    Nous reconnaissons que personne ne détient toute la vérité. Chaque citoyen apporte une part de lumière. C'est dans cette humilité que naît la responsabilité.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Histoire -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Notre Histoire</span>
            <h2 class="section-title">Une initiative née d'un besoin</h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;text-align: justify;">
            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                La Maison Béninoise de Réflexion Citoyenne (MBRC) est née d'un moment de bascule dans la conscience collective béninoise. Au fil des années, un malaise profond s'est installé : le peuple ne se reconnaît plus réellement dans ses responsables politiques, ni dans les orientations du pouvoir exécutif.
            </p>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                Les décisions publiques, souvent prises sans véritable explication, ont peu à peu éloigné les citoyens des institutions qui devraient les protéger et les représenter. Dans les foyers, les marchés, les ateliers, les écoles, comme au sein de la diaspora, une même inquiétude revenait : « Pourquoi ne sommes-nous plus consultés ? Pourquoi avons-nous l'impression que les choix du pays se font sans nous ? »
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
                C'est dans ce vide que s'est levée une génération de citoyens — enseignants, artisans, universitaires, fonctionnaires, étudiants, cadres, professionnels du secteur informel, membres de la diaspora — unis par une profonde inquiétude, mais aussi par un immense amour pour le Bénin.
            </p>

            <p class="content-text" style="font-size: 1.125rem; line-height: 1.8;">
                De leurs échanges est née une idée : créer une plateforme indépendante, neutre, ouverte à tous, capable d'expliquer les enjeux nationaux, de décrypter les réformes, de clarifier le rôle des institutions, de former la jeunesse, de restaurer la pédagogie citoyenne, et de reconstruire la confiance par la connaissance.
            </p>

            <div style="background: linear-gradient(135deg, var(--green-primary), var(--green-dark)); padding: var(--space-xl); border-radius: var(--radius-xl); color: white; margin-top: var(--space-xl); text-align: center;">
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: var(--space-md);">Ainsi est née la MBRC</h3>
                <p style="font-size: 1.125rem; line-height: 1.8; opacity: 0.95;">
                    Non pas comme un mouvement d'opposition, non comme une réaction impulsive, mais comme un espace sérieux, calme et structuré, entièrement dédié à la compréhension et au bien commun.
                </p>
            </div>

            <div style="margin-top: var(--space-xl); text-align: center;">
                <p class="content-text" style="font-size: 1.125rem; line-height: 1.8; font-style: italic;">
                    Notre histoire n'est pas celle d'un affrontement. C'est celle d'une reconstruction intellectuelle. D'une volonté de réhabiliter la réflexion citoyenne comme fondation du patriotisme béninois. D'un engagement pour que le peuple redevienne acteur, et non spectateur, de sa propre République.
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
            <h2 class="section-title">Les filles et fils du Bénin derrière la MBRC</h2>
            <p class="section-description">
                Citoyens Béninois de tout horizon, unis par la même passion pour le Bénin
            </p>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar">
                    <div class="avatar-placeholder">AF</div>
                </div>
                <h3 class="team-name">Fondateurs</h3>
                <p class="team-role">Collectif de citoyens engagés</p>
                <p class="team-bio">Un groupe pluriel de Béninois déterminés à créer un espace de réflexion indépendant.</p>
            </div>

            <div class="team-card">
                <div class="team-avatar">
                    <div class="avatar-placeholder">CE</div>
                </div>
                <h3 class="team-name">Coordination</h3>
                <p class="team-role">Équipe de bénévoles</p>
                <p class="team-bio">Des professionnels de divers horizons qui donnent de leur temps pour la communauté.</p>
            </div>

            <div class="team-card">
                <div class="team-avatar">
                    <div class="avatar-placeholder">CM</div>
                </div>
                <h3 class="team-name">Contributeurs</h3>
                <p class="team-role">Experts et analystes</p>
                <p class="team-bio">Des spécialistes qui partagent leurs connaissances pour enrichir nos publications.</p>
            </div>
        </div>

        <div class="team-join">
            <p>Vous souhaitez rejoindre l'équipe ?</p>
            <a href="{{ route('rejoindre') }}" class="btn btn-primary">Postuler maintenant</a>
        </div>
    </div>
</section>
@endsection
