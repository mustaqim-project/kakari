@extends('frontend.layouts.master')

@section('content')
    <style>
        .fullscreen {
            aspect-ratio: 16 / 9;
            width: 100%;
        }
    </style>
    <!-- Live Streaming Section -->
    <section class="py-5 bg-dark text-white position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="position-relative rounded overflow-hidden shadow-lg">

                    @if ($latestStreaming)
                        <div class="ratio fullscreen">
                            {!! $latestStreaming->code_frame !!}
                        </div>
                        <div class="p-4">
                            <h4>{{ $latestStreaming->judul }}</h4>
                            <p>{{ $latestStreaming->deskripsi }}</p>
                        </div>
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="live-badge">
                                <i class="fas fa-circle me-1"></i>LIVE NOW
                            </span>
                        </div>
                    @else
                        <div
                            class="ratio fullscreen d-flex align-items-center justify-content-center bg-secondary text-white rounded">
                            <div class="text-center">
                                <h5>Tidak Ada Live Streaming</h5>
                                <p class="mb-0">Silakan cek kembali nanti untuk siaran langsung terbaru.</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
