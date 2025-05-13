<!-- Popular Articles -->
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Artikel Terpopuler</h5>
    </div>
    <div class="list-group list-group-flush">
        @foreach ($mostViewedPosts as $key => $post)
            <a href="{{ route('news-details', $post->slug) }}"
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
