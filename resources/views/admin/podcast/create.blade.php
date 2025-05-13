@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Podcast') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Create Podcast') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.podcast.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Playlist --}}
                    <div class="form-group">
                        <label for="playlist_id">{{ __('admin.Playlist') }}</label>
                        <select name="playlist_id" id="playlist_id" class="form-control">
                            <option value="">-- Pilih Playlist --</option>
                            @foreach ($playlists as $playlist)
                                <option value="{{ $playlist->id }}"
                                    {{ old('playlist_id') == $playlist->id ? 'selected' : '' }}>
                                    {{ $playlist->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('playlist_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Cover Image --}}

                    <div class="form-group">
                        <label for="image">{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="cover-image" id="image-upload">
                        </div>
                        @error('cover-image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Audio File --}}
                    <div class="form-group">
                        <label for="audio_file">{{ __('admin.Audio File') }}</label>
                        <input type="file" name="audio_file" class="form-control-file" id="audio_file">
                        @error('audio_file')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>





                    {{-- Judul --}}
                    <div class="form-group">
                        <label for="title">{{ __('admin.Title') }}</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    {{-- Deskripsi --}}
                    <div class="form-group">
                        <label for="description">{{ __('admin.Description') }}</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    {{-- Is Featured --}}
                    <div class="form-group form-check">
                        <input type="checkbox" name="is_featured" class="form-check-input" id="is_featured"
                            {{ old('is_featured') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_featured">{{ __('admin.Featured') }}</label>
                    </div>

                    {{-- Is Active --}}
                    <div class="form-group form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="is_active"
                            {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">{{ __('admin.Active') }}</label>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
