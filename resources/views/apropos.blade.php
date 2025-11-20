@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<!-- Page Hero -->
{{-- <section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
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
</section> --}}

<!-- Vision & Mission -->
<section class="section">
    <div class="container">
    <div class="container">
        <div class="page-hero-content">
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
                    Nous rêvons d'un Bénin où la réflexion citoyenne n'est pas réservée à quelques spécialistes, mais devient une habitude collective. Un pays où l'on prend le temps d'analyser, de débattre sereinement et de comprendre avant de juger.
                </p>
                <p class="content-text">
                    La MBRC se voit comme une maison ouverte : un espace où l'on peut venir avec ses questions, ses doutes, ses connaissances et sa bonne volonté, pour construire ensemble une culture citoyenne plus forte.
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
                    Notre mission est d'offrir des outils de compréhension : des textes, des échanges, des formations, des événements. Nous voulons aider chaque citoyen, quel que soit son niveau d'étude ou son parcours, à mieux saisir les enjeux politiques, économiques, sociaux et institutionnels.
                </p>
                <p class="content-text">
                    La MBRC ne prend pas position en faveur d'un camp ou d'un autre. Elle s'attache à la rigueur, à la pédagogie et à l'équilibre des points de vue.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Manifeste -->
<section class="section section-dark">
    <div class="container">
        <div class="manifeste-content">
            <span class="section-badge light">Manifeste Fondateur</span>
            <h2 class="section-title light">Pourquoi cette maison d'idées ?</h2>

            <div class="manifeste-grid">
                <div class="manifeste-item">
                    <div class="manifeste-number">01</div>
                    <h3>Le Constat</h3>
                    <p>
                        La MBRC est née d'un constat simple : beaucoup de Béninois se sentent concernés par la vie de leur pays, mais manquent d'espaces pour en parler calmement, pour poser des questions, pour sortir des slogans et des tensions du quotidien.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">02</div>
                    <h3>La Réponse</h3>
                    <p>
                        Face à ces frustrations, nous avons choisi de bâtir un lieu de réflexion, un « laboratoire citoyen » où les questions difficiles peuvent être abordées sans simplisme, où les institutions peuvent être expliquées, où les réformes peuvent être décodées.
                    </p>
                </div>

                <div class="manifeste-item">
                    <div class="manifeste-number">03</div>
                    <h3>Les Principes</h3>
                    <p>
                        Ce manifeste repose sur le respect, la pluralité, la recherche du bien commun et la conviction qu'un peuple informé est un peuple plus libre. Nous croyons au pouvoir de la connaissance partagée.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Valeurs -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Valeurs</span>
            <h2 class="section-title">Les repères qui guident notre action</h2>
        </div>

        <div class="valeurs-grid">
            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Rigueur</h3>
                <p class="valeur-text">
                    Prendre le temps de vérifier, d'expliquer, de nuancer. Chaque analyse est documentée et sourcée.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Pluralisme</h3>
                <p class="valeur-text">
                    Accueillir la diversité des expériences et des points de vue sans discrimination.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Humanisme</h3>
                <p class="valeur-text">
                    Voir d'abord l'être humain avant les étiquettes et les appartenances politiques.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Bien Commun</h3>
                <p class="valeur-text">
                    Orienter les réflexions vers ce qui sert la société dans son ensemble.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Pédagogie</h3>
                <p class="valeur-text">
                    Rendre accessible les concepts complexes sans les simplifier à l'excès.
                </p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Indépendance</h3>
                <p class="valeur-text">
                    Maintenir notre neutralité politique et notre autonomie intellectuelle.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Histoire -->
<section class="section">
    <div class="container">
        <div class="histoire-layout">
            <div class="histoire-content">
                <span class="section-badge">Notre Histoire</span>
                <h2 class="section-title">Une initiative née de messages et d'espoir</h2>
                <p class="histoire-text">
                    La MBRC a commencé lorsqu'un groupe de Béninois, au pays et dans la diaspora, a pris conscience d'un phénomène : la colère et la fatigue grandissaient, mais les lieux de compréhension et de réflexion restaient rares.
                </p>
                <p class="histoire-text">
                    À partir d'échanges, de discussions et de partages de messages, l'idée d'une « maison de réflexion citoyenne » s'est imposée. Une maison sans drapeau partisan, mais avec une ambition claire : reconnecter les citoyens au sens, à la connaissance et à la responsabilité collective.
                </p>
                <p class="histoire-text strong">
                    Cette histoire est encore en cours d'écriture. Chaque personne qui rejoint la MBRC en devient, à sa manière, co-auteur.
                </p>

                <div class="histoire-cta">
                    <a href="{{ route('rejoindre') }}" class="btn btn-primary">
                        <span>Écrire l'histoire avec nous</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="histoire-timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h4>Les Prémices</h4>
                        <p>Premières discussions et échanges entre citoyens concernés par l'avenir du Bénin.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <h4>Fondation</h4>
                        <p>Création officielle de la MBRC et mise en place des premiers groupes de réflexion.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2025</div>
                        <h4>Expansion</h4>
                        <p>Lancement de la plateforme digitale et organisation des premiers événements citoyens.</p>
                    </div>
                </div>

                <div class="timeline-item active">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">Aujourd'hui</div>
                        <h4>Croissance</h4>
                        <p>Des centaines de membres actifs et une communauté grandissante au Bénin et à l'international.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Équipe Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Notre Équipe</span>
            <h2 class="section-title">Les visages derrière la MBRC</h2>
            <p class="section-description">
                Une équipe diverse et engagée, unie par la même passion pour le Bénin.
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
