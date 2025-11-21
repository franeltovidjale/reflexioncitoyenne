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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('site_icon.ico') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>
<body>
    @include('components.navbar')

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
