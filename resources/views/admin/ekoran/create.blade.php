@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.E-Koran') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.Create E-Koran') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.ekoran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="image">{{ __('admin.Image') }}</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                        <input type="file" name="image" id="image-upload" class="form-control">
                    </div>
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="judul">{{ __('admin.Judul') }}</label>
                    <input name="judul" type="text" class="form-control" id="judul" value="{{ old('judul') }}">
                    @error('judul')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">{{ __('admin.Deskripsi') }}</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tanggal Terbit --}}
                <div class="form-group">
                    <label for="tanggal_terbit">{{ __('admin.Tanggal Terbit') }}</label>
                    <input name="tanggal_terbit" type="date" class="form-control" id="tanggal_terbit" value="{{ old('tanggal_terbit') }}">
                    @error('tanggal_terbit')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
