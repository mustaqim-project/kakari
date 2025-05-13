@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.pendidikan') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update pendidikan') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pendidikan.update', $pendidikan->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')



                    <div class="form-group">
                        <label for="gambar">{{ __('admin.Image') }}</label>

                        {{-- Preview Image --}}
                        <div class="mb-2">
                            <img id="current-image-preview" src="{{ asset($pendidikan->gambar) }}" alt="Current Image"
                                width="150" style="border:1px solid #ccc; padding:4px; border-radius:8px;">
                        </div>

                        {{-- File Input --}}
                        <div>
                            <input type="file" name="gambar" id="gambar" class="form-control-file" accept="image/*"
                                onchange="previewImage(event)">
                        </div>

                        @error('gambar')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    {{-- Judul --}}
                    <div class="form-group">
                        <label for="judul">{{ __('admin.Judul') }}</label>
                        <input name="judul" type="text" class="form-control" id="judul"
                            value="{{ old('judul', $pendidikan->judul) }}">
                        @error('judul')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tipe Program --}}
                    <div class="form-group">
                        <label for="tipe_program">{{ __('admin.Tipe Program') }}</label>
                        <select name="tipe_program" class="form-control" id="tipe_program">
                            <option value="">-- Pilih Tipe --</option>
                            <option value="formal"
                                {{ old('tipe_program', $pendidikan->tipe_program) == 'formal' ? 'selected' : '' }}>Formal
                            </option>
                            <option value="nonformal"
                                {{ old('tipe_program', $pendidikan->tipe_program) == 'nonformal' ? 'selected' : '' }}>
                                Nonformal</option>
                            <option value="online"
                                {{ old('tipe_program', $pendidikan->tipe_program) == 'online' ? 'selected' : '' }}>Online
                            </option>
                        </select>
                        @error('tipe_program')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div class="form-group">
                        <label for="deskripsi">{{ __('admin.Deskripsi') }}</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi">{{ old('deskripsi', $pendidikan->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Konten --}}
                    <div class="form-group">
                        <label for="konten">{{ __('admin.Konten') }}</label>
                        <textarea name="konten" class="form-control" id="konten">{{ old('konten', $pendidikan->konten) }}</textarea>
                        @error('konten')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Lokasi --}}
                    <div class="form-group">
                        <label for="lokasi">{{ __('admin.Lokasi') }}</label>
                        <input name="lokasi" type="text" class="form-control" id="lokasi"
                            value="{{ old('lokasi', $pendidikan->lokasi) }}">
                        @error('lokasi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tanggal Mulai --}}
                    <div class="form-group">
                        <label for="tanggal_mulai">{{ __('admin.Tanggal Mulai') }}</label>
                        <input name="tanggal_mulai" type="date" class="form-control" id="tanggal_mulai"
                            value="{{ old('tanggal_mulai', $pendidikan->tanggal_mulai ? $pendidikan->tanggal_mulai->format('Y-m-d') : '') }}">
                        @error('tanggal_mulai')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tanggal Berakhir --}}
                    <div class="form-group">
                        <label for="tanggal_berakhir">{{ __('admin.Tanggal Berakhir') }}</label>
                        <input name="tanggal_berakhir" type="date" class="form-control" id="tanggal_berakhir"
                            value="{{ old('tanggal_berakhir', $pendidikan->tanggal_berakhir ? $pendidikan->tanggal_berakhir->format('Y-m-d') : '') }}">
                        @error('tanggal_berakhir')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Status Pendaftaran --}}
                    <div class="form-group">
                        <label for="status_pendaftaran">{{ __('admin.Status Pendaftaran') }}</label>
                        <select name="status_pendaftaran" class="form-control" id="status_pendaftaran">
                            <option value="">-- Pilih Status --</option>
                            <option value="dibuka"
                                {{ old('status_pendaftaran', $pendidikan->status_pendaftaran) == 'dibuka' ? 'selected' : '' }}>
                                Dibuka</option>
                            <option value="ditutup"
                                {{ old('status_pendaftaran', $pendidikan->status_pendaftaran) == 'ditutup' ? 'selected' : '' }}>
                                Ditutup</option>
                            <option value="beasiswa tersedia"
                                {{ old('status_pendaftaran', $pendidikan->status_pendaftaran) == 'beasiswa tersedia' ? 'selected' : '' }}>
                                Beasiswa Tersedia</option>
                            <option value="kuota terbatas"
                                {{ old('status_pendaftaran', $pendidikan->status_pendaftaran) == 'kuota terbatas' ? 'selected' : '' }}>
                                Kuota Terbatas</option>
                        </select>
                        @error('status_pendaftaran')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Link Pendaftaran --}}
                    <div class="form-group">
                        <label for="link_pendaftaran">{{ __('admin.Link Pendaftaran') }}</label>
                        <input name="link_pendaftaran" type="text" class="form-control" id="link_pendaftaran"
                            value="{{ old('link_pendaftaran', $pendidikan->link_pendaftaran) }}">
                        @error('link_pendaftaran')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Akreditasi --}}
                    <div class="form-group">
                        <label for="akreditasi">{{ __('admin.Akreditasi') }}</label>
                        <input name="akreditasi" type="text" class="form-control" id="akreditasi"
                            value="{{ old('akreditasi', $pendidikan->akreditasi) }}">
                        @error('akreditasi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Badge --}}
                    <div class="form-group">
                        <label for="badge">{{ __('admin.Badge') }}</label>
                        <input name="badge" type="text" class="form-control" id="badge"
                            value="{{ old('badge', $pendidikan->badge) }}">
                        @error('badge')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Kuota --}}
                    <div class="form-group">
                        <label for="kuota">{{ __('admin.Kuota') }}</label>
                        <input name="kuota" type="text" class="form-control" id="kuota"
                            value="{{ old('kuota', $pendidikan->kuota) }}">
                        @error('kuota')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jadwal --}}
                    <div class="form-group">
                        <label for="jadwal">{{ __('admin.Jadwal') }}</label>
                        <textarea name="jadwal" class="form-control" id="jadwal">{{ old('jadwal', $pendidikan->jadwal) }}</textarea>
                        @error('jadwal')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="form-group">
                        <label for="is_active">{{ __('admin.Status Aktif') }}</label>
                        <select name="is_active" class="form-control" id="is_active">
                            <option value="1" {{ old('is_active', $pendidikan->is_active) == 1 ? 'selected' : '' }}>
                                Aktif</option>
                            <option value="0" {{ old('is_active', $pendidikan->is_active) == 0 ? 'selected' : '' }}>
                                Tidak Aktif</option>
                        </select>
                        @error('is_active')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('current-image-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
