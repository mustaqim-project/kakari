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
                            <div class="ratio ratio-16x9 d-flex align-items-center justify-content-center bg-dark text-white rounded">
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
                                    <source src="{{ asset('storage/podcasts/' . $podcast->file_audio) }}" type="audio/mpeg">
                                </audio>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
