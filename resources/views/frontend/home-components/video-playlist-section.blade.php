<!-- Video Playlists Section -->
<section class="playlist-section">
    <div class="container">
        <div class="playlist-tabs">
            @if ($featuredPlaylists->count() > 0)
                @foreach ($featuredPlaylists as $index => $playlist)
                    <button class="tab-button {{ $loop->first ? 'active' : '' }}"
                        onclick="openTab(event, 'playlist{{ $playlist->id }}')">
                        {{ $playlist->judul }}
                    </button>
                @endforeach
            @else
                <button class="tab-button active" onclick="openTab(event, 'playlist1')">Kajian Ramadhan</button>
                <button class="tab-button" onclick="openTab(event, 'playlist2')">Tafsir Quran</button>
                <button class="tab-button" onclick="openTab(event, 'playlist3')">Ceramah Singkat</button>
            @endif
        </div>

        <div class="playlist-content">
            @if ($featuredPlaylists->count() > 0)
                @foreach ($featuredPlaylists as $playlist)
                    <div id="playlist{{ $playlist->id }}"
                        class="tab-content {{ $loop->first ? 'active' : '' }}">
                        <div class="video-grid">
                            @if ($playlist->videos->count() > 0)
                                @foreach ($playlist->videos->take(4) as $video)
                                    <div class="video-item">
                                        <div class="video-thumbnail">
                                            {!! $video->embed_code !!}
                                        </div>
                                        <div class="video-info">
                                            <h3 class="video-title">{{ $video->judul }}</h3>
                                            <div class="video-meta">
                                                <span><i class="far fa-eye"></i> {{ $video->views }}</span>
                                                <span><i class="far fa-clock"></i>
                                                    {{ $video->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center p-5">
                                    <p>Belum ada video dalam playlist ini.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Placeholder playlists if none exist -->
                <div id="playlist1" class="tab-content active">
                    <div class="video-grid">
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w" title="YouTube video"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Keutamaan Puasa Ramadhan dan Amalan Sunnah</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 150K</span>
                                    <span><i class="far fa-clock"></i> 1 minggu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="playlist2" class="tab-content">
                    <div class="video-grid">
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w" title="YouTube video"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Tafsir Surah Al-Baqarah Ayat 183-185: Tentang Puasa</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 95K</span>
                                    <span><i class="far fa-clock"></i> 5 hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="playlist3" class="tab-content">
                    <div class="video-grid">
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <iframe src="https://www.youtube.com/embed/mKCTkv9hx4w" title="YouTube video"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">3 Amalan Ringan Pembuka Pintu Surga di Ramadhan</h3>
                                <div class="video-meta">
                                    <span><i class="far fa-eye"></i> 250K</span>
                                    <span><i class="far fa-clock"></i> 3 hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
