@extends('frontend.layouts.master')

@section('content')
    <!-- Pendidikan Section -->
    <section class="py-5" style="background-color: var(--card);">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title">Program Pendidikan</h1>
                <p class="lead">Membangun generasi berilmu dan berakhlak mulia</p>
            </div>


            <div class="row g-4" id="programList">
                @forelse($pendidikan as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm program-card" data-type="{{ $item->tipe_program }}"
                            data-location="{{ strtolower($item->lokasi) }}">
                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top"
                                    alt="{{ $item->judul }}">
                                @if ($item->status_pendaftaran === 'buka')
                                    <div class="badge-overlay bg-primary text-white">Pendaftaran Dibuka</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-0">{{ $item->judul }}</h5>
                                    @if ($item->akreditasi)
                                        <span class="badge bg-success">Akreditasi {{ $item->akreditasi }}</span>
                                    @endif
                                </div>
                                <p class="card-text text-muted small mb-3">
                                    <i class="fas fa-map-marker-alt me-1"></i> {{ $item->lokasi }}
                                </p>
                                <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                                <ul class="list-unstyled small mb-3">
                                    <li><i class="fas fa-calendar-alt text-success me-1"></i>
                                        {{ $item->tanggal_mulai->format('d M Y') }} -
                                        {{ $item->tanggal_berakhir->format('d M Y') }}</li>
                                    <li><i class="fas fa-users text-success me-1"></i> Kuota:
                                        {{ $item->kuota ?? 'Tidak tersedia' }}</li>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                                @if ($item->link_pendaftaran)
                                    <a href="{{ $item->link_pendaftaran }}" target="_blank"
                                        class="btn btn-sm btn-primary">Daftar Sekarang</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Tidak ada program pendidikan yang tersedia saat ini.</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4 d-flex justify-content-center">
                {{ $pendidikan->links() }}
            </div>


        </div>
    </section>
@endsection
