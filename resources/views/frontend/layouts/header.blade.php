<!-- Header Section -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset($settings['site_logo']) }}" class="img-fluid logo" alt="ic-syekhburhanuddin Logo"
                    aria-label="Go to ic-syekhburhanuddin">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto" style="font-size: 0.8em;">
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kajian') }}">Kajian</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('multimedia') }}">Multimedia</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pendidikan') }}">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tokoh') }}">Tokoh & Jaringan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('zakat') }}">Zakat & Wakaf</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{ route('live') }}"
                        class="live-badge me-3 d-none d-lg-block text-decoration-none text-danger fw-bold">
                        <i class="fas fa-circle me-1"></i>LIVE
                    </a>
                    <a href="{{ route('donasi') }}" class="btn btn-primary me-2">
                        <i class="fas fa-donate me-1"></i>Donasi
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
