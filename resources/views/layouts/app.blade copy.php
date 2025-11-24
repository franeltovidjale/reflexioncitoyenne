<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Maison Béninoise de Réflexion Citoyenne – plateforme citoyenne indépendante dédiée à la connaissance, au dialogue et à la réflexion sur les enjeux du Bénin.')">
    <title>@yield('title', 'MBRC') - Maison Béninoise de Réflexion Citoyenne</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('site_icon.ico') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mbrc-responsive.css') }}">
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">


    @stack('styles')
</head>

<body>
    @include('components.navbar')



    <main class="main-content">
        <div class="container">

        <!-- Modal Manifeste -->
        @include('components.manifeste-modal')

        @if (session('success'))
            <div
                style="background: #10b981; color: white; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; margin-top: 1.5rem;">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div
                style="background: var(--red-primary); color: white; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; margin-top: 1.5rem;">
                {{ session('error') }}
            </div>
        @endif
        </div>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/manifeste-modal.js') }}"></script>
<!-- intl-tel-input JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"></script>
    @stack('scripts')
</body>

</html>
