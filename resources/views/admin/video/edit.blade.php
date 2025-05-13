@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Edit Video Youtube') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Edit Video') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.video.update', $video->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Playlist --}}
                    <div class="form-group">
                        <label for="playlist_id">{{ __('admin.Playlist') }}</label>
                        <select name="playlist_id" id="playlist_id" class="form-control">
                            <option value="">-- Pilih Playlist --</option>
                            @foreach ($playlists as $playlist)
                                <option value="{{ $playlist->id }}"
                                    {{ old('playlist_id', $video->playlist_id) == $playlist->id ? 'selected' : '' }}>
                                    {{ $playlist->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('playlist_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Judul --}}
                    <div class="form-group">
                        <label for="title">{{ __('admin.Title') }}</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ old('title', $video->title) }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div class="form-group">
                        <label for="description">{{ __('admin.Description') }}</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description', $video->description) }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Kode Embed --}}
                    <div class="form-group">
                        <label for="code_frame">{{ __('admin.Embed Code') }}</label>
                        <textarea name="code_frame" class="form-control" id="code_frame" rows="3">{{ old('code_frame', $video->code_frame) }}</textarea>
                        @error('code_frame')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Preview Thumbnail (Opsional) --}}
                    @if ($video->thumbnail)
                        <div class="form-group">
                            <label>{{ __('admin.Thumbnail Preview') }}</label><br>
                            <img src="{{ $video->thumbnail }}" alt="Thumbnail" class="img-fluid" style="max-width: 320px;">
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                    <a href="{{ route('admin.video.index') }}" class="btn btn-secondary">{{ __('admin.Cancel') }}</a>
                </form>
            </div>
        </div>
    </section>
@endsection
