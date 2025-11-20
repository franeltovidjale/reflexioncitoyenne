@extends('layouts.app')

@section('title', 'Soutenir MBRC')

@section('content')

<!-- Formes de soutien -->
<section class="section">
    <div class="container">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Soutenir MBRC</span>
            </nav>
            <h1 class="page-title">Soutenez Notre Action</h1>
            <p class="page-description">
                Plusieurs façons d'aider la MBRC à grandir et à amplifier son impact sur la société béninoise.
            </p>
        </div>
    </div>
        {{-- <div class="section-header">
            <span class="section-badge">Comment Nous Aider</span>
            <h2 class="section-title">Choisissez Votre Forme de Soutien</h2>
        </div> --}}

        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Apporter Votre Expertise</h3>
                <p class="mission-text">
                    Partagez vos connaissances et votre expérience pour enrichir nos analyses et formations.
                </p>
                <ul class="mission-list">
                    <li>Animation d'ateliers</li>
                    <li>Relecture de publications</li>
                    <li>Conseil méthodologique</li>
                </ul>
            </div>

            <div class="mission-card featured">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Devenir Partenaire</h3>
                <p class="mission-text">
                    Établissez un partenariat institutionnel avec la MBRC pour co-créer des contenus et événements.
                </p>
                <ul class="mission-list">
                    <li>Partenariats éducatifs</li>
                    <li>Collaborations culturelles</li>
                    <li>Projets conjoints</li>
                </ul>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="mission-title">Contribuer à la Plateforme</h3>
                <p class="mission-text">
                    Aidez-nous à améliorer notre plateforme digitale et nos outils de communication.
                </p>
                <ul class="mission-list">
                    <li>Développement web</li>
                    <li>Design graphique</li>
                    <li>Rédaction de contenu</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Soutien Logistique -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header">
            <span class="section-badge light">Soutien Matériel</span>
            <h2 class="section-title light">Appui Logistique et Humain</h2>
        </div>

        <div class="manifeste-grid">
            <div class="manifeste-item">
                <div class="manifeste-number">01</div>
                <h3>Organisation d'Événements</h3>
                <p>
                    Aidez-nous à organiser des ateliers, conférences et rencontres en mettant à disposition des espaces, du matériel ou en participant à la logistique.
                </p>
            </div>

            <div class="manifeste-item">
                <div class="manifeste-number">02</div>
                <h3>Ressources Techniques</h3>
                <p>
                    Prêt de matériel informatique, audiovisuel ou mise à disposition d'outils numériques pour nos activités.
                </p>
            </div>

            <div class="manifeste-item">
                <div class="manifeste-number">03</div>
                <h3>Bénévolat</h3>
                <p>
                    Donnez de votre temps pour aider à la coordination, la communication, la modération ou toute autre tâche essentielle.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Partenaires Types -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Partenariats</span>
            <h2 class="section-title">Qui Peut Devenir Partenaire ?</h2>
        </div>

        <div class="valeurs-grid">
            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Universités</h3>
                <p class="valeur-text">Collaboration sur des recherches, formation des étudiants, organisation de conférences.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Centres Culturels</h3>
                <p class="valeur-text">Accueil d'événements, mise à disposition d'espaces, programmation conjointe.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Associations</h3>
                <p class="valeur-text">Échange de bonnes pratiques, actions communes, mutualisation de ressources.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Entreprises</h3>
                <p class="valeur-text">RSE, formation des collaborateurs, mécénat de compétences.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">Médias</h3>
                <p class="valeur-text">Diffusion de nos analyses, émissions communes, chroniques régulières.</p>
            </div>

            <div class="valeur-card">
                <div class="valeur-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="valeur-title">ONG Internationales</h3>
                <p class="valeur-text">Projets de développement, renforcement de capacités, financement d'activités.</p>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire de Proposition -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Proposer un Soutien</span>
            <h2 class="section-title">Formulaire de Proposition</h2>
            <p class="section-description">
                Dites-nous comment vous souhaitez soutenir la MBRC.
            </p>
        </div>

        <div style="max-width: 700px; margin: 0 auto;">
            <div class="content-card">
                <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    @csrf

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Type de structure <span style="color: var(--red-primary);">*</span></label>
                        <select name="type_structure" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; background: white;">
                            <option value="">Sélectionnez</option>
                            <option>Particulier</option>
                            <option>Université / École</option>
                            <option>Centre Culturel</option>
                            <option>Association</option>
                            <option>Entreprise</option>
                            <option>Média</option>
                            <option>ONG</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Nom de la structure / Particulier <span style="color: var(--red-primary);">*</span></label>
                        <input type="text" name="nom_structure" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Nom du contact <span style="color: var(--red-primary);">*</span></label>
                            <input type="text" name="nom_contact" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Email <span style="color: var(--red-primary);">*</span></label>
                            <input type="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Type de soutien envisagé <span style="color: var(--red-primary);">*</span></label>
                        <select name="type_soutien" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; background: white;">
                            <option value="">Sélectionnez</option>
                            <option>Expertise / Conseil</option>
                            <option>Partenariat institutionnel</option>
                            <option>Contribution technique</option>
                            <option>Appui logistique</option>
                            <option>Bénévolat</option>
                            <option>Mise à disposition d'espaces</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Décrivez votre proposition <span style="color: var(--red-primary);">*</span></label>
                        <textarea name="description" rows="6" required placeholder="Expliquez en détail comment vous souhaitez soutenir la MBRC..." style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">
                        <span>Envoyer ma proposition</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>

                    <p style="text-align: center; font-size: 0.875rem; color: var(--gray-600); margin: 0;">
                        Nous examinerons votre proposition et vous recontacterons rapidement.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages Partenaires -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Ils Nous Soutiennent</span>
            <h2 class="section-title">Témoignages de Partenaires</h2>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">
                    "Collaborer avec la MBRC a permis à notre université d'ancrer la formation de nos étudiants dans les réalités citoyennes. Une initiative remarquable."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">UA</div>
                    <div>
                        <div class="author-name">Dr. Alain M.</div>
                        <div class="author-role">Université d'Abomey-Calavi</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">
                    "En tant qu'entreprise, soutenir la MBRC s'inscrit parfaitement dans notre démarche RSE. Nous contribuons au développement de la citoyenneté active."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">EB</div>
                    <div>
                        <div class="author-name">Émilie B.</div>
                        <div class="author-role">Directrice RSE</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">
                    "Le partenariat avec la MBRC nous permet de toucher un public plus large avec nos programmes culturels. Une synergie bénéfique pour tous."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">CC</div>
                    <div>
                        <div class="author-name">Centre Culturel</div>
                        <div class="author-role">Cotonou</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-content">
                <h2 class="cta-title">Ensemble, Construisons le Bénin de Demain</h2>
                <p class="cta-description">
                    Votre soutien, quelle qu'en soit la forme, est essentiel pour amplifier notre impact et toucher encore plus de citoyens.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">
                    <span>Contactez-nous</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
