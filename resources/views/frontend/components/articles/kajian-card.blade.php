<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('storage/news/' . $kajian->image) }}"
                class="img-fluid rounded-start h-100"
                alt="{{ $kajian->title }}"
                style="object-fit: cover;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <span class="badge bg-warning text-dark mb-2">Kajian</span>
                <h5 class="card-title">{{ $kajian->title }}</h5>
                <p class="card-text">{{ Str::limit($kajian->content, 150) }}</p>
                <p class="card-text">
                    <small class="text-muted">{{ $kajian->created_at->diffForHumans() }}</small>
                </p>
                <a href="{{ route('news.show', $kajian->slug) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
