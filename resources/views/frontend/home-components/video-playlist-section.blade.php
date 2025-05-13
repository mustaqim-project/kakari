<!-- Video Playlists Section -->
<section class="playlist-section">
    <div class="container">
        <div class="playlist-tabs">
                @foreach ($featuredPlaylists as $index => $playlist)
                    <button class="tab-button {{ $loop->first ? 'active' : '' }}"
                        onclick="openTab(event, 'playlist{{ $playlist->id }}')">
                        {{ $playlist->title }}
                    </button>
                @endforeach

        </div>

        <div class="playlist-content">
                @foreach ($featuredPlaylists as $playlist)
                    <div id="playlist{{ $playlist->id }}"
                        class="tab-content {{ $loop->first ? 'active' : '' }}">
                        <div class="video-grid">
                            @if ($playlist->videos->count() > 0)
                                @foreach ($playlist->videos->take(4) as $video)
                                    <div class="video-item">
                                        <div class="video-thumbnail">
                                            {!! $video->code_frame !!}
                                        </div>
                                        <div class="video-info">
                                            <h3 class="video-title">{{ $video->title }}</h3>
                                            <div class="video-meta">
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

        </div>
    </div>
</section>
