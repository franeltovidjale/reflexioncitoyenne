@extends('layouts.app')

{{-- SEO Meta Tags --}}
@section('title', 'Rejoindre la Communauté Citoyenne | Adhésion MBRC - Engagement Citoyen Bénin')

@section('meta_description', 'Rejoignez la communauté citoyenne MBRC : devenez membre, participez aux groupes de réflexion et contribuez à l\'engagement civique au Bénin. Inscription gratuite en ligne.')

@section('meta_keywords', 'rejoindre mbrc, adhésion citoyenne bénin, devenir membre mbrc, inscription communauté citoyenne, engagement civique bénin, adhérer plateforme citoyenne, formulaire adhésion mbrc')

@section('canonical', route('rejoindre'))

@section('og_title', 'Rejoindre la Communauté Citoyenne MBRC | Engagement pour le Bénin')
@section('og_description', 'Devenez membre de la communauté citoyenne béninoise. Participez aux débats, formations et groupes de réflexion pour le développement du Bénin.')
@section('og_image', asset('images/og-rejoindre.jpg'))

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
      "name": "Nous Rejoindre",
      "item": "{{ route('rejoindre') }}"
    }
  ]
}
</script>
@endpush

@section('content')

<!-- Options d'engagement -->
<section class="section" itemscope itemtype="https://schema.org/JoinAction">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">Nous Rejoindre</span>
            </nav>

            <h1 class="page-title" itemprop="name">
                Rejoignez la <strong>communauté citoyenne béninoise</strong> : <strong>Adhésion MBRC</strong> pour l'<strong>engagement civique</strong>
            </h1>

            <p class="page-description" itemprop="description">
                Devenez acteur du changement en rejoignant une <strong>communauté de citoyens engagés</strong> pour le développement et la <strong>participation citoyenne</strong> au Bénin.
            </p>
        </div>

        <div class="mission-grid">
            <article class="mission-card" itemscope itemtype="https://schema.org/Offer">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Devenir Membre de la Communauté</h3>
                <p class="mission-text" itemprop="description">
                    Rejoignez la MBRC en tant que membre actif et participez à la <strong>réflexion citoyenne</strong> pour le Bénin.
                </p>
                <ul class="mission-list">
                    <li>Accès à tous les contenus pédagogiques</li>
                    <li>Participation aux événements citoyens</li>
                    <li>Réseau de citoyens béninois engagés</li>
                </ul>
                <a href="#formulaire" class="btn btn-primary" style="margin-top: 1rem; width: 100%;" aria-label="S'inscrire à la communauté MBRC">
                    <span>S'inscrire gratuitement</span>
                </a>
            </article>

            <article class="mission-card featured" itemscope itemtype="https://schema.org/Offer">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Rejoindre un Groupe de Réflexion</h3>
                <p class="mission-text" itemprop="description">
                    Intégrez un <strong>groupe de réflexion citoyenne</strong> thématique et contribuez aux analyses collectives pour le développement du Bénin.
                </p>
                <ul class="mission-list">
                    <li>Travail collaboratif citoyen</li>
                    <li>Expertise partagée entre membres</li>
                    <li>Impact concret sur les enjeux béninois</li>
                </ul>
                <a href="#formulaire" class="btn btn-white" style="margin-top: 1rem; width: 100%;" aria-label="Rejoindre un groupe de réflexion">
                    <span>Rejoindre un groupe</span>
                </a>
            </article>

            <article class="mission-card" itemscope itemtype="https://schema.org/Offer">
                <div class="mission-icon" aria-hidden="true">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="mission-title" itemprop="name">Proposer une Contribution Citoyenne</h3>
                <p class="mission-text" itemprop="description">
                    Partagez vos analyses, témoignages ou propositions avec la <strong>communauté citoyenne</strong> MBRC.
                </p>
                <ul class="mission-list">
                    <li>Validation éditoriale rigoureuse</li>
                    <li>Publication possible sur la plateforme</li>
                    <li>Reconnaissance de votre engagement</li>
                </ul>
                <a href="#formulaire" class="btn btn-primary" style="margin-top: 1rem; width: 100%;" aria-label="Proposer une contribution">
                    <span>Contribuer maintenant</span>
                </a>
            </article>
        </div>
    </div>
</section>

<!-- Formulaire d'adhésion -->
<section class="section section-light" id="formulaire" itemscope itemtype="https://schema.org/WebPage">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Inscription Gratuite</span>
            <h2 class="section-title" itemprop="name">Formulaire d'<strong>adhésion</strong> à la <strong>communauté citoyenne</strong> MBRC</h2>
            <p class="section-description" itemprop="description">
                Remplissez ce <strong>formulaire d'adhésion</strong> pour rejoindre la <strong>communauté citoyenne béninoise</strong> et participer à l'<strong>engagement civique</strong>.
            </p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div class="content-card">
                <form action="{{ route('adhesion.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;" aria-label="Formulaire d'adhésion MBRC">
                    @csrf

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div>
                            <label for="nom" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                                Nom <span style="color: var(--red-primary);">*</span>
                            </label>
                            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required
                                style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('nom') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem;">
                            @error('nom')
                                <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="prenom" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                                Prénom <span style="color: var(--red-primary);">*</span>
                            </label>
                            <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required
                                style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('prenom') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem;">
                            @error('prenom')
                                <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Email <span style="color: var(--red-primary);">*</span>
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('email') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem;">
                        @error('email')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="telephone" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Téléphone <span style="color: var(--red-primary);">*</span>
                        </label>
                        <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}"
                            style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('telephone') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem;" required>
                        <input type="hidden" name="telephone_full" id="telephone_full">
                        @error('telephone')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="date_naissance" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Date de naissance <span style="color: var(--red-primary);">*</span>
                        </label>
                        <input type="date" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}" required
                            style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('date_naissance') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem;">
                        @error('date_naissance')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="ville_pays" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Ville / Pays <span style="color: var(--red-primary);">*</span>
                        </label>
                        <input type="text" id="ville_pays" name="ville_pays" value="{{ old('ville_pays') }}" required placeholder="Ex: Cotonou, Bénin ou Paris, France"
                            style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('ville_pays') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem;">
                        @error('ville_pays')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="domaine_activite" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Domaine d'activité / Profession
                        </label>
                        <select id="domaine_activite" name="domaine_activite"
                                style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('domaine_activite') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem; background: white;">
                            <option value="">Sélectionnez votre domaine</option>
                            <option {{ old('domaine_activite') == 'Droit / Sciences juridiques' ? 'selected' : '' }}>Droit / Sciences juridiques</option>
                            <option {{ old('domaine_activite') == 'Sciences politiques / Relations internationales' ? 'selected' : '' }}>Sciences politiques / Relations internationales</option>
                            <option {{ old('domaine_activite') == 'Économie / Gestion / Management' ? 'selected' : '' }}>Économie / Gestion / Management</option>
                            <option {{ old('domaine_activite') == 'Informatique / Numérique / IA' ? 'selected' : '' }}>Informatique / Numérique / IA</option>
                            <option {{ old('domaine_activite') == 'Ingénierie / Sciences appliquées' ? 'selected' : '' }}>Ingénierie / Sciences appliquées</option>
                            <option {{ old('domaine_activite') == 'Agriculture / Agroalimentaire' ? 'selected' : '' }}>Agriculture / Agroalimentaire</option>
                            <option {{ old('domaine_activite') == 'Santé / Médecine' ? 'selected' : '' }}>Santé / Médecine</option>
                            <option {{ old('domaine_activite') == 'Éducation / Enseignement' ? 'selected' : '' }}>Éducation / Enseignement</option>
                            <option {{ old('domaine_activite') == 'Arts / Culture / Patrimoine' ? 'selected' : '' }}>Arts / Culture / Patrimoine</option>
                            <option {{ old('domaine_activite') == 'Communication / Médias' ? 'selected' : '' }}>Communication / Médias</option>
                            <option {{ old('domaine_activite') == 'Entrepreneuriat' ? 'selected' : '' }}>Entrepreneuriat</option>
                            <option {{ old('domaine_activite') == 'Étudiant(e)' ? 'selected' : '' }}>Étudiant(e)</option>
                            <option {{ old('domaine_activite') == 'Autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('domaine_activite')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="domaines_interet" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Domaines de <strong>réflexion citoyenne</strong> qui vous intéressent
                        </label>
                        <textarea id="domaines_interet" name="domaines_interet" rows="3" placeholder="Ex: Gouvernance, Économie, Éducation, Culture..."
                                style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('domaines_interet') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem; resize: vertical;">{{ old('domaines_interet') }}</textarea>
                        @error('domaines_interet')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="motivation" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--gray-700);">
                            Pourquoi souhaitez-vous rejoindre la <strong>communauté citoyenne</strong> MBRC ?
                        </label>
                        <textarea id="motivation" name="motivation" rows="4" required
                                style="width: 100%; padding: 0.75rem; border: 2px solid {{ $errors->has('motivation') ? 'var(--red-primary)' : 'var(--gray-200)' }}; border-radius: var(--radius-md); font-size: 1rem; resize: vertical;">{{ old('motivation') }}</textarea>
                        @error('motivation')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="background: var(--gray-100); padding: 1rem; border-radius: var(--radius-md);">
                        <label style="display: flex; align-items: start; gap: 0.75rem; cursor: pointer;">
                            <input type="checkbox" name="acceptation" value="1" {{ old('acceptation') ? 'checked' : '' }} required style="margin-top: 0.25rem;">
                            <span style="font-size: 0.9rem; color: var(--gray-700);">
                                J'accepte les valeurs de la MBRC (rigueur, pluralisme, humanisme, bien commun) et m'engage à participer de manière constructive et respectueuse à l'<strong>engagement civique</strong>.
                            </span>
                        </label>
                        @error('acceptation')
                            <span style="color: var(--red-primary); font-size: 0.875rem; margin-top: 0.5rem; margin-left: 2rem; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;" aria-label="Envoyer la demande d'adhésion">
                        <span>Envoyer ma demande d'adhésion</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>

                    <p style="text-align: center; font-size: 0.875rem; color: var(--gray-600); margin: 0;">
                        {{-- Votre demande d'<strong>adhésion</strong> sera examinée dans les 48h. Vous recevrez un email de confirmation. --}}
Vous recevrez un e-mail de confirmation. Si ce n’est pas le cas, veuillez vérifier vos <strong>spams</strong>.
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
            <span class="section-badge">Témoignages de Membres</span>
            <h2 class="section-title">Pourquoi ils ont rejoint la <strong>communauté citoyenne</strong> MBRC</h2>
        </div>

        <div class="testimonials-grid">
            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">★★★★★</div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "Rejoindre la MBRC a changé ma vision du Bénin. J'ai enfin un espace pour discuter sérieusement des enjeux sans tomber dans les clivages politiques grâce à l'<strong>engagement civique</strong>."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">KA</div>
                    <div>
                        <div class="author-name" itemprop="name">Kossi A.</div>
                        <div class="author-role">Membre depuis 6 mois</div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">★★★★★</div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "En tant que membre de la diaspora béninoise, la MBRC me permet de rester connectée et de contribuer activement à la <strong>réflexion citoyenne</strong> sur l'avenir du Bénin."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">EM</div>
                    <div>
                        <div class="author-name" itemprop="name">Estelle M.</div>
                        <div class="author-role">Diaspora - Montréal</div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                <div class="testimonial-stars" aria-label="Note 5 sur 5">★★★★★</div>
                <p class="testimonial-text" itemprop="reviewBody">
                    "Les <strong>groupes de réflexion</strong> sont exceptionnels. On apprend, on échange, on produit ensemble. C'est exactement ce dont le Bénin a besoin pour la <strong>participation citoyenne</strong>."
                </p>
                <div class="testimonial-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="author-avatar" aria-hidden="true">RT</div>
                    <div>
                        <div class="author-name" itemprop="name">Romuald T.</div>
                        <div class="author-role">Groupe Économie</div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const input = document.querySelector("#telephone");
    const iti = window.intlTelInput(input, {
        initialCountry: "bj",
        preferredCountries: ["bj", "fr", "ci", "sn", "tg", "ne", "ml", "cm"],
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js",
        formatOnDisplay: true,
        nationalMode: false,
        autoPlaceholder: "aggressive",
        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
            if (selectedCountryData.iso2 === 'bj') {
                return "01 97 33 53 74";
            }
            return "ex: " + selectedCountryPlaceholder;
        }
    });

    function isValidBeninNumber(number, countryCode) {
        if (countryCode === 'bj') {
            const cleanNumber = number.replace(/\D/g, '');
            const nationalNumber = cleanNumber.replace(/^229/, '');
            return nationalNumber.length === 8 || nationalNumber.length === 10;
        }
        return iti.isValidNumber();
    }

    const form = input.closest('form');
    form.addEventListener('submit', function(e) {
        const countryData = iti.getSelectedCountryData();
        const fullNumber = iti.getNumber();
        document.getElementById('telephone_full').value = fullNumber;

        if (input.value.trim()) {
            if (!isValidBeninNumber(fullNumber, countryData.iso2)) {
                e.preventDefault();
                alert('Le numéro de téléphone n\'est pas valide. Pour le Bénin, entrez 10 chiffres (ex: 01 97 33 53 74).');
                input.style.borderColor = 'var(--red-primary)';
                return false;
            }
        }
    });

    input.addEventListener('blur', function() {
        const countryData = iti.getSelectedCountryData();
        const fullNumber = iti.getNumber();

        if (input.value.trim()) {
            if (!isValidBeninNumber(fullNumber, countryData.iso2)) {
                input.style.borderColor = 'var(--red-primary)';
            } else {
                input.style.borderColor = 'var(--green-primary)';
            }
        } else {
            input.style.borderColor = 'var(--gray-200)';
        }
    });

    input.addEventListener('input', function() {
        const countryData = iti.getSelectedCountryData();
        const fullNumber = iti.getNumber();

        if (input.value.trim()) {
            if (isValidBeninNumber(fullNumber, countryData.iso2)) {
                input.style.borderColor = 'var(--green-primary)';
            }
        }
    });
});
</script>
@endpush

@endsection

<style>
.iti {
    width: 100%;
}

.iti__flag-container {
    border-radius: var(--radius-md) 0 0 var(--radius-md);
}

.iti__selected-flag {
    padding: 0 0 0 12px;
}

.iti__country-list {
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-xl);
    max-height: 250px;
}

.iti__country.iti__highlight {
    background: rgba(0, 140, 59, 0.1);
}
</style>
