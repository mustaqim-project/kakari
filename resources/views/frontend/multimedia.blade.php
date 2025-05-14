@extends('frontend.layouts.master')

@section('content')
<!-- Multimedia Section -->
<section class="py-5" id="multimedia">
    <div class="container">
        <h2 class="section-title text-center mb-5">Multimedia Dakwah</h2>

        <!-- Video Ceramah & Dokumenter -->
        <div class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="h4"><i class="fas fa-video me-2 text-primary"></i>Vidio Youtube</h3>
                {{-- <a href="{{ route('video.playlist', $playlist->slug) }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a> --}}
            </div>

            <div class="row g-4">
                @foreach($videos as $video)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            {!! $video->code_frame !!}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text small text-muted">{{ Str::limit($video->description, 70) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-light text-dark"><i class="fas fa-eye me-1"></i> {{ number_format(rand(1000, 20000)) }}</span>
                                <span class="text-muted small">{{ rand(10, 60) }}:{{ str_pad(rand(0, 59), 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Podcast Cahaya Surau -->
        <div class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="h4"><i class="fas fa-podcast me-2 text-primary"></i>Podcast</h3>
                {{-- <a href="{{ route('podcast.playlist', $podcastPlaylist->slug) }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a> --}}
            </div>

            <div class="row g-4">
                @foreach($podcasts as $podcast)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="assets{{ $podcast->cover_image}}" alt="Podcast Cover" class="rounded me-3" width="80" height="80">
                                <div>
                                    <h5 class="card-title mb-1">{{ $podcast->title }}</h5>
                                    <p class="card-text small text-muted mb-2">{{ Str::limit($podcast->description, 70) }}</p>
                                    <span class="badge bg-light text-dark small"><i class="far fa-clock me-1"></i> {{ $podcast->formatted_duration }}</span>
                                </div>
                            </div>
                            <audio controls class="w-100">
                                <source src="{{ $podcast->audio_url }}" type="audio/mpeg">
                                Browser Anda tidak mendukung elemen audio.
                            </audio>
                            <div class="d-flex justify-content-between mt-2">
                                <a href="{{ $podcast->audio_url }}" download class="btn btn-sm btn-outline-primary"><i class="fas fa-download me-1"></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <!-- Infografis, E-Book & Komik Dakwah -->

        <div class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="h4"><i class="fas fa-book-open me-2 text-primary"></i> Infografis, E-Book & Komik Dakwah</h3>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
            </div>
                 @foreach($downloads as $download)
            <div class="row g-4">
                <!-- Infografis 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $download->title }}</h5>
                            <p class="card-text small text-muted">{{ Str::limit($download->deskripsi, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">{{ $download->catDownload->name }}</span>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-download me-1"></i> {{ $download->download_file }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            @endforeach

        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <div class="card bg-primary text-white py-5 border-0 shadow">
                <div class="card-body">
                    <h3 class="mb-3">Akses Lebih Banyak Konten Dakwah</h3>
                    <p class="mb-4">Bergabung dengan komunitas kami untuk mendapatkan update terbaru</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-light"><i class="fab fa-youtube me-2"></i> Subscribe YouTube</a>
                        <a href="#" class="btn btn-outline-light"><i class="fab fa-telegram me-2"></i> Join Telegram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
