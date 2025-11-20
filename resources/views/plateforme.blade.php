@extends('layouts.app')

@section('title', 'La Plateforme')

@section('content')
<!-- Page Hero -->
{{-- <section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>La Plateforme</span>
            </nav>
            <h1 class="page-title">Comment fonctionne la MBRC ?</h1>
            <p class="page-description">
                Découvrez notre méthode de travail, nos outils et comment vous pouvez participer activement.
            </p>
        </div>
    </div>
</section> --}}

<!-- Fonctionnement -->
<section class="section">
    <div class="container">
        {{-- <div class="section-header">
            <span class="section-badge">Fonctionnement</span>
            <h2 class="section-title">Une organisation structurée et transparente</h2>
        </div> --}}
    <div class="container m-3">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>La Plateforme</span>
            </nav>
            <h1 class="page-title">Comment fonctionne la MBRC ?</h1>
            <p class="page-description">
                Découvrez notre méthode de travail, nos outils et comment vous pouvez participer activement.
            </p>
        </div>
    </div>

        <div class="content-grid mx-5">
            <div class="content-card">
                <div class="content-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="content-title">Structure</h3>
                <p class="content-text">
                    La plateforme est organisée en 12 domaines de réflexion, avec des groupes de travail dédiés à chaque thématique. Chaque membre peut rejoindre un ou plusieurs groupes selon ses centres d'intérêt.
                </p>
            </div>

            <div class="content-card">
                <div class="content-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="content-title">Productions</h3>
                <p class="content-text">
                    Nos travaux sont publiés sous forme de rapports, analyses, notes de réflexion et dossiers thématiques. Chaque publication suit un processus rigoureux de vérification et de relecture.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Méthode -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header">
            <span class="section-badge light">Méthode</span>
            <h2 class="section-title light">Notre approche de la réflexion citoyenne</h2>
        </div>

        <div class="manifeste-grid">
            <div class="manifeste-item">
                <div class="manifeste-number">01</div>
                <h3>Écoute</h3>
                <p>
                    Nous commençons par écouter : les citoyens, les experts, les acteurs de terrain. Comprendre les réalités vécues avant de théoriser.
                </p>
            </div>

            <div class="manifeste-item">
                <div class="manifeste-number">02</div>
                <h3>Analyse</h3>
                <p>
                    Nous analysons les données, les faits, les tendances. Nous cherchons à comprendre les causes profondes plutôt que de nous arrêter aux symptômes.
                </p>
            </div>

            <div class="manifeste-item">
                <div class="manifeste-number">03</div>
                <h3>Confrontation</h3>
                <p>
                    Nous confrontons les idées dans le respect. Chaque point de vue est entendu, chaque argument est examiné avec sérieux.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Activités -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos Activités</span>
            <h2 class="section-title">Ce que nous proposons</h2>
        </div>

        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Ateliers & Tables rondes</h3>
                <p class="mission-text">
                    Des rencontres régulières pour approfondir une thématique, échanger entre citoyens et experts.
                </p>
                <ul class="mission-list">
                    <li>Sessions en ligne et en présentiel</li>
                    <li>Format participatif</li>
                    <li>Compte-rendus accessibles</li>
                </ul>
            </div>

            <div class="mission-card featured">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Formations citoyennes</h3>
                <p class="mission-text">
                    Des modules pédagogiques pour comprendre les institutions, l'économie, la gouvernance.
                </p>
                <ul class="mission-list">
                    <li>Cours accessibles à tous</li>
                    <li>Supports pédagogiques</li>
                    <li>Certificats de participation</li>
                </ul>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Groupes de réflexion</h3>
                <p class="mission-text">
                    Des espaces de travail collaboratif pour produire analyses et recommandations citoyennes.
                </p>
                <ul class="mission-list">
                    <li>Travail en équipe</li>
                    <li>Accompagnement méthodologique</li>
                    <li>Publication des travaux</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Participation -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Participation</span>
            <h2 class="section-title">Comment participer ?</h2>
            <p class="section-description">
                Plusieurs niveaux d'engagement sont possibles selon votre disponibilité et vos envies.
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
                    Rejoignez un groupe de réflexion, participez à la rédaction d'analyses, aidez à organiser des événements. Devenez acteur de la plateforme.
                </p>

                <div class="histoire-cta" style="margin-top: 3rem;">
                    <a href="{{ route('rejoindre') }}" class="btn btn-primary btn-lg">
                        <span>Commencer maintenant</span>
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
        <div class="cta-box">
            <div class="cta-content">
                <h2 class="cta-title">L'intelligence collective au service du Bénin</h2>
                <p class="cta-description">
                    Ensemble, nous sommes plus intelligents, plus créatifs, plus pertinents. La MBRC est une plateforme qui valorise chaque contribution, petite ou grande.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('apropos') }}" class="btn btn-white btn-lg">
                    <span>En savoir plus</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
