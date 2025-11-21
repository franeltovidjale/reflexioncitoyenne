<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar-content">
            <!-- Logo & Brand -->
            <a href="{{ route('home') }}" class="brand">
                <div class="brand-logo">
                    <div class="flag-container">
                        {{-- <span class="flag-stripe green"></span>
                        <span class="flag-stripe yellow"></span>
                        <span class="flag-stripe red"></span> --}}
                        <img src="{{ asset('images/logo.jpeg') }}" alt="" width="50">
                    </div>
                </div>
                <div class="brand-text">
                    <span class="brand-name">MBRC</span>
                    <span class="brand-tagline">Maison Béninoise de Réflexion Citoyenne</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('apropos') }}" class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}" style="white-space: nowrap;">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('plateforme') }}" class="nav-link {{ request()->routeIs('plateforme') ? 'active' : '' }}">Plateforme</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('domaines') }}" class="nav-link {{ request()->routeIs('domaines') ? 'active' : '' }}">Domaines</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('membres') }}" class="nav-link {{ request()->routeIs('membres') ? 'active' : '' }}" style="white-space: nowrap;">Espace Membres</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('soutenir') }}" class="nav-link {{ request()->routeIs('soutenir') ? 'active' : '' }}">Adhérer</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rejoindre') }}" class="btn btn-primary" style="white-space: nowrap;">
                            <span style="white-space: nowrap;">Nous Rejoindre</span>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </li>
                </ul>

                <!-- CTA Buttons -->
                {{-- <div class="nav-actions">
                    <a href="{{ route('soutenir') }}" class="btn btn-ghost">Adhérer</a>
                    <a href="{{ route('rejoindre') }}" class="btn btn-primary" style="white-space: nowrap;">
                        <span style="white-space: nowrap;">Nous Rejoindre</span>
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div> --}}
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
