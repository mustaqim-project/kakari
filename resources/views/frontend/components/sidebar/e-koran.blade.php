<!-- E-Koran -->
{{-- <div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">E-Koran Terbaru</h5>
    </div>
    <div class="card-body text-center p-0">
        @if ($latestEkoran->count() > 0)
            <img src="{{ asset($latestEkoran->image) }}"
                class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                style="max-height: 300px; object-fit: cover; margin: 2.5em;"
                data-bs-toggle="modal" data-bs-target="#ekoranModal">
        @else
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=800&q=80"
                class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                style="max-height: 300px; object-fit: cover; margin: 2.5em;"
                data-bs-toggle="modal" data-bs-target="#ekoranModal">
        @endif
        @if ($latestEkoran)
            <img src="{{ asset($latestEkoran->image) }}" class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                style="max-height: 300px; object-fit: cover; margin: 2.5em;" data-bs-toggle="modal"
                data-bs-target="#ekoranModal">
        @else
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=800&q=80"
                class="img-fluid cursor-pointer" alt="E-Koran Edisi Terbaru"
                style="max-height: 300px; object-fit: cover; margin: 2.5em;" data-bs-toggle="modal"
                data-bs-target="#ekoranModal">
        @endif

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

    </div>
</div> --}}
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">E-Koran Terbaru</h5>
    </div>
    <div class="card-body text-center p-0">
        @if ($latestEkoran)
            <a href="{{ asset($latestEkoran->image) }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset($latestEkoran->image) }}" class="img-fluid" alt="E-Koran Edisi Terbaru"
                    style="max-height: 300px; object-fit: cover; margin: 2.5em;">
            </a>
            <div class="p-3">
                <h5>{{ $latestEkoran->judul }}</h5>
                <a href="{{ asset($ekoran->image) }}" class="btn btn-primary mt-2" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-external-link-alt me-2"></i>Buka E-Koran
                </a>

            </div>
        @else
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=800&q=80"
                class="img-fluid" alt="E-Koran Edisi Terbaru"
                style="max-height: 300px; object-fit: cover; margin: 2.5em;">
            <div class="p-3">
                <p class="text-muted">Tidak ada e-koran tersedia</p>
            </div>
        @endif
    </div>
</div>
