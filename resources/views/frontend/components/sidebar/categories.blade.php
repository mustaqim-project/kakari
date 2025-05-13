<!-- Categories -->
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Kategori</h5>
    </div>
    <div class="card-body">
        <div class="d-flex flex-wrap gap-2">
            @php
                use App\Models\Category;
            @endphp
            @foreach (Category::withCount('news')->get() as $category)
                <a href="{{ route('category.show', $category->slug) }}"
                    class="btn btn-sm btn-outline-primary">
                    {{ $category->name }} ({{ $category->news_count }})
                </a>
            @endforeach
        </div>
    </div>
</div>
