@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.download') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All download') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.download.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="download-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nama File</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($downloads as $download)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $download->name }}</td>
                                    <td>{{ $download->deskripsi }}</td>
                                    <td>{{ $download->catDownload->name ?? '-' }}</td>
                                    <td>
                                        @if ($download->download_file)
                                            <a href="{{ asset($download->download_file) }}" target="_blank">Download</a>
                                        @else
                                            <span class="text-muted">Tidak ada file</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.download.edit', $download->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.download.destroy', $download->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
        $("#download-table").DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [5] // Kolom aksi
            }]
        });
    </script>
@endpush
