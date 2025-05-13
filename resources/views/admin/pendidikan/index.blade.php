@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Pendidikan') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All Pendidikan') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.pendidikan.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="pendidikan-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Tipe Program</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Status Pendaftaran</th>
                                <th>Akreditasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendidikans as $pendidikan)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($pendidikan->gambar)
                                            <img src="{{ asset($pendidikan->gambar) }}" alt="gambar" width="50">
                                        @else
                                            <span class="text-muted">Tidak ada gambar</span>
                                        @endif
                                    </td>
                                    <td>{{ $pendidikan->judul }}</td>
                                    <td>{{ ucfirst($pendidikan->tipe_program) }}</td>
                                    <td>{{ $pendidikan->lokasi ?? '-' }}</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($pendidikan->tanggal_mulai)->format('d M Y') }} -
                                        {{ \Carbon\Carbon::parse($pendidikan->tanggal_berakhir)->format('d M Y') }}
                                    </td>
                                    <td>{{ ucfirst($pendidikan->status_pendaftaran) }}</td>
                                    <td>{{ $pendidikan->akreditasi ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('admin.pendidikan.edit', $pendidikan->id) }}"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.pendidikan.destroy', $pendidikan->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#pendidikan-table").DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [8]
            }]

        });
    </script>
@endpush
