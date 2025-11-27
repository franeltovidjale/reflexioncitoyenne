<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>@yield('title', 'Réflexion Citoyenne | Plateforme citoyenne béninoise pour comprendre, analyser et agir')</title>
    <meta name="description" content="@yield('meta_description', 'Réflexion Citoyenne est une plateforme béninoise indépendante dédiée à l\'analyse, la formation civique, la participation citoyenne et la réflexion collective. Un espace pour les Béninois du pays et de la diaspora.')">
    <meta name="keywords" content="@yield('meta_keywords', 'réflexion citoyenne, maison bénin citoyenne, éducation civique bénin, plateforme citoyenne bénin, citoyenneté béninoise, patriotisme béninois, MBRC bénin, formation citoyenne bénin, participation citoyenne bénin, diaspora béninoise')">
    <meta name="author" content="Maison Béninoise de Réflexion Citoyenne - MBRC">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    {{-- Canonical URL --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph Meta Tags (Facebook, LinkedIn) --}}
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', config('app.name', 'Réflexion Citoyenne'))">
    <meta property="og:description" content="@yield('og_description', 'Rejoignez la communauté citoyenne béninoise pour comprendre les enjeux, analyser les réformes et participer activement au développement du Bénin.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Réflexion Citoyenne">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Réflexion Citoyenne - Plateforme citoyenne béninoise">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name', 'Réflexion Citoyenne'))">
    <meta name="twitter:description" content="@yield('twitter_description', 'Plateforme citoyenne béninoise indépendante pour l\'analyse et la participation citoyenne.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-default.jpg'))">
    <meta name="twitter:site" content="@reflexioncitoyenne">
    <meta name="twitter:creator" content="@reflexioncitoyenne">

    {{-- Geo Tags pour le Bénin --}}
    <meta name="geo.region" content="BJ">
    <meta name="geo.placename" content="Bénin">
    <meta name="geo.position" content="9.30769;2.31583">
    <meta name="ICBM" content="9.30769, 2.31583">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('site_icon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('site_icon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    {{-- Preconnect for Performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    {{-- Fonts with display=swap for performance --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@600;700;800;900&display=swap" rel="stylesheet">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mbrc-responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">

    @stack('styles')

    {{-- JSON-LD Structured Data - Organization (sur toutes les pages) --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["Organization", "NGO"],
      "@id": "https://www.reflexioncitoyenne.com/#organisation",
      "name": "Réflexion Citoyenne",
      "alternateName": "Maison Béninoise de Réflexion Citoyenne",
      "legalName": "MBRC - Maison Béninoise de Réflexion Citoyenne",
      "url": "https://www.reflexioncitoyenne.com/",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ asset('images/logo.png') }}",
        "width": 250,
        "height": 60
      },
      "description": "Réflexion Citoyenne est une plateforme indépendante de réflexion, d'éducation civique et d'analyse des enjeux publics, destinée aux Béninois du pays et de la diaspora.",
      "foundingDate": "2025",
      "founder": {
        "@type": "Person",
        "name": "Fondateurs de Réflexion Citoyenne"
      },
      "areaServed": [
        {
          "@type": "Country",
          "name": "Bénin"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Diaspora béninoise"
        }
      ],
      "knowsAbout": [
        "citoyenneté",
        "éducation civique",
        "gouvernance",
        "démocratie",
        "jeunesse",
        "diaspora béninoise",
        "développement du Bénin",
        "MBRC",
        "participation citoyenne",
        "analyse politique"
      ],
      "sameAs": [
        "https://www.facebook.com/reflexioncitoyenne",
        "https://www.instagram.com/reflexioncitoyenne",
        "https://www.twitter.com/reflexioncitoyenne",
        "https://www.tiktok.com/@reflexioncitoyenne",
        "https://t.me/reflexioncitoyenneBJ"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "information",
        "email": "contact@reflexioncitoyenne.com",
        "availableLanguage": ["fr", "en"]
      }
    }
    </script>

    {{-- JSON-LD Structured Data - WebSite (avec barre de recherche) --}}
    @if(request()->is('/'))
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "@id": "https://www.reflexioncitoyenne.com/#site",
      "url": "https://www.reflexioncitoyenne.com/",
      "name": "Réflexion Citoyenne",
      "description": "Plateforme citoyenne béninoise pour comprendre les institutions, analyser les enjeux et renforcer la participation citoyenne.",
      "inLanguage": "fr",
      "publisher": {
        "@id": "https://www.reflexioncitoyenne.com/#organisation"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://www.reflexioncitoyenne.com/recherche?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    @endif

    {{-- Breadcrumb JSON-LD (injecté dynamiquement par page) --}}
    @stack('breadcrumb_schema')

    {{-- Page-specific JSON-LD --}}
    @stack('json_ld')

    {{-- Google Analytics / Tag Manager (à ajouter quand disponible) --}}
    {{--
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    </script>
    --}}
</head>

<body>
    {{-- Skip to main content for accessibility --}}
    <a href="#main-content" class="skip-to-main" style="position: absolute; left: -9999px; z-index: 999;">
        Aller au contenu principal
    </a>

    @include('components.navbar')

    <main id="main-content" class="main-content" role="main">
        <div class="container">
            {{-- Modal Manifeste --}}
            @include('components.manifeste-modal')

            {{-- Success Messages --}}
            @if (session('success'))
                <div class="alert alert-success" role="alert" style="background: #10b981; color: white; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; margin-top: 1.5rem;">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Messages --}}
            @if (session('error'))
                <div class="alert alert-error" role="alert" style="background: var(--red-primary); color: white; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; margin-top: 1.5rem;">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        @yield('content')
    </main>

    @include('components.footer')

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/manifeste-modal.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>

    @stack('scripts')
</body>

</html>
