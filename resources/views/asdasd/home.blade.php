<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ $settings['site_seo_title'] }}
        @endif
    </title>




    <link rel="icon" href="{{ asset($settings['site_favicon']) }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('baru/css.css') }}" rel="stylesheet">

    <meta name="description" content="@yield('meta_description', $settings['site_seo_description'] ?? '')" />
    <meta name="keywords" content="@yield('meta_keyword', $settings['site_seo_keywords'] ?? '')" itemprop="keywords" />



    <meta name="og:title"
        content="@hasSection('meta_og_title')
@yield('meta_og_title')
@else
{{ $settings['site_name'] }}
@endif" />
    <meta name="og:description"
        content="@hasSection('meta_og_description')
@yield('meta_og_description')
@else
{{ $settings['site_seo_description'] }}
@endif" />
    <meta name="og:image"
        content="@hasSection('meta_og_image')
@yield('meta_og_image')
@else
{{ asset($settings['site_logo']) }}
@endif" />

    <meta name="twitter:title"
        content="@hasSection('meta_tw_title')
@yield('meta_tw_title')
@else
{{ $settings['site_name'] }}
@endif" />
    <meta name="twitter:description"
        content="@hasSection('meta_tw_description')
@yield('meta_tw_description')
@else
{{ $settings['site_seo_description'] }}
@endif" />
    <meta name="twitter:image"
        content="@hasSection('meta_tw_image')
@yield('meta_tw_image')
@else
{{ asset($settings['site_logo']) }}
@endif" />

</head>

<body>

    @php
        $socialLinks = \App\Models\SocialLink::where('status', 1)->get();
        $footerInfo = \App\Models\FooterInfo::where('language', getLangauge())->first();
        $footerGridOne = \App\Models\FooterGridOne::where(['status' => 1, 'language' => getLangauge()])->get();
        $footerGridTwo = \App\Models\FooterGridTwo::where(['status' => 1, 'language' => getLangauge()])->get();
        $footerGridThree = \App\Models\FooterGridThree::where(['status' => 1, 'language' => getLangauge()])->get();
        $footerGridOneTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_one_title',
            'language' => getLangauge(),
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
            'language' => getLangauge(),
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
            'language' => getLangauge(),
        ])->first();

        $contact = \App\Models\Contact::where('language', getLangauge())->first();

    @endphp


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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">"Mewarisi Cahaya, Menebar Hikmah dari Ulama Minangkabau untuk Dunia"</h1>
            <p class="lead mb-5">Media Dakwah, Edukasi, dan Digitalisasi Warisan Keulamaan</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('kajian') }}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-book-open me-2"></i>Ikuti Kajian
                </a>
                <a href="{{ route('multimedia') }}" class="btn btn-outline-light btn-lg px-4">
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
                            @if ($latestStreaming)
                                <div class="ratio ratio-16x9">
                                    {!! $latestStreaming->code_frame !!}
                                </div>
                                <div class="p-4">
                                    <h4>{{ $latestStreaming->judul }}</h4>
                                    <p>{{ $latestStreaming->deskripsi }}</p>
                                </div>
                            @else
                                <div
                                    class="ratio ratio-16x9 d-flex align-items-center justify-content-center bg-dark text-white rounded">
                                    <div class="text-center">
                                        <h5>Tidak Ada Live Streaming</h5>
                                        <p class="mb-0">Silakan cek kembali nanti untuk siaran langsung terbaru.</p>
                                    </div>
                                </div>
                            @endif
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
                            @foreach ($featuredPodcasts->first()->podcasts->take(2) as $podcast)
                                <div class="mb-3">
                                    <h6>{{ $podcast->judul }}</h6>
                                    <audio controls style="width: 100%">
                                        <source src="{{ asset('storage/podcasts/' . $podcast->file_audio) }}"
                                            type="audio/mpeg">
                                    </audio>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Sections -->
    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container mt-5">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Latest Articles Section -->
                    <section class="mb-5">
                        <h2 class="section-title mb-4">Artikel Terbaru</h2>

                        <!-- Grid Layout -->
                        <div class="row g-4">
                            @foreach ($recentNews->take(4) as $article)
                                <div class="col-md-6 col-lg-6">
                                    <a href="{{ route('kajian-details', $article->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card h-100">
                                            <img src="{{ asset($article->image) }}" class="card-img-top"
                                                alt="{{ $article->title ?? 'Gambar artikel' }}"
                                                style="height: 150px; object-fit: cover;">


                                            <div class="card-body">
                                                @if ($article->category)
                                                    <span
                                                        class="badge bg-primary mb-2">{{ $article->category->name }}</span>
                                                @endif

                                                <h5 class="card-title">{{ $article->title }}</h5>
                                                <p class="card-text">
                                                    {{ Str::limit(strip_tags($article->content), 100) }}</p>
                                            </div>

                                            <div class="card-footer bg-transparent">
                                                <small
                                                    class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <!-- View More Button -->
                        <div class="text-center mt-4">
                            <a href="{{ route('news.index') }}" class="btn btn-outline-primary">Lihat Lebih Banyak
                                Artikel</a>
                        </div>
                    </section>

                    <!-- Kajian Terbaru Section -->
                    <section class="mb-5">
                        <h2 class="section-title mb-4">Kajian Terbaru</h2>
                        @if ($categorySectionTwo->count() > 0)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/news/' . $categorySectionTwo->first()->image) }}"
                                            class="img-fluid rounded-start h-100"
                                            alt="{{ $categorySectionTwo->first()->title }}"
                                            style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <span class="badge bg-warning text-dark mb-2">Kajian</span>
                                            <h5 class="card-title">{{ $categorySectionTwo->first()->title }}</h5>
                                            <p class="card-text">
                                                {{ Str::limit($categorySectionTwo->first()->content, 150) }}</p>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $categorySectionTwo->first()->created_at->diffForHumans() }}</small>
                                            </p>
                                            <a href="{{ route('news.show', $categorySectionTwo->first()->slug) }}"
                                                class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                            class="card-img-top" alt="Kajian"
                                            style="height: 180px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <span class="badge bg-warning text-dark mb-2">Kajian</span>
                                            <h5 class="card-title">Fiqh Zakat Kontemporer</h5>
                                            <p class="card-text">Pembahasan tentang zakat di era modern dengan berbagai
                                                kasus baru yang perlu dipahami oleh umat muslim.</p>
                                            <p class="card-text"><small class="text-muted">Diposting 10 hari
                                                    lalu</small>
                                            </p>
                                            <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </section>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Search Widget -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control"
                                        placeholder="Cari artikel...">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Popular Articles -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Artikel Terpopuler</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            @foreach ($mostViewedPosts as $key => $post)
                                <a href="{{ route('kajian-details', $article->slug) }}"
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span
                                                class="badge {{ $loop->first ? 'bg-primary' : ($loop->index == 1 ? 'bg-secondary' : 'bg-success') }} me-2">{{ $loop->iteration }}</span>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <div class="fw-semibold">{{ $post->title }}</div>
                                            <div class="text-muted small mt-1"><i class="fas fa-eye me-1"></i>
                                                {{ number_format($post->views) }} views</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Kategori</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                @php
                                    use App\Models\Category;
                                @endphp
                                @foreach (Category::withCount('news')->get() as $category)
                                    <a href="{{ route('category.show', $category->slug) }}"
                                        class="btn btn-sm btn-outline-primary">
                                        {{ $category->name }} ({{ $category->news_count }})
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- E-Koran -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">E-Koran Terbaru</h5>
                        </div>
                        <div class="card-body text-center p-0">
                            @if ($latestEkoran->count() > 0)
                                <img src="{{ asset('storage/ekoran/' . $latestEkoran->first()->cover_image) }}"
                                    class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                                    style="max-height: 300px; object-fit: cover; margin: 2.5em;"
                                    data-bs-toggle="modal" data-bs-target="#ekoranModal">
                            @else
                                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=800&q=80"
                                    class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                                    style="max-height: 300px; object-fit: cover; margin: 2.5em;"
                                    data-bs-toggle="modal" data-bs-target="#ekoranModal">
                            @endif
                        </div>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Berlangganan Newsletter</h5>
                        </div>
                        <div class="card-body">
                            <p>Dapatkan artikel terbaru langsung ke email Anda</p>
                            <form action="{{ route('subscribe-newsletter') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Alamat Email" required>
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
                    @if ($latestEkoran->count() > 0)
                        <h5 class="modal-title">{{ $latestEkoran->first()->judul }}</h5>
                    @else
                        <h5 class="modal-title">Buletin Al-Ilmu Edisi Terbaru</h5>
                    @endif
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-1x1">
                        @if ($latestEkoran->count() > 0)
                            <iframe
                                src="https://docs.google.com/viewer?url={{ asset('storage/ekoran/' . $latestEkoran->first()->file_pdf) }}&embedded=true"
                                style="width: 100%; height: 70vh;" frameborder="0"></iframe>
                        @else
                            <iframe
                                src="https://docs.google.com/viewer?url=https://example.com/sample.pdf&embedded=true"
                                style="width: 100%; height: 70vh;" frameborder="0"></iframe>
                        @endif
                    </div>
                </div>
                <div class="modal-footer border-0">
                    @if ($latestEkoran->count() > 0)
                        <a href="{{ asset('storage/ekoran/' . $latestEkoran->first()->file_pdf) }}"
                            class="btn btn-primary" download>
                            <i class="fas fa-download me-2"></i>Download
                        </a>
                    @else
                        <a href="#" class="btn btn-primary"><i class="fas fa-download me-2"></i>Download</a>
                    @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Playlists Section -->
    <section class="playlist-section">
        <div class="container">
            <div class="playlist-tabs">
                @if ($featuredPlaylists->count() > 0)
                    @foreach ($featuredPlaylists as $index => $playlist)
                        <button class="tab-button {{ $loop->first ? 'active' : '' }}"
                            onclick="openTab(event, 'playlist{{ $playlist->id }}')">
                            {{ $playlist->judul }}
                        </button>
                    @endforeach
                @else
                    <button class="tab-button active" onclick="openTab(event, 'playlist1')">Kajian Ramadhan</button>
                    <button class="tab-button" onclick="openTab(event, 'playlist2')">Tafsir Quran</button>
                    <button class="tab-button" onclick="openTab(event, 'playlist3')">Ceramah Singkat</button>
                @endif
            </div>

            <div class="playlist-content">
                @if ($featuredPlaylists->count() > 0)
                    @foreach ($featuredPlaylists as $playlist)
                        <div id="playlist{{ $playlist->id }}"
                            class="tab-content {{ $loop->first ? 'active' : '' }}">
                            <div class="video-grid">
                                @if ($playlist->videos->count() > 0)
                                    @foreach ($playlist->videos->take(4) as $video)
                                        <div class="video-item">
                                            <div class="video-thumbnail">
                                                {!! $video->embed_code !!}
                                            </div>
                                            <div class="video-info">
                                                <h3 class="video-title">{{ $video->judul }}</h3>
                                                <div class="video-meta">
                                                    <span><i class="far fa-eye"></i> {{ $video->views }}</span>
                                                    <span><i class="far fa-clock"></i>
                                                        {{ $video->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center p-5">
                                        <p>Belum ada video dalam playlist ini.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Placeholder playlists if none exist -->
                    <div id="playlist1" class="tab-content active">
                        <div class="video-grid">
                            <div class="video-item">
                                <div class="video-thumbnail">
                                    <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w" title="YouTube video"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="video-info">
                                    <h3 class="video-title">Keutamaan Puasa Ramadhan dan Amalan Sunnah</h3>
                                    <div class="video-meta">
                                        <span><i class="far fa-eye"></i> 150K</span>
                                        <span><i class="far fa-clock"></i> 1 minggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="playlist2" class="tab-content">
                        <div class="video-grid">
                            <div class="video-item">
                                <div class="video-thumbnail">
                                    <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w" title="YouTube video"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="video-info">
                                    <h3 class="video-title">Tafsir Surah Al-Baqarah Ayat 183-185: Tentang Puasa</h3>
                                    <div class="video-meta">
                                        <span><i class="far fa-eye"></i> 95K</span>
                                        <span><i class="far fa-clock"></i> 5 hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="playlist3" class="tab-content">
                        <div class="video-grid">
                            <div class="video-item">
                                <div class="video-thumbnail">
                                    <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w" title="YouTube video"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="video-info">
                                    <h3 class="video-title">3 Amalan Ringan Pembuka Pintu Surga di Ramadhan</h3>
                                    <div class="video-meta">
                                        <span><i class="far fa-eye"></i> 250K</span>
                                        <span><i class="far fa-clock"></i> 3 hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

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
                                <a href="#" class="list-group-item list-group-item-action">Kumpulan Khutbah
                                    Jumat</a>
                                <a href="#" class="list-group-item list-group-item-action">Kajian Rutin
                                    Mingguan</a>
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
                                <a href="#" class="list-group-item list-group-item-action">Seri Tazkiyatun
                                    Nafs</a>
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
                                    <p class="card-text text-center">Salurkan zakat Anda melalui lembaga yang amanah
                                        dan
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

                {{-- Kolom 1: Deskripsi dan Sosial Media --}}
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <figure class="image-logo">
                        <img src="{{ asset(@$footerInfo->logo) }}" alt="ic-syekhburhanuddin Logo"
                            class="img-fluid loaded" loading="lazy">
                    </figure>
                    <p>{{ @$footerInfo->description ?? 'Menebar rahmat melalui dakwah yang santun dan ilmu yang bermanfaat.' }}
                    </p>
                    <div class="mt-3">
                        @foreach ($socialLinks as $link)
                            <a href="{{ $link->url }}" class="social-icon" aria-label="{{ $link->name }}">
                                <i class="{{ $link->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 2: Navigasi --}}
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>{{ @$footerGridOneTitle->value ?? 'Navigasi' }}</h5>
                    <div class="footer-links">
                        @foreach ($footerGridOne as $item)
                            <a href="{{ $item->url }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 3: Layanan --}}
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>{{ @$footerGridTwoTitle->value ?? 'Layanan' }}</h5>
                    <div class="footer-links">
                        @foreach ($footerGridTwo as $item)
                            <a href="{{ $item->url }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 4: Kontak --}}
                <div class="col-lg-3 col-md-6">
                    <h5>Kontak Kami</h5>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i> {{ @$contact->address }}
                        <br>
                        <i class="fas fa-phone-alt me-2 mt-2"></i> <a
                            href="tel:{{ @$contact->phone }}">{{ @$contact->phone }}</a>
                        <br>
                        <i class="fas fa-envelope me-2 mt-2"></i>
                        <a href="mailto:{{ @$contact->email }}">{{ @$contact->email }}</a>

                    </p>


                </div>


            </div>

            <hr class="mt-4" style="border-color: var(--border);">
            <div class="text-center pt-3">
                <p class="mb-0">
                    {{ @$footerInfo->copyright ?? '© ' . now()->year . ' Cahaya Warisan Syekh Burhanuddin. All rights reserved.' }}
                </p>
            </div>
        </div>
    </footer>

    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lazyImages = document.querySelectorAll('img.lazy');

            function handleLazyLoad() {
                lazyImages.forEach(img => {
                    if (img.getBoundingClientRect().top < window.innerHeight && img.getBoundingClientRect()
                        .bottom >= 0) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        img.classList.add('loaded');
                    }
                });
            }

            window.addEventListener('scroll', handleLazyLoad);
            window.addEventListener('resize', handleLazyLoad);
            handleLazyLoad(); // Initial check
        });


        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


        // Add csrf token in ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            $('#site-language').on('change', function() {
                let languageCode = $(this).val();
                $('html').attr('lang', languageCode);
                $.ajax({
                    method: 'GET',
                    url: "{{ route('language') }}",
                    data: {
                        language_code: languageCode
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            window.location.href = "{{ url('/') }}";
                        }
                    },
                    error: function(data) {
                        console.error(data);
                    }
                });
            });



            $('#nav-side-site-language').on('change', function() {
                let languageCode = $(this).val();
                $('html').attr('lang', languageCode);
                $.ajax({
                    method: 'GET',
                    url: "{{ route('language') }}",
                    data: {
                        language_code: languageCode
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            window.location.href = "{{ url('/') }}";
                        }
                    },
                    error: function(data) {
                        console.error(data);
                    }
                });
            });

            /** Subscribe Newsletter**/
            $('.newsletter-form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'POST',
                    url: "{{ route('subscribe-newsletter') }}",
                    data: $(this).serialize(),
                    beforeSend: function() {
                        $('.newsletter-button').text('loading...');
                        $('.newsletter-button').attr('disabled', true);
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            Toast.fire({
                                icon: 'success',
                                title: data.message
                            })
                            $('.newsletter-form')[0].reset();
                            $('.newsletter-button').text('sign up');

                            $('.newsletter-button').attr('disabled', false);
                        }
                    },
                    error: function(data) {
                        $('.newsletter-button').text('sign up');
                        $('.newsletter-button').attr('disabled', false);

                        if (data.status === 422) {
                            let errors = data.responseJSON.errors;
                            $.each(errors, function(index, value) {
                                Toast.fire({
                                    icon: 'error',
                                    title: value[0]
                                })
                            })
                        }
                    }
                })
            })
        })
    </script>


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
