@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.download') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.Create download') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.download.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Nama File --}}
                <div class="form-group">
                    <label for="name">{{ __('admin.Nama File') }}</label>
                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                    @error('name')
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

                {{-- Kategori --}}
                <div class="form-group">
                    <label for="cat_download_id">{{ __('admin.Kategori') }}</label>
                    <select name="cat_download_id" id="cat_download_id" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('cat_download_id') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('cat_download_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Upload File --}}
                <div class="form-group">
                    <label for="download_file">{{ __('admin.File') }}</label>
                    <input type="file" name="download_file" class="form-control-file" id="download_file">
                    @error('download_file')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
