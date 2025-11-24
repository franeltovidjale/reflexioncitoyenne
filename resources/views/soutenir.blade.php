@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'Soutenir la MBRC | Partenariat et Contribution Citoyenne au Bénin')

@section('meta_description', 'Soutenez la Maison Béninoise de Réflexion Citoyenne : devenez partenaire, apportez votre expertise ou contribuez au développement de la participation citoyenne au Bénin.')

@section('meta_keywords', 'soutenir mbrc, partenariat citoyen bénin, contribution citoyenne, devenir partenaire mbrc, soutien plateforme citoyenne, expertise bénin, bénévolat citoyen, collaboration citoyenne')

@section('canonical', route('soutenir'))

@section('og_title', 'Soutenir la MBRC | Partenariat Citoyen pour le Bénin')
@section('og_description', 'Apportez votre soutien à la plateforme citoyenne : partenariat, expertise, contribution pour le développement de la participation citoyenne au Bénin.')
@section('og_image', asset('images/og-soutenir.jpg'))

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
      "name": "Adhérer MBRC",
      "item": "{{ route('soutenir') }}"
    }
  ]
}
</script>
@endpush

@section('content')

<!-- Formes de soutien -->
<section class="section" itemscope itemtype="https://schema.org/Organization">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">Adhérer MBRC</span>
            </nav>

            <h1 class="page-title" itemprop="name">
                <strong>Soutenez</strong> la plateforme citoyenne : <strong>Partenariat</strong> et <strong>contribution</strong> pour le Bénin
            </h1>

            <p class="page-description" itemprop="description">
                Plusieurs façons d'aider la MBRC à grandir et à amplifier son impact sur la société béninoise à travers le <strong>partenariat citoyen</strong> et la <strong>contribution citoyenne</strong>.
            </p>
        </div>

        <div class="mission-grid">
            <article class="mission-card" itemscope itemtype="https://schema.org/Service">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Apporter Votre Expertise</h3>
                <p class="mission-text" itemprop="description">
                    Partagez vos connaissances et votre expérience pour enrichir nos analyses et <strong>formations citoyennes</strong> au Bénin.
                </p>
                <ul class="mission-list">
                    <li>Animation d'ateliers citoyens</li>
                    <li>Relecture de publications</li>
                    <li>Conseil méthodologique en réflexion citoyenne</li>
                </ul>
            </article>

            <article class="mission-card featured" itemscope itemtype="https://schema.org/Service">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Devenir Partenaire Institutionnel</h3>
                <p class="mission-text" itemprop="description">
                    Établissez un <strong>partenariat institutionnel</strong> avec la MBRC pour co-créer des contenus et événements de <strong>participation citoyenne</strong>.
                </p>
                <ul class="mission-list">
                    <li>Partenariats éducatifs et universitaires</li>
                    <li>Collaborations culturelles citoyennes</li>
                    <li>Projets conjoints de développement</li>
                </ul>
            </article>

            <article class="mission-card" itemscope itemtype="https://schema.org/Service">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Contribuer à la Plateforme Citoyenne</h3>
                <p class="mission-text" itemprop="description">
                    Aidez-nous à améliorer notre <strong>plateforme citoyenne</strong> digitale et nos outils de communication pour le Bénin.
                </p>
                <ul class="mission-list">
                    <li>Développement web et digital</li>
                    <li>Design graphique et communication</li>
                    <li>Rédaction de contenu citoyen</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- Soutien Logistique -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header">
            <span class="section-badge light">Soutien Matériel</span>
            <h2 class="section-title light">Appui logistique et humain pour la <strong>participation citoyenne</strong></h2>
        </div>

        <div class="manifeste-grid">
            <article class="manifeste-item" itemscope itemtype="https://schema.org/Service">
                <div class="manifeste-number" aria-hidden="true">01</div>
                <h3 itemprop="name">Organisation d'Événements Citoyens</h3>
                <p itemprop="description">
                    Aidez-nous à organiser des <strong>ateliers citoyens</strong>, conférences et rencontres en mettant à disposition des espaces, du matériel ou en participant à la logistique des événements.
                </p>
            </article>

            <article class="manifeste-item" itemscope itemtype="https://schema.org/Service">
                <div class="manifeste-number" aria-hidden="true">02</div>
                <h3 itemprop="name">Ressources Techniques</h3>
                <p itemprop="description">
                    Prêt de matériel informatique, audiovisuel ou mise à disposition d'outils numériques pour nos activités de <strong>formation citoyenne</strong> au Bénin.
                </p>
            </article>

            <article class="manifeste-item" itemscope itemtype="https://schema.org/Service">
                <div class="manifeste-number" aria-hidden="true">03</div>
                <h3 itemprop="name">Bénévolat Citoyen</h3>
                <p itemprop="description">
                    Donnez de votre temps pour aider à la coordination, la communication, la modération ou toute autre tâche essentielle de <strong>participation citoyenne</strong>.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- Partenaires Types -->
<section class="section section-light" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Partenariats Citoyens</span>
            <h2 class="section-title" itemprop="name">Qui peut devenir <strong>partenaire</strong> de la plateforme citoyenne ?</h2>
        </div>

        <div class="plateforme-valeurs-grid">
            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="position" content="1">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Universités Béninoises</h3>
                <p class="valeur-text">Collaboration sur des recherches citoyennes, <strong>formation</strong> des étudiants, organisation de conférences.</p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="position" content="2">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Centres Culturels</h3>
                <p class="valeur-text">Accueil d'événements citoyens, mise à disposition d'espaces, programmation conjointe culturelle.</p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="position" content="3">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Associations Citoyennes</h3>
                <p class="valeur-text">Échange de bonnes pratiques, actions communes de <strong>participation citoyenne</strong>, mutualisation de ressources.</p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="position" content="4">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Entreprises Béninoises</h3>
                <p class="valeur-text">RSE, <strong>formation</strong> des collaborateurs, mécénat de compétences pour le développement citoyen.</p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="position" content="5">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">Médias Béninois</h3>
                <p class="valeur-text">Diffusion de nos analyses citoyennes, émissions communes, chroniques régulières sur la <strong>participation citoyenne</strong>.</p>
            </article>

            <article class="valeur-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="position" content="6">
                <div class="valeur-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="valeur-title" itemprop="name">ONG Internationales</h3>
                <p class="valeur-text">Projets de développement citoyen, renforcement de capacités, financement d'activités de <strong>participation citoyenne</strong>.</p>
            </article>
        </div>
    </div>
</section>

<!-- Formulaire de Proposition -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Proposer un Soutien</span>
            <h2 class="section-title">Formulaire de proposition de <strong>partenariat</strong> ou <strong>contribution</strong></h2>
            <p class="section-description">
                Dites-nous comment vous souhaitez <strong>soutenir</strong> la MBRC et contribuer au développement de la <strong>participation citoyenne</strong> au Bénin.
            </p>
        </div>

        <div style="max-width: 700px; margin: 0 auto;">
            <div class="content-card">
                <form action="{{ route('proposition.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;" aria-label="Formulaire de proposition de soutien">
                    @csrf

                    <div>
                        <label for="type_structure" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Type de structure <span style="color: var(--red-primary);">*</span></label>
                        <select id="type_structure" name="type_structure" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; background: white;">
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
                        <label for="nom_structure" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Nom de la structure / Particulier <span style="color: var(--red-primary);">*</span></label>
                        <input type="text" id="nom_structure" name="nom_structure" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div>
                            <label for="nom_contact" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Nom du contact <span style="color: var(--red-primary);">*</span></label>
                            <input type="text" id="nom_contact" name="nom_contact" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>

                        <div>
                            <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Email <span style="color: var(--red-primary);">*</span></label>
                            <input type="email" id="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>
                    </div>

                    <div>
                        <label for="type_soutien" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Type de <strong>soutien</strong> envisagé <span style="color: var(--red-primary);">*</span></label>
                        <select id="type_soutien" name="type_soutien" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; background: white;">
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
                        <label for="description" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">Décrivez votre proposition de <strong>partenariat</strong> <span style="color: var(--red-primary);">*</span></label>
                        <textarea id="description" name="description" rows="6" required placeholder="Expliquez en détail comment vous souhaitez soutenir la MBRC et contribuer à la participation citoyenne..." style="width: 100%; padding: 0.75rem; border: 2px solid var(--gray-200); border-radius: var(--radius-md); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;" aria-label="Envoyer la proposition de soutien">
                        <span>Envoyer ma proposition</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>

                    <p style="text-align: center; font-size: 0.875rem; color: var(--gray-600); margin: 0;">
                        Nous examinerons votre proposition de <strong>partenariat</strong> et vous recontacterons rapidement.
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
            <h2 class="section-title">Témoignages de <strong>partenaires</strong> de la plateforme citoyenne</h2>
        </div>

        <div class="testimonials-grid">
            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">★★★★★</div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "Collaborer avec la MBRC a permis à notre université d'ancrer la <strong>formation</strong> de nos étudiants dans les réalités citoyennes. Une initiative remarquable pour la <strong>participation citoyenne</strong>."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">UA</div>
                    <div>
                        <div class="author-name" itemprop="name">Dr. Alain M.</div>
                        <div class="author-role">Université d'Abomey-Calavi</div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">★★★★★</div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "En tant qu'entreprise, <strong>soutenir</strong> la MBRC s'inscrit parfaitement dans notre démarche RSE. Nous contribuons au développement de la citoyenneté active au Bénin."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">EB</div>
                    <div>
                        <div class="author-name" itemprop="name">Émilie B.</div>
                        <div class="author-role">Directrice RSE</div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">★★★★★</div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "Le <strong>partenariat</strong> avec la MBRC nous permet de toucher un public plus large avec nos programmes culturels. Une synergie bénéfique pour la <strong>participation citoyenne</strong>."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">CC</div>
                    <div>
                        <div class="author-name" itemprop="name">Centre Culturel</div>
                        <div class="author-role">Cotonou</div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="section">
    <div class="container">
        <div class="cta-box" role="region" aria-label="Appel à l'action">
            <div class="cta-content">
                <h2 class="cta-title">Ensemble, construisons le Bénin de demain</h2>
                <p class="cta-description">
                    Votre <strong>soutien</strong>, quelle qu'en soit la forme, est essentiel pour amplifier notre impact et toucher encore plus de citoyens béninois à travers la <strong>participation citoyenne</strong>.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg" aria-label="Contacter la MBRC">
                    <span>Contactez-nous</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
