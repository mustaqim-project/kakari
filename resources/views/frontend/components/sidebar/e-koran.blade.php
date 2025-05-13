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
