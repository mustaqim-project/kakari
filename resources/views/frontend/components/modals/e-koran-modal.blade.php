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
