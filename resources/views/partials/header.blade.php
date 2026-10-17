<nav class="navbar navbar-expand-lg navbar-dark music-navbar sticky-top">
    <div class="container py-2">

        <!-- Logo / Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2"
           href="{{ url('/') }}">
            <span class="brand-icon">
                <i class="bi bi-music-note-beamed"></i>
            </span>
            <span class="brand-text">
                Music<span>Events</span>
            </span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler custom-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 mt-3 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ url('/') }}">
                        <i class="bi bi-house-door me-1"></i>
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('concerts*') ? 'active' : '' }}"
                       href="{{ route('concerts.index') }}">
                        <i class="bi bi-calendar-event me-1"></i>
                        Daftar Event
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                       href="{{ url('/about') }}">
                        <i class="bi bi-info-circle me-1"></i>
                        Tentang Kami
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                       href="{{ url('/contact') }}">
                        <i class="bi bi-envelope me-1"></i>
                        Kontak
                    </a>
                </li>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a href="{{ route('concerts.index') }}"
                       class="btn btn-event">
                        <i class="bi bi-ticket-perforated me-1"></i>
                        Jelajahi Event
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>