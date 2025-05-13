@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Struktur Organisasi') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update Struktur Organisasi') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pengurus.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Gambar --}}
                    <div class="form-group">
                        <label for="image">{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="image" id="image-upload">
                            @if ($pengurus->image)
                                <div class="mt-2">
                                    <img src="{{ asset($pengurus->image) }}" alt="Current Image" width="150">
                                </div>
                            @endif
                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nama --}}
                    <div class="form-group">
                        <label for="name">{{ __('admin.Nama') }}</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{ old('name', $pengurus->name) }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jabatan --}}
                    <div class="form-group">
                        <label for="jabatan">{{ __('admin.Jabatan') }}</label>
                        <input name="jabatan" type="text" class="form-control" id="jabatan" value="{{ old('jabatan', $pengurus->jabatan) }}">
                        @error('jabatan')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div class="form-group">
                        <label for="deskripsi">{{ __('admin.Deskripsi') }}</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi">{{ old('deskripsi', $pengurus->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
