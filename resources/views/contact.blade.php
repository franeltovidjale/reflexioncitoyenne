@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- Informations Contact -->
<section class="section">
    <div class="container">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Contact</span>
            </nav>
            <h1 class="page-title">Contactez-Nous</h1>
            <p class="page-description">
                Une question, une suggestion, une proposition ? Nous sommes à votre écoute.
            </p>
        </div>
    </div>

        <div class="content-grid">
            <div class="content-card">
                <div class="content-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="content-title">Email</h3>
                <p class="content-text">
                    Pour toute question ou proposition, écrivez-nous à :
                </p>
                <a href="mailto:contact@mbrc-benin.org" style="color: var(--green-primary); font-weight: 600; text-decoration: none;">
                    contact@mbrc-benin.org
                </a>
                <p class="content-text" style="margin-top: 1rem; font-size: 0.875rem;">
                    Nous répondons généralement sous 48 heures.
                </p>
            </div>

            <div class="content-card">
                <div class="content-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                    </svg>
                </div>
                <h3 class="content-title">Réseaux Sociaux</h3>
                <p class="content-text">
                    Suivez-nous et échangez avec nous sur nos réseaux :
                </p>
                <div style="display: flex; gap: 0.75rem; margin-top: 1rem;">
                    <a href="#" class="social-link" style="background: var(--gray-100); border-radius: var(--radius-md); padding: 0.75rem; color: var(--gray-700); transition: all var(--transition-fast);">
                        <svg fill="currentColor" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" style="background: var(--gray-100); border-radius: var(--radius-md); padding: 0.75rem; color: var(--gray-700); transition: all var(--transition-fast);">
                        <svg fill="currentColor" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" style="background: var(--gray-100); border-radius: var(--radius-md); padding: 0.75rem; color: var(--gray-700); transition: all var(--transition-fast);">
                        <svg fill="currentColor" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire de Contact -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Envoyez-nous un message</span>
            <h2 class="section-title">Formulaire de Contact</h2>
        </div>

        <div style="max-width: 700px; margin: 0 auto;">
            <div class="content-card">
                <form action="{{ route('contact.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    @csrf

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Nom <span style="color: var(--red-primary);">*</span></label>
                            <input type="text" name="nom" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Prénom <span style="color: var(--red-primary);">*</span></label>
                            <input type="text" name="prenom" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Email <span style="color: var(--red-primary);">*</span></label>
                        <input type="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Sujet <span style="color: var(--red-primary);">*</span></label>
                        <select name="sujet" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; background: white;">
                            <option value="">Choisissez un sujet</option>
                            <option>Question générale</option>
                            <option>Demande d'information</option>
                            <option>Proposition de partenariat</option>
                            <option>Suggestion d'amélioration</option>
                            <option>Signalement d'un problème</option>
                            <option>Médias / Presse</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Message <span style="color: var(--red-primary);">*</span></label>
                        <textarea name="message" rows="6" required placeholder="Décrivez votre demande en détail..." style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">
                        <span>Envoyer le message</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>

                    <p style="text-align: center; font-size: 0.875rem; color: var(--gray-600); margin: 0;">
                        Nous nous engageons à vous répondre dans les meilleurs délais.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Localisation Future -->
<section class="section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-content">
                <h2 class="cta-title">Notre Maison Physique</h2>
                <p class="cta-description">
                    La MBRC est pour l'instant un réseau en ligne. À terme, l'ambition est d'ouvrir une maison physique au Bénin, dédiée à la réflexion citoyenne, aux formations et aux rencontres. Restez connectés pour suivre l'évolution de ce projet !
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Rapide -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Questions Fréquentes</span>
            <h2 class="section-title">Vous Avez Des Questions ?</h2>
        </div>

        <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 1rem;">
            <div class="content-card">
                <h3 style="color: var(--gray-900); margin-bottom: 0.5rem;">Comment puis-je rejoindre la MBRC ?</h3>
                <p style="color: var(--gray-600); margin: 0;">
                    Il suffit de remplir le formulaire d'adhésion sur notre page <a href="{{ route('rejoindre') }}" style="color: var(--green-primary); text-decoration: none; font-weight: 600;">Nous Rejoindre</a>. Votre demande sera examinée sous 48h.
                </p>
            </div>

            <div class="content-card">
                <h3 style="color: var(--gray-900); margin-bottom: 0.5rem;">La MBRC est-elle un parti politique ?</h3>
                <p style="color: var(--gray-600); margin: 0;">
                    Non, la MBRC est une plateforme citoyenne indépendante, non partisane. Nous ne soutenons aucun parti et accueillons tous les citoyens, quelle que soit leur sensibilité politique.
                </p>
            </div>

            <div class="content-card">
                <h3 style="color: var(--gray-900); margin-bottom: 0.5rem;">Puis-je participer depuis la diaspora ?</h3>
                <p style="color: var(--gray-600); margin: 0;">
                    Absolument ! La MBRC est ouverte à tous les Béninois, au pays comme à l'étranger. Nos activités en ligne permettent une participation à distance.
                </p>
            </div>

            <div class="content-card">
                <h3 style="color: var(--gray-900); margin-bottom: 0.5rem;">Comment puis-je proposer un partenariat ?</h3>
                <p style="color: var(--gray-600); margin: 0;">
                    Utilisez le formulaire ci-dessus en sélectionnant "Proposition de partenariat" comme sujet, ou écrivez-nous directement à <a href="mailto:contact@mbrc-benin.org" style="color: var(--green-primary); text-decoration: none; font-weight: 600;">contact@mbrc-benin.org</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
