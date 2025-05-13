<section class="py-5 bg-light" style="background-color: var(--card) !important;">
    <div class="container mt-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Latest Articles Section -->
                <section class="mb-5">
                    <h2 class="section-title mb-4">Artikel Terbaru</h2>

                    <!-- Grid Layout -->
                    <div class="row g-4">
                        @foreach ($recentNews->take(4) as $article)
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('news-details', $article->slug) }}"
                                    class="text-decoration-none text-dark">
                                    <div class="card h-100">
                                        <img src="{{ asset($article->image) }}" class="card-img-top"
                                            alt="{{ $article->title ?? 'Gambar artikel' }}"
                                            style="height: 150px; object-fit: cover;">


                                        <div class="card-body">
                                            @if ($article->category)
                                                <span
                                                    class="badge bg-primary mb-2">{{ $article->category->name }}</span>
                                            @endif

                                            <h5 class="card-title">{{ $article->title }}</h5>
                                            <p class="card-text">
                                                {{ Str::limit(strip_tags($article->content), 100) }}</p>
                                        </div>

                                        <div class="card-footer bg-transparent">
                                            <small
                                                class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- View More Button -->
                    <div class="text-center mt-4">
                        <a href="{{ route('news') }}" class="btn btn-outline-primary">Lihat Lebih Banyak
                            Artikel</a>
                    </div>
                </section>

                <!-- Kajian Terbaru Section -->
                <section class="mb-5">
                    <h2 class="section-title mb-4">Kajian Terbaru</h2>
                    @if ($categorySectionTwo->count() > 0)
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/news/' . $categorySectionTwo->first()->image) }}"
                                        class="img-fluid rounded-start h-100"
                                        alt="{{ $categorySectionTwo->first()->title }}" style="object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="badge bg-warning text-dark mb-2">Kajian</span>
                                        <h5 class="card-title">{{ $categorySectionTwo->first()->title }}</h5>
                                        <p class="card-text">
                                            {{ Str::limit($categorySectionTwo->first()->content, 150) }}</p>
                                        <p class="card-text"><small
                                                class="text-muted">{{ $categorySectionTwo->first()->created_at->diffForHumans() }}</small>
                                        </p>
                                        <a href="{{ route('news.show', $categorySectionTwo->first()->slug) }}"
                                            class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                        class="card-img-top" alt="Kajian" style="height: 180px; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="badge bg-warning text-dark mb-2">Kajian</span>
                                        <h5 class="card-title">Fiqh Zakat Kontemporer</h5>
                                        <p class="card-text">Pembahasan tentang zakat di era modern dengan berbagai
                                            kasus baru yang perlu dipahami oleh umat muslim.</p>
                                        <p class="card-text"><small class="text-muted">Diposting 10 hari
                                                lalu</small>
                                        </p>
                                        <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </section>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                @include('frontend.components.sidebar.search-widget')

                <!-- Popular Articles -->
                @include('frontend.components.sidebar.popular-articles')

                <!-- Categories -->
                @include('frontend.components.sidebar.categories')

                <!-- E-Koran -->
                @include('frontend.components.sidebar.e-koran')


                <!-- Newsletter Subscription -->
                @include('frontend.components.sidebar.newsletter')

            </div>
        </div>
    </div>
</section>
