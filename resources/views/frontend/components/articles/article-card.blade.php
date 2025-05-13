<div class="col-md-6 col-lg-6">
    <a href="{{ route('kajian-details', $article->slug) }}" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset($article->image) }}" class="card-img-top"
                alt="{{ $article->title ?? 'Gambar artikel' }}"
                style="height: 150px; object-fit: cover;">
            <div class="card-body">
                @if ($article->category)
                    <span class="badge bg-primary mb-2">{{ $article->category->name }}</span>
                @endif
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ Str::limit(strip_tags($article->content), 100) }}</p>
            </div>
            <div class="card-footer bg-transparent">
                <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
            </div>
        </div>
    </a>
</div>
