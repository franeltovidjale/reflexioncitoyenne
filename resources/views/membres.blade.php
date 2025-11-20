@extends('layouts.app')

@section('title', 'Espace Membres')

@section('content')


<!-- Fonctionnalités Membres -->
<section class="section">
    <div class="container">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Espace Membres</span>
            </nav>
            <h1 class="page-title">Espace Membres MBRC</h1>
            <p class="page-description">
                Un espace dédié aux membres actifs de la communauté pour échanger, collaborer et contribuer.
            </p>
        </div>
    </div>
    
        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Profil Membre</h3>
                <p class="mission-text">
                    Un espace personnel pour gérer vos informations, suivre vos contributions et vos domaines d'intérêt.
                </p>
                <ul class="mission-list">
                    <li>Tableau de bord personnalisé</li>
                    <li>Historique des contributions</li>
                    <li>Gestion des préférences</li>
                </ul>
            </div>

            <div class="mission-card featured">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Forum Citoyen</h3>
                <p class="mission-text">
                    Un lieu d'échange structuré où les discussions sont organisées par thème et modérées dans le respect.
                </p>
                <ul class="mission-list">
                    <li>Discussions thématiques</li>
                    <li>Modération bienveillante</li>
                    <li>Espace sécurisé</li>
                </ul>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Groupes de Réflexion</h3>
                <p class="mission-text">
                    Rejoignez ou créez des groupes organisés par domaine pour produire des analyses citoyennes.
                </p>
                <ul class="mission-list">
                    <li>Travail collaboratif</li>
                    <li>Outils de co-écriture</li>
                    <li>Validation collective</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Ressources Exclusives -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Accès Exclusif</span>
            <h2 class="section-title">Ressources Réservées aux Membres</h2>
        </div>

        <div class="content-grid">
            <div class="content-card">
                <div class="content-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="content-title">Documents de Travail</h3>
                <p class="content-text">
                    Accédez aux documents de travail, synthèses avancées et contenus pédagogiques exclusifs.
                </p>
            </div>

            <div class="content-card">
                <div class="content-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <h3 class="content-title">Contribution aux Analyses</h3>
                <p class="content-text">
                    Participez à la co-écriture de notes, rapports et dossiers avec accompagnement méthodologique.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Connexion -->
<section class="section">
    <div class="container">
        <div style="max-width: 500px; margin: 0 auto;">
            <div class="content-card">
                <h3 class="content-title" style="text-align: center;">Accès Membre</h3>
                <p class="content-text" style="text-align: center; margin-bottom: 2rem;">
                    Connectez-vous pour accéder à votre espace personnel et aux fonctionnalités réservées aux membres.
                </p>

                <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
                    @csrf
                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Email</label>
                        <input type="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Mot de passe</label>
                        <input type="password" name="password" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                        <span>Se connecter</span>
                    </button>
                </form>

                <div style="margin-top: 2rem; text-align: center; padding-top: 2rem; border-top: 1px solid var(--gray-200);">
                    <p style="color: var(--gray-600); margin-bottom: 1rem;">Pas encore membre ?</p>
                    <a href="{{ route('rejoindre') }}" class="btn btn-outline">
                        <span>Créer un compte</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Avantages Membres -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Pourquoi devenir membre ?</span>
            <h2 class="section-title">Les Avantages de l'Adhésion</h2>
        </div>

        <div class="valeurs-grid">
            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Formations Gratuites</h3>
                <p class="valeur-text">Accès à toutes nos formations citoyennes et ateliers pédagogiques.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Réseau Actif</h3>
                <p class="valeur-text">Connectez-vous avec d'autres citoyens engagés partout au Bénin.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Voix Entendue</h3>
                <p class="valeur-text">Vos contributions sont valorisées et prises en compte dans nos analyses.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Reconnaissance</h3>
                <p class="valeur-text">Certificats de participation et reconnaissance de vos contributions.</p>
            </div>
        </div>
    </div>
</section>
@endsection
