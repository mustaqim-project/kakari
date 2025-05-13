<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahaya Warisan Syekh Burhanuddin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('baru/css.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-mosque me-2"></i>Cahaya Warisan Syekh Burhanuddin
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto" style="font-size: 0.8em;">
                        <li class="nav-item"><a class="nav-link" href="tentangkami.html">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="kajian.html">Kajian</a></li>
                        <li class="nav-item"><a class="nav-link" href="multimedia.html">Multimedia</a></li>
                        <li class="nav-item"><a class="nav-link" href="pendidikan.html">Pendidikan</a></li>
                        <li class="nav-item"><a class="nav-link" href="tokoh.html">Tokoh & Jaringan</a></li>
                        <li class="nav-item"><a class="nav-link" href="zakat.html">Zakat & Wakaf</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontak.html">Kontak</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="live.html"
                            class="live-badge me-3 d-none d-lg-block text-decoration-none text-danger fw-bold">
                            <i class="fas fa-circle me-1"></i>LIVE
                        </a>
                        <a href="donasi.html" class="btn btn-primary me-2">
                            <i class="fas fa-donate me-1"></i>Donasi
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">"Mewarisi Cahaya, Menebar Hikmah dari Ulama Minangkabau untuk Dunia"</h1>
            <p class="lead mb-5">Media Dakwah, Edukasi, dan Digitalisasi Warisan Keulamaan</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-book-open me-2"></i>Ikuti Kajian
                </a>
                <a href="#" class="btn btn-outline-light btn-lg px-4">
                    <i class="fas fa-play-circle me-2"></i>Lihat Video
                </a>
            </div>
        </div>
    </section>

    <!-- Live Streaming Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-header bg-primary text-white d-flex align-items-center">
                            <span class="live-badge me-2">
                                <i class="fas fa-circle me-1"></i>LIVE
                            </span>
                            <span>Kajian Islam Hari Ini</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="ratio ratio-16x9">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/0Ju2xALU9-Q?si=cKrAM5chqFnCHQ46"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="p-4">
                                <h4>Kajian Kitab Riyadhus Shalihin - Bab Keutamaan Ilmu</h4>
                                <p>Kajian rutin setiap Senin malam bersama Syekh Burhanuddin membahas kitab Riyadhus
                                    Shalihin karya Imam Nawawi.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Agenda Kajian Minggu Ini
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Senin</span>
                                        <span>20:00 WIB</span>
                                    </div>
                                    <small>Kajian Kitab Riyadhus Shalihin</small>
                                </div>
                                <div class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Rabu</span>
                                        <span>19:30 WIB</span>
                                    </div>
                                    <small>Tafsir Juz Amma</small>
                                </div>
                                <div class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Jumat</span>
                                        <span>18:00 WIB</span>
                                    </div>
                                    <small>Ceramah Jumat</small>
                                </div>
                                <div class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Ahad</span>
                                        <span>08:00 WIB</span>
                                    </div>
                                    <small>Kajian Keluarga</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Podcast Terbaru
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6>Episode 45: Menjaga Lisan</h6>
                                <audio controls style="width: 100%">
                                    <source src="#" type="audio/mpeg">
                                </audio>
                            </div>
                            <div class="mb-3">
                                <h6>Episode 44: Keutamaan Sedekah</h6>
                                <audio controls style="width: 100%">
                                    <source src="#" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Sections -->
    <!-- Content Sections -->
    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container mt-5">
            <div class="row">
                <!-- Main Content (Lebih Proporsional) -->
                <div class="col-lg-8">
                    <!-- Latest Articles Section -->
                    <section class="mb-5">
                        <h2 class="section-title mb-4">Artikel Terbaru</h2>

                        <!-- Grid Layout yang lebih rapi -->
                        <div class="row g-4">
                            <!-- Article 1 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="card h-100">
                                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                        class="card-img-top" alt="Artikel" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <span class="badge bg-primary mb-2">Artikel</span>
                                        <h5 class="card-title">Memahami Makna Hakiki dari Tauhid</h5>
                                        <p class="card-text">Penjelasan mendalam tentang konsep tauhid dalam Islam dan
                                            penerapannya dalam kehidupan sehari-hari.</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Diposting 2 hari lalu</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 2 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="card h-100">
                                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                        class="card-img-top" alt="Program" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <span class="badge bg-success mb-2">Program</span>
                                        <h5 class="card-title">Beasiswa Santri Berprestasi</h5>
                                        <p class="card-text">Program beasiswa bagi santri yang berprestasi dalam bidang
                                            agama dan ilmu pengetahuan.</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Pendaftaran dibuka</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 3 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="card h-100">
                                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                        class="card-img-top" alt="Kajian" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <span class="badge bg-warning text-dark mb-2">Kajian</span>
                                        <h5 class="card-title">Tafsir Surah Al-Kahfi</h5>
                                        <p class="card-text">Kajian lengkap tentang keutamaan dan makna dalam Surah
                                            Al-Kahfi.</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Diposting 5 hari lalu</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 4 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="card h-100">
                                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                        class="card-img-top" alt="Artikel" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <span class="badge bg-primary mb-2">Artikel</span>
                                        <h5 class="card-title">Panduan Ibadah di Bulan Ramadhan</h5>
                                        <p class="card-text">Lengkap dengan doa-doa dan amalan sunnah selama bulan
                                            Ramadhan.</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Diposting 1 minggu lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- View More Button -->
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-outline-primary">Lihat Lebih Banyak Artikel</a>
                        </div>
                    </section>

                    <!-- Additional Content Section -->
                    <section class="mb-5">
                        <h2 class="section-title mb-4">Kajian Terbaru</h2>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                        class="card-img-top" alt="Kajian" style="height: 180px; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="badge bg-warning text-dark mb-2">Kajian</span>
                                        <h5 class="card-title">Fiqh Zakat Kontemporer</h5>
                                        <p class="card-text">Pembahasan tentang zakat di era modern dengan berbagai
                                            kasus baru yang perlu dipahami oleh umat muslim.</p>
                                        <p class="card-text"><small class="text-muted">Diposting 10 hari lalu</small>
                                        </p>
                                        <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Sidebar (Lebih Seimbang) -->
                <div class="col-lg-4">
                    <!-- Search Widget -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari artikel...">
                                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Articles -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Artikel Terpopuler</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-primary me-2">1</span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">Memahami Makna Hakiki dari Tauhid</div>
                                        <div class="text-muted small mt-1"><i class="fas fa-eye me-1"></i> 15.245 views
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-secondary me-2">2</span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">Panduan Shalat Tahajud untuk Pemula</div>
                                        <div class="text-muted small mt-1"><i class="fas fa-eye me-1"></i> 12.732 views
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-success me-2">3</span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">10 Amalan Penghapus Dosa</div>
                                        <div class="text-muted small mt-1"><i class="fas fa-eye me-1"></i> 9.845 views
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-info me-2">4</span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">Rahasia Keberkahan Rezeki</div>
                                        <div class="text-muted small mt-1"><i class="fas fa-eye me-1"></i> 8.321 views
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-warning me-2">5</span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">Tafsir Surat Al-Fatihah</div>
                                        <div class="text-muted small mt-1"><i class="fas fa-eye me-1"></i> 7.532 views
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Kategori</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">Tauhid</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Fiqh</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Tafsir</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Hadits</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Sejarah</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Keluarga</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Pendidikan</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Kontemporer</a>
                            </div>
                        </div>
                    </div>

                    <!-- E-Koran -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">E-Koran Terbaru</h5>
                        </div>
                        <div class="card-body text-center p-0">
                            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=800&q=80"
                                class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                                style="max-height: 300px; object-fit: cover; margin: 2.5em;" data-bs-toggle="modal"
                                data-bs-target="#ekoranModal">

                        </div>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Berlangganan Newsletter</h5>
                        </div>
                        <div class="card-body">
                            <p>Dapatkan artikel terbaru langsung ke email Anda</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Alamat Email">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Berlangganan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-Koran Preview Modal -->
    <div class="modal fade" id="ekoranModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Buletin Al-Ilmu Edisi April 2023</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-1x1">
                        <iframe src="https://docs.google.com/viewer?url=https://example.com/sample.pdf&embedded=true"
                            style="width: 100%; height: 70vh;" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <a href="#" class="btn btn-primary"><i class="fas fa-download me-2"></i>Download</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <section class="playlist-section">
        <div class="container">
            <div class="playlist-tabs">
                <button class="tab-button active" onclick="openTab(event, 'playlist1')">Kajian Ramadhan</button>
                <button class="tab-button" onclick="openTab(event, 'playlist2')">Tafsir Quran</button>
                <button class="tab-button" onclick="openTab(event, 'playlist3')">Ceramah Singkat</button>
            </div>

            <div class="playlist-content">
                <!-- Playlist 1 -->
                <div id="playlist1" class="tab-content active">
                    <div class="video-grid">
                        <!-- Video Item 1 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Keutamaan Puasa Ramadhan dan Amalan Sunnah</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 150K</span>
                                    <span><i class="far fa-clock"></i> 1 minggu</span>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 2 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Panduan Lengkap Shalat Tarawih di Rumah</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 320K</span>
                                    <span><i class="far fa-clock"></i> 2 minggu</span>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 3 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Tadarus Al-Quran: Cara Efektif Khatam Ramadhan</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 210K</span>
                                    <span><i class="far fa-clock"></i> 3 minggu</span>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 4 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Memaksimalkan I'tikaf di 10 Hari Terakhir Ramadhan</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 180K</span>
                                    <span><i class="far fa-clock"></i> 1 bulan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Playlist 2 -->
                <div id="playlist2" class="tab-content">
                    <div class="video-grid">
                        <!-- Video Item 1 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Tafsir Surah Al-Baqarah Ayat 183-185: Tentang Puasa</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 95K</span>
                                    <span><i class="far fa-clock"></i> 5 hari</span>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 2 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Makna Surah Al-Qadr: Keutamaan Malam Lailatul Qadar</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 120K</span>
                                    <span><i class="far fa-clock"></i> 1 minggu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Playlist 3 -->
                <div id="playlist3" class="tab-content">
                    <div class="video-grid">
                        <!-- Video Item 1 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">3 Amalan Ringan Pembuka Pintu Surga di Ramadhan</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 250K</span>
                                    <span><i class="far fa-clock"></i> 3 hari</span>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 2 -->
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w?si=1OXXP_Ln0ytoqvZx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Doa Mustajab Saat Berbuka Puasa</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 350K</span>
                                    <span><i class="far fa-clock"></i> 1 minggu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Tentang Kami</h2>
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        class="img-fluid rounded" alt="Syekh Burhanuddin">
                </div>
                <div class="col-lg-8">
                    <h3>Visi & Misi</h3>
                    <p><strong>🎯 Visi:</strong> Menjadi media digital rujukan dalam pelestarian, pengembangan, dan
                        penyebaran nilai-nilai, pendidikan dan tradisi Islam rahmatan lil 'alamin berbasis warisan
                        keulamaan Syekh Burhanuddin.</p>

                    <p><strong>🧭 Misi:</strong></p>
                    <ol>
                        <li>Menyajikan informasi, kajian, dan dokumentasi sejarah keulamaan Syekh Burhanuddin dan PERTI.
                        </li>
                        <li>Menjadi platform literasi Islam moderat berbasis pendidikan, tradisi dan intelektualisme
                            Surau, Halaqah, Pondok Pesantren dan Tuanku.</li>
                        <li>Mengembangkan dakwah kreatif dan edukatif untuk generasi muda, kaum milenial, dan pegiat
                            media sosial melalui media digital.</li>
                        <li>Memfasilitasi jejaring keilmuan, alumni, dan institusi yang mengusung nilai-nilai tasawuf,
                            tarbiyah, tarekat, dan tradisi keulamaan Syekh Burhanuddin dan Ahlussunah wal Jamaah.</li>
                        <li>Mendukung pengembangan ekonomi syariah, pendidikan, dan zakat sebagai pilar kemandirian
                            umat.</li>
                    </ol>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        </div>
    </section> -->

    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container">
            <h2 class="section-title">Kajian Ilmu</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-quran display-4 text-primary mb-3"></i>
                            <h5>Tafsir & Hadis</h5>
                            <p>Kajian mendalam tentang Al-Quran dan Hadis Nabi</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Kajian</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-praying-hands display-4 text-primary mb-3"></i>
                            <h5>Fikih & Tasawuf</h5>
                            <p>Panduan praktis ibadah dan penyucian hati</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Kajian</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-kaaba display-4 text-primary mb-3"></i>
                            <h5>Islam Nusantara</h5>
                            <p>Kearifan lokal dalam bingkai syariat Islam</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Kajian</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-hands-praying display-4 text-primary mb-3"></i>
                            <h5>Warisan Tarekat</h5>
                            <p>Jalan spiritual para salafus shalih</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Kajian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Multimedia Islami</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Video Dakwah
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">Kumpulan Khutbah Jumat</a>
                                <a href="#" class="list-group-item list-group-item-action">Kajian Rutin Mingguan</a>
                                <a href="#" class="list-group-item list-group-item-action">Ceramah Singkat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Podcast Cahaya Surau
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">Episode Terbaru</a>
                                <a href="#" class="list-group-item list-group-item-action">Seri Tazkiyatun Nafs</a>
                                <a href="#" class="list-group-item list-group-item-action">Kisah Para Nabi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Download
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">E-Book Gratis</a>
                                <a href="#" class="list-group-item list-group-item-action">Infografis</a>
                                <a href="#" class="list-group-item list-group-item-action">Komik Dakwah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container">
            <div class="row g-4">
                <!-- Pendidikan & Kaderisasi -->
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">Pendidikan & Kaderisasi</h2>
                    <div class="row g-4">
                        <!-- STIT Card -->
                        <div class="col-md-6">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80"
                                    class="card-img-top" alt="STIT" style="height: 180px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">STIT Syekh Burhanuddin</h5>
                                    <p class="card-text">Sekolah Tinggi Ilmu Tarbiyah yang mencetak guru-guru agama
                                        berkualitas.</p>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-sm btn-primary w-100">Info Pendaftaran</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Madrasah Card -->
                        <div class="col-md-6">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80"
                                    class="card-img-top" alt="Madrasah" style="height: 180px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Madrasah Diniyah</h5>
                                    <p class="card-text">Pendidikan agama untuk anak-anak dan remaja setelah sekolah
                                        umum.</p>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-sm btn-primary w-100">Info Pendaftaran</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Zakat & Wakaf -->
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">Zakat & Wakaf</h2>
                    <div class="row g-4">
                        <!-- Zakat Card -->
                        <div class="col-md-6">
                            <div class="card h-100 d-flex flex-column">
                                <div class="placeholder-image text-center"
                                    style="height: 180px; display: flex; align-items: center; justify-content: center; background-color: #f0f0f0;">
                                    <i class="fas fa-hand-holding-usd fa-3x text-primary"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center">Program Zakat</h5>
                                    <p class="card-text text-center">Salurkan zakat Anda melalui lembaga yang amanah dan
                                        transparan.</p>
                                    <ul class="mb-3">
                                        <li>Zakat Fitrah</li>
                                        <li>Zakat Mal</li>
                                        <li>Zakat Profesi</li>
                                    </ul>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-primary w-100">Hitung & Bayar Zakat</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wakaf Card -->
                        <div class="col-md-6">
                            <div class="card h-100 d-flex flex-column">
                                <div class="placeholder-image text-center"
                                    style="height: 180px; display: flex; align-items: center; justify-content: center; background-color: #f0f0f0;">
                                    <i class="fas fa-mosque fa-3x text-primary"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center">Program Wakaf</h5>
                                    <p class="card-text text-center">Wakaf untuk pembangunan dan pengembangan lembaga
                                        dakwah.</p>
                                    <ul class="mb-3">
                                        <li>Wakaf Pembangunan Masjid</li>
                                        <li>Wakaf Pendidikan</li>
                                        <li>Wakaf Al-Quran</li>
                                    </ul>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-primary w-100">Wakaf Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Cahaya Warisan Syekh Burhanuddin</h5>
                    <p>Menebar rahmat melalui dakwah yang santun dan ilmu yang bermanfaat.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Navigasi</h5>
                    <div class="footer-links">
                        <a href="#">Beranda</a>
                        <a href="#">Tentang Kami</a>
                        <a href="#">Kajian</a>
                        <a href="#">Multimedia</a>
                        <a href="#">Pendidikan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Layanan</h5>
                    <div class="footer-links">
                        <a href="#">Zakat & Wakaf</a>
                        <a href="#">Konsultasi Agama</a>
                        <a href="#">Belajar Online</a>
                        <a href="#">Jadwal Kajian</a>
                        <a href="#">Donasi</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Kontak Kami</h5>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i>Jl. Dakwah No. 123, Bandung<br>
                        <i class="fas fa-phone-alt me-2 mt-2"></i>+62 812 3456 7890<br>
                        <i class="fas fa-envelope me-2 mt-2"></i>info@syekhburhanuddin.id
                    </p>
                </div>
            </div>
            <hr class="mt-4" style="border-color: var(--border);">
            <div class="text-center pt-3">
                <p class="mb-0">&copy; 2023 Cahaya Warisan Syekh Burhanuddin. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i');

        // Check for saved theme preference or use preferred color scheme
        const savedTheme = localStorage.getItem('theme') ||
            (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        document.documentElement.setAttribute('data-theme', savedTheme);

        // Update icon based on current theme
        if (savedTheme === 'dark') {
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        }

        // Toggle theme on button click
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';

            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);

            if (newTheme === 'dark') {
                themeIcon.classList.replace('fa-moon', 'fa-sun');
            } else {
                themeIcon.classList.replace('fa-sun', 'fa-moon');
            }
        });


        function openTab(evt, tabName) {
            const tabContents = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove("active");
            }

            const tabButtons = document.getElementsByClassName("tab-button");
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }

            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        function openEkoranModal(slideIndex) {
            // Initialize modal slider
            var modalSlider = new bootstrap.Carousel(document.getElementById('ekoranModalSlider'));

            // Go to the clicked slide
            modalSlider.to(slideIndex);

            // Show modal
            var modal = new bootstrap.Modal(document.getElementById('ekoranModal'));
            modal.show();
        }
    </script>
</body>

</html>
