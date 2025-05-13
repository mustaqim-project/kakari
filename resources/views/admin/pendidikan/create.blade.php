@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.Pendidikan') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.Create Pendidikan') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pendidikan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="image">{{ __('admin.Image') }}</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                        <input type="file" name="image" id="image-upload">
                    </div>
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input name="judul" type="text" class="form-control" value="{{ old('judul') }}">
                    @error('judul')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tipe_program">Tipe Program</label>
                    <select name="tipe_program" class="form-control">
                        <option value="">Pilih Tipe</option>
                        <option value="formal">Formal</option>
                        <option value="nonformal">Nonformal</option>
                        <option value="online">Online</option>
                    </select>
                    @error('tipe_program')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea name="konten" class="form-control">{{ old('konten') }}</textarea>
                    @error('konten')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input name="lokasi" type="text" class="form-control" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input name="tanggal_mulai" type="date" class="form-control" value="{{ old('tanggal_mulai') }}">
                    @error('tanggal_mulai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input name="tanggal_berakhir" type="date" class="form-control" value="{{ old('tanggal_berakhir') }}">
                    @error('tanggal_berakhir')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status_pendaftaran">Status Pendaftaran</label>
                    <select name="status_pendaftaran" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="dibuka">Dibuka</option>
                        <option value="ditutup">Ditutup</option>
                        <option value="beasiswa tersedia">Beasiswa Tersedia</option>
                        <option value="kuota terbatas">Kuota Terbatas</option>
                    </select>
                    @error('status_pendaftaran')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="link_pendaftaran">Link Pendaftaran</label>
                    <textarea name="link_pendaftaran" class="form-control">{{ old('link_pendaftaran') }}</textarea>
                    @error('link_pendaftaran')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="akreditasi">Akreditasi</label>
                    <input name="akreditasi" type="text" class="form-control" value="{{ old('akreditasi') }}">
                    @error('akreditasi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="badge">Badge</label>
                    <input name="badge" type="text" class="form-control" value="{{ old('badge') }}">
                    @error('badge')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kuota">Kuota</label>
                    <input name="kuota" type="text" class="form-control" value="{{ old('kuota') }}">
                    @error('kuota')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <textarea name="jadwal" class="form-control">{{ old('jadwal') }}</textarea>
                    @error('jadwal')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input name="is_active" type="checkbox" class="form-check-input" id="is_active" value="1" checked>
                    <label class="form-check-label" for="is_active">Aktif</label>
                    @error('is_active')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
