@extends('frontend.layouts.master')

@section('content')
<!-- Multimedia Section -->
<section class="py-5" id="multimedia">
    <div class="container">
        <h2 class="section-title text-center mb-5">Multimedia Dakwah</h2>

        !-- Video Ceramah & Dokumenter -->

        <!-- Infografis, E-Book & Komik Dakwah -->
<div class="mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="h4"><i class="fas fa-file-download me-2 text-primary"></i>Download Terbaru</h3>
    </div>
    <div class="row g-4">
        @foreach($downloads as $download)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $download->title }}</h5>
                    <p class="card-text small text-muted">
                        Kategori: <strong>{{ $download->category->nama ?? 'Tidak ada kategori' }}</strong>
                    </p>
                    <p class="card-text small">{{ Str::limit($download->description, 100) }}</p>
                    <a href="{{ $download->file_url }}" class="btn btn-sm btn-primary" download>
                        <i class="fas fa-download me-1"></i> Unduh
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
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
