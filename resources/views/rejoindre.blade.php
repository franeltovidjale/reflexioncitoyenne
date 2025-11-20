@extends('layouts.app')

@section('title', 'Nous Rejoindre')

@section('content')

<!-- Options d'engagement -->
<section class="section">
    <div class="container">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Nous Rejoindre</span>
            </nav>
            <h1 class="page-title">Rejoignez le Mouvement</h1>
            <p class="page-description">
                Devenez acteur du changement en rejoignant une communauté de citoyens engagés pour le Bénin.
            </p>
        </div>
    </div>

        {{-- <div class="section-header">
            <span class="section-badge">Plusieurs Façons de S'engager</span>
            <h2 class="section-title">Choisissez Votre Niveau d'Engagement</h2>
        </div> --}}

        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Devenir Membre</h3>
                <p class="mission-text">
                    Rejoignez la MBRC en tant que membre actif et participez à la réflexion citoyenne.
                </p>
                <ul class="mission-list">
                    <li>Accès à tous les contenus</li>
                    <li>Participation aux événements</li>
                    <li>Réseau de citoyens engagés</li>
                </ul>
                <a href="#formulaire" class="btn btn-primary" style="margin-top: 1rem; width: 100%;">
                    <span>S'inscrire</span>
                </a>
            </div>

            <div class="mission-card featured">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Rejoindre un Groupe</h3>
                <p class="mission-text">
                    Intégrez un groupe de réflexion thématique et contribuez aux analyses collectives.
                </p>
                <ul class="mission-list">
                    <li>Travail collaboratif</li>
                    <li>Expertise partagée</li>
                    <li>Impact concret</li>
                </ul>
                <a href="#formulaire" class="btn btn-white" style="margin-top: 1rem; width: 100%;">
                    <span>Rejoindre</span>
                </a>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Proposer une Contribution</h3>
                <p class="mission-text">
                    Partagez vos analyses, témoignages ou propositions avec la communauté MBRC.
                </p>
                <ul class="mission-list">
                    <li>Validation éditoriale</li>
                    <li>Publication possible</li>
                    <li>Reconnaissance</li>
                </ul>
                <a href="#formulaire" class="btn btn-primary" style="margin-top: 1rem; width: 100%;">
                    <span>Contribuer</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire d'adhésion -->
<section class="section section-light" id="formulaire">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Inscription</span>
            <h2 class="section-title">Formulaire d'Adhésion</h2>
            <p class="section-description">
                Remplissez ce formulaire pour rejoindre la communauté MBRC.
            </p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div class="content-card">
                <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
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
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Téléphone</label>
                        <input type="tel" name="telephone" placeholder="+229 ..." style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Date de naissance <span style="color: var(--red-primary);">*</span></label>
                        <input type="date" name="date" required placeholder="" style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Ville / Pays <span style="color: var(--red-primary);">*</span></label>
                        <input type="text" name="date" required placeholder="Ex: Cotonou, Bénin ou Paris, France" style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Domaine d'activité / Profession</label>
                        <select name="domaine_activite" style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; background: white;">
                            <option value="">Sélectionnez votre domaine</option>
                            <option>Droit / Sciences juridiques</option>
                            <option>Sciences politiques / Relations internationales</option>
                            <option>Économie / Gestion / Management</option>
                            <option>Informatique / Numérique / IA</option>
                            <option>Ingénierie / Sciences appliquées</option>
                            <option>Agriculture / Agroalimentaire</option>
                            <option>Santé / Médecine</option>
                            <option>Éducation / Enseignement</option>
                            <option>Arts / Culture / Patrimoine</option>
                            <option>Communication / Médias</option>
                            <option>Entrepreneuriat</option>
                            <option>Étudiant(e)</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Domaines de réflexion qui vous intéressent</label>
                        <textarea name="domaines_interet" rows="3" placeholder="Ex: Économie, Éducation, Culture..." style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Pourquoi souhaitez-vous rejoindre la MBRC ?</label>
                        <textarea name="motivation" rows="4" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <div style="background: var(--gray-100); padding: 1rem; border-radius: var(--radius-md);">
                        <label style="display: flex; align-items: start; gap: 0.75rem; cursor: pointer;">
                            <input type="checkbox" name="acceptation" required style="margin-top: 0.25rem;">
                            <span style="font-size: 0.9rem; color: var(--gray-700);">
                                J'accepte les valeurs de la MBRC (rigueur, pluralisme, humanisme, bien commun) et m'engage à participer de manière constructive et respectueuse.
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">
                        <span>Envoyer ma demande d'adhésion</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>

                    <p style="text-align: center; font-size: 0.875rem; color: var(--gray-600); margin: 0;">
                        Votre demande sera examinée dans les 48h. Vous recevrez un email de confirmation.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Ils ont franchi le pas</span>
            <h2 class="section-title">Pourquoi Ils Ont Rejoint la MBRC</h2>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">
                    "Rejoindre la MBRC a changé ma vision du Bénin. J'ai enfin un espace pour discuter sérieusement des enjeux sans tomber dans les clivages politiques."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">KA</div>
                    <div>
                        <div class="author-name">Kossi A.</div>
                        <div class="author-role">Membre depuis 6 mois</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">
                    "En tant que membre de la diaspora, la MBRC me permet de rester connectée et de contribuer activement à la réflexion sur l'avenir du Bénin."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">EM</div>
                    <div>
                        <div class="author-name">Estelle M.</div>
                        <div class="author-role">Diaspora - Montréal</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">
                    "Les groupes de réflexion sont exceptionnels. On apprend, on échange, on produit ensemble. C'est exactement ce dont le Bénin a besoin."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">RT</div>
                    <div>
                        <div class="author-name">Romuald T.</div>
                        <div class="author-role">Groupe Économie</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
